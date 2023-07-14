<?php

include_once '../database/database.php';

$database = new database();

// get the drug details

$drugID = $_POST['ID'];
$drugName = $_POST['drugName'];
$drugDescription  = $_POST['drugDescription'];
$drugPrice = $_POST['drugPrice'];
$drugQuantity = $_POST['drugQuantity'];
$drugExpirationDate = $_POST['drugExpirationDate'];
$drugManufactureDate = $_POST['drugManufacturingDate'];
$drugCompany = $_POST['drugCompany'];
$drugApproved = $_POST['drugApproved'];

// update the drug details
if ($database->updateDrug($drugID, $drugName, $drugDescription, $drugPrice, $drugQuantity, $drugExpirationDate, $drugManufactureDate, $drugCompany, $drugApproved)) {
    echo "<script>alert('Drug updated successfully!')</script>";
    echo "<script>window.location.href = '../view/dash.php?action=viewDrugs'</script>";
} else {
    echo "<script>alert('Drug update failed!')</script>";
}