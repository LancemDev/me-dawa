<?php

include_once '../database/database.php';
$database = new Database();

// Get drug details from the form and add them to the database
$drugName = $_POST['drugName'];
$drugDescription = $_POST['drugDescription'];
$drugPrice = $_POST['drugPrice'];
$drugQuantity = $_POST['drugQuantity'];
$drugExpirationDate = $_POST['drugExpirationDate'];
$drugManufacturingDate = $_POST['drugManufacturingDate'];
$drugCompany = $_POST['drugCompany'];

// Check if the entries are empty
if (empty($drugName) || empty($drugDescription) || empty($drugPrice) || empty($drugQuantity) || empty($drugExpirationDate) || empty($drugCompany)) {
    echo "<script>alert('Please fill in all the fields')</script>";
    echo "<script>window.location.href='../view/company.view.php'</script>";
} else {
    // Add the drug to the database
    $database->addMeds($drugName, $drugDescription, $drugPrice, $drugQuantity, $drugExpirationDate, $drugManufacturingDate, $drugCompany,);
    echo "<script>alert('Drug added successfully')</script>";
    echo "<script>window.location.href='../view/company.view.php'</script>";
}


?>