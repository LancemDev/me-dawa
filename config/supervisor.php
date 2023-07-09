<?php

include "../database/database.php";
$database = new Database();

// Get the drugID from the form
$drugID = $_POST['drugID'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the drugID is empty
    if (empty($drugID)) {
        echo "<script>alert('Please fill in the drug ID')</script>";
        echo "<script>window.location.href='../view/supervisor.view.php'</script>";
    } else {
        // 
        $database->approveMeds($drugID);
        echo "<script>alert('Drug approved successfully')</script>";
        echo "<script>window.location.href='../view/supervisor.php'</script>";
    }
}


?>