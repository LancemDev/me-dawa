<?php

include_once '../database/Database.php';

$database = new Database();

// Get details from Templates\pharmacySignup.php
$pharmacyName = $_POST['pharmacyName'];
$pharmacyEmail = $_POST['pharmacyEmail'];
$pharmacyPassword = $_POST['pharmacyPassword'];
$pharmacyPhoneNumber = $_POST['pharmacyPhoneNumber'];
$pharmacyAddress = $_POST['pharmacyAddress'];

// Check if the fields are empty
if (!empty($pharmacyName) && !empty($pharmacyEmail) && !empty($pharmacyPassword) && !empty($pharmacyPhoneNumber) && !empty($pharmacyAddress)) {
    // Check if the user exists and if they do, redirect them to views/patient.view.php
    if ($database->pharmacyExists($pharmacyEmail, $pharmacyPassword)) {
        echo "<script>alert('Pharmacy already exists')</script>";
        echo "<script>window.location.href='../Templates/pharmacySignup.html'</script>";
    } else {
        $database->pharmacySignup($pharmacyName, $pharmacyEmail, $pharmacyPassword, $pharmacyPhoneNumber, $pharmacyAddress);
        echo "<script>alert('Pharmacy added successfully')</script>";
        echo "<script>window.location.href='../Templates/pharmacy.html'</script>";
    }
} else {
    echo "<script>alert('Please fill in all the fields')</script>";
    echo "<script>window.location.href='../Templates/pharmacySignup.html'</script>";
}