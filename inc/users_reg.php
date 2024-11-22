<?php
session_start();
require 'config.php';

if (isset($_POST['submit'])) {
    // Get form input values
    $username = $_POST['username'];
    $email = $_POST['email']; // Add email field
    $phone = $_POST['phone']; // Rename phoneNumber to phone
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO users (username, email, phone, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['message311'] = "Error in Database";
        header("Location: ../register.php?error=sqlerror_in_inserting");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $phone, $hashedPassword);
        mysqli_stmt_execute($stmt);
        $_SESSION['message311'] = "Account Added";
        header("Location: ../index.php?signup=success");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    header("Location: ../register.php");
    exit();
}
?>
