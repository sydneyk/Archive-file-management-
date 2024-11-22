<?php
session_start();


  require 'config.php';


if (isset($_POST['submit'])) {

  //calling the database

  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $Location = $_POST['Location'];
  $password = $_POST['password'];
  $date = date('Y-m-d');
  

               
               $sql = "INSERT INTO adpote (username, email, phone_number, Location, password, date) VALUES (?, ?, ?, ?, ?, ?)";
               $stmt = mysqli_stmt_init($con);
               if (!mysqli_stmt_prepare($stmt, $sql)) {
                    # code...
                 header("Location: ../adopter_register.php?error=sqlerror_in_inserting");

           exit();
               }
               else{
                // hashing a password
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                  mysqli_stmt_bind_param($stmt, "ssssss", $username, $email, $phone_number, $Location, $hashedPwd, $date);
                  mysqli_stmt_execute($stmt);
                  $_SESSION['message311'] = "Account Added";
                  header("Location: ../adopter_register.php?singup=sucess");
           exit();
                  
               }

         

  

  mysqli_stmt_close($stmt);
  mysqli_close($con);  
  
}
else{
  header("Location: ../add_manager.php");
  exit();
}
