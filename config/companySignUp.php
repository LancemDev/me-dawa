<?php

include_once '../database/Database.php';

$database = new Database();

// Get drug details from Templates/companySignup.php
$companyName = $_POST['companyName'];
$companyEmailAddress = $_POST['companyEmailAddress'];
$companyPassword = $_POST['companyPassword'];
$companyPhoneNumber = $_POST['companyPhoneNumber'];
$companyAddress = $_POST['companyAddress'];

// Check if the fields are empty
if (!empty($companyName) && !empty($companyEmailAddress) && !empty($companyPassword) && !empty($companyPhoneNumber) && !empty($companyAddress)) {
    // Check if the company exists and if they do, redirect them to views/company.view.php
    if ($database->companyExists($companyEmailAddress, $companyPassword)) {
        echo "<script>alert('Company already exists')</script>";
        echo "<script>window.location.href='../Templates/companySignup.html'</script>";
    } else {
        // Add the company to the database
        $database->companySignup($companyName, $companyEmailAddress, $companyPassword, $companyPhoneNumber, $companyAddress);
        echo "<script>alert('Company added successfully')</script>";
        // GEt the company id
        $companyId = $database->getCompanyId($companyEmailAddress);
        // Then display the id to the user
        echo "<script>alert('Your company id is: $companyId')</script>";
        echo "<script>window.location.href='../Templates/login.html'</script>";
    }
} else {
    echo "<script>alert('Please fill in all the fields')</script>";
    echo "<script>window.location.href='../Templates/companySignup.html'</script>";
}