<?php
// Include your Database class or setup your database connection here
include '../../inc/Database.php';
session_start();

if (isset($_GET['id'])) {
    // Get the ID from the URL
    $id = $_GET['id'];

    // Update the status value from 1 to 0
    $table = "users";
    $fields = array(
        "status" => 0
    );
    $where = array(
        "id" => $id
    );

    // Update the status value
    $db = new Database();
    $updateData = $db->update($table, $fields, $where);

    // Check if the update was successful
    if ($updateData) {
        // Redirect back to view-research.php
        header("Location: ../view.php");
        $_SESSION['status'] = "Removed Successufully";
        exit;
    } else {
        // Handle any errors if the update fails

        echo "Error updating the status.";
    }
} else {
    // Handle the case when no 'id' is provided in the URL
    echo "ID not provided.";
}
?>
