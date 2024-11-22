<?php
require"config.php";

if(isset($_POST["submit"])){

    $first_name = $_POST["first_name"];
    $surname = $_POST["surname"];
    $phone_number = $_POST["phone_number"];
    $locatio = $_POST["locatio"];
    $village = $_POST["village"];
    
    
    $dat = $_POST["dat"];
    $contact_address = $_POST["contact_address"];
    $networth = $_POST["networth"];
    
    
   
    
    
    
   
    
    
// inserting into db 
    $sql = "INSERT INTO `apply` (first_name, surname, phone_number, locatio, village, dat,  contact_address, networth) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../parent/apply.php?error=sqlerror_in_inserting");
        exit();
    } else{
          
        mysqli_stmt_bind_param($stmt, "ssssssss", $first_name, $surname, $phone_number, $locatio, $village, $dat, $contact_address, $networth);
        mysqli_stmt_execute($stmt);
        $_SESSION['status'] = "Congratulations!";
        header("Location: ../parent/apply.php?submited=success");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    $_SESSION['status'] = "Un Clicked Button";
    header("Location: ../register.php?error=conn");
    exit();
}

?>