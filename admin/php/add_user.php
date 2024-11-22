<?php
session_start();
require '../../inc/config.php';

if (isset($_POST['submit'])) {
    // Get form input values
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
  

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO users (username, password, gender, email) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['message311'] = "Error in Database";
        header("Location: ../Home_page.php?error=sqlerror_in_inserting");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ssss", $username, $hashedPassword, $gender, $email);
        mysqli_stmt_execute($stmt);
        $_SESSION['message311'] = "Educator's Account Added";
        header("Location:  ../Home_page.php?signup=success");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    header("Location: ../register.php");
    exit();
}
?>
