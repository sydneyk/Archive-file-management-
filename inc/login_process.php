<?php
ob_start();
session_start();

require 'config.php';

// Check if username and password are provided
if (!isset($_POST['username'], $_POST['password'])) {
    $_SESSION['message'] = "Insert Both username and password!";
    header("Location: ../login.php");
    exit();
}

// Function to authenticate user from a given table
function authenticateUser($con, $table, $username, $password) {
    $stmt = $con->prepare("SELECT id, password FROM $table WHERE username = ?");
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashedPassword);
            $stmt->fetch();
            if (password_verify($password, $hashedPassword)) {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['message'] = $username;
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;

                return true;
            }
        }
        $stmt->close();
    }
    return false;
}

// Attempt to authenticate the user from each table
if (authenticateUser($con, 'admin', $_POST['username'], $_POST['password'])) {
    header("Location: ../admin/Home_page.php");
} elseif (authenticateUser($con, 'users', $_POST['username'], $_POST['password'])) {
    header("Location: ../user/Home_page.php");
} else {
    // Incorrect username or password
    $_SESSION['message'] = "Incorrect username and/or password!";
    header("Location: ../index.php");
}

mysqli_close($con);
?>

