<?php
session_start();
require '../../inc/config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['editId'];
    $username = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
   
    // SQL query to update data in the table
    $sql = "UPDATE users SET username = ?, email = ?, gender = ? WHERE id= ?";
    $stmt = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../edit.php?error=sqlerror_in_updating");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $gender, $id);
        mysqli_stmt_execute($stmt);
        
        $_SESSION['status'] = "Congratulations! update successful";
        header("Location: ../view.php?update=success");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    $_SESSION['status'] = "Un Clicked Button";
    header("Location: ../register.php");
    exit();
}
?>
