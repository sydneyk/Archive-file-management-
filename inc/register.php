<?php
require"config.php";

if(isset($_POST["submit"])){

    $first_name = $_POST["first_name"];
    $surname = $_POST["surname"];
    $phone_number = $_POST["phone_number"];
    $locatio = $_POST["locatio"];
    $village = $_POST["village"];
    $village_headman = $_POST["village_headman"];
    $TA = $_POST["TA"];
    $dat = $_POST["dat"];
    $contact_address = $_POST["contact_address"];
    $networth = $_POST["networth"];
    $witnes = $_POST["witnes"];
    $land_purpose = $_POST["land_purpose"];
   
    
    
    
   
    
    
// inserting into db 
    $sqli = "INSERT INTO `register_land` (first_name, surname, phone_number, locatio, village, village_headman, TA, dat,  contact_address, networth, witnes, land_purpose) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sqli)) {
        header("Location: ../parent/register_land.php?error=sqlerror_in_inserting");
        exit();
    } else{

        mysqli_stmt_bind_param($stmt, "ssssssssssss", $first_name, $surname, $phone_number, $locatio, $village, $village_headman, $TA, $dat, $contact_address, $networth, $witnes, $land_purpose);
        mysqli_stmt_execute($stmt);
        $_SESSION['status'] = "Congratulations!";
        header("Location: ../parent/register_land.php?submited=success");
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