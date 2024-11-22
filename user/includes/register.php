<?php
require"../../inc/config.php";

if(isset($_POST["submit"])){

    $first_name = $_POST["first_name"];
    $surname = $_POST["surname"];
    $phone_number = $_POST["phone_number"];
    $village = $_POST["village"];
    $land_purpose = $_POST["land_purpose"];
    $TA = $_POST["TA"];
    $witness = $_POST["witnes"];
    $dat = $_POST["dat"];
    $networth = $_POST["networth"];
    $locatio = $_POST["locatio"];
    $contact_address = $_POST["contact_address"];
    $village_headman = $_POST["village_headman"];
// inserting into db 
    $sqli = "INSERT INTO `land_owner` (first_name, surname, phone_number, village, land_purpose, TA, witnes, dat, networth, locatio, contact_address, village_headman) VALUES ('$first_name', '$surname', '$phone_number', '$village', '$land_purpose', '$TA', '$witnes', '$dat', '$networth', '$locatio', '$contact_address', '$village_headman')";
    $stmt = mysqli_stmt_init($sql);
    if (!mysqli_stmt_prepare($stmt, $sqli)) {
        header("Location: ../add_deed.php?error=sqlerror_in_inserting");
        exit();
    } else{

        mysqli_stmt_bind_param($stmt, "sssssssssssss", $first_name, $surname, $phone_number, $village, $land_purpose, $TA, $witnes, $dat, $networth, $locatio, $contact_address, $village_headman);
        mysqli_stmt_execute($stmt);
        $_SESSION['status'] = "Congratulations!";
        header("Location: ../add_deed.php?submited=success");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($sql);
} else {
    $_SESSION['status'] = "Un Clicked Button";
    header("Location: ../register.php?error=conn");
    exit();
}

?>