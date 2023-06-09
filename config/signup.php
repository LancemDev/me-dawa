<?php

// Include the database connection file
include_once '../database/database.php';

// Create an instance of the database class
$database = new Database();

// Get the details from the form in signup.view.php
// Get the type of entity selected from the options
$entity = $_POST['entity'];

echo "<script>alert('We are inside the signup.php file')</script>";

if($entity === "Patient"){
    echo "<script>alert('We are inside patient')</script>";
    // Get the details from the form
    $patientFirstName = $_POST['firstName'];
    $patientLastName = $_POST['lastName'];
    $patientEmail = $_POST['emailaddress'];
    $patientPassword = $_POST['password'];
    $patientPhoneNumber = $_POST['phoneNumber'];
    $patientAddress = $_POST['address'];
    $patientGender = $_POST['gender'];
    $patientDOB = $_POST['dob'];

    // Add these details to the database if all fields are entered
    if(!empty($patientFirstName) && !empty($patientLastName) && !empty($patientEmail) && !empty($patientPassword) && !empty($patientPhoneNumber) && !empty($patientAddress) && !empty($patientGender) && !empty($patientDOB)){
        // Add the details to the database
        $database->patientSignup($patientFirstName, $patientLastName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB);
        echo "<script>alert('Checkpoint 1')</script>";
        // Get the generated patient id and echo it
        $patientId = $database->getPatientId($patientEmail);
        
        // Display the patient ID using JavaScript alert
        echo "<script>alert('Your patient id is: " . $patientId . ". Please use it to login.');</script>";

        // Redirect to the login page after the alert is displayed
        echo "<script>window.location.href = '../Templates/login.html';</script>";
        exit();
    } else {
        echo "<script>alert('Please fill in all the fields')</script>";
        header("Location: ../Templates/signup.html");
    }
} else if($entity === "Doctor"){
    $doctorFirstName = $_POST['firstName'];
    $doctorSecondName = $_POST['lastName'];
    $doctorEmail = $_POST['emailaddress'];
    $doctorPassword = $_POST['password'];
    $doctorPhoneNumber = $_POST['phoneNumber'];
    $doctorAddress = $_POST['address'];
    $doctorGender = $_POST['gender'];
    $doctorDOB = $_POST['dob'];
    // Add these details to the database if all fields are entered
    if(!empty($doctorFirstName) && !empty($doctorSecondName) && !empty($doctorEmail) && !empty($doctorPassword) && !empty($doctorPhoneNumber) && !empty($doctorAddress) && !empty($doctorGender) && !empty($doctorDOB)){
        // Add the details to the database
        $database->doctorSignup($doctorFirstName, $doctorSecondName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB);
        $doctorID = $database->getDoctorId($doctorEmail);

        // Display the doctor ID using JavaScript alert
        echo "<script>alert('Your doctor id is: " . $doctorID . ". Please use it to login.');</script>";


        // Redirect to the login page after the alert is displayed
        echo "<script>window.location.href = '../Templates/login.html';</script>";
        exit();
    } else {
        echo "PLease fill in all the fields";
        header("Location: ../Templates/signup.html");
    }

} else if($entity === "Supervisor"){
    $supervisorFirstName = $_POST['firstName'];
    $supervisorSecondName = $_POST['lastName'];
    $supervisorEmail = $_POST['emailaddress'];
    $supervisorPassword = $_POST['password'];
    $supervisorPhoneNumber = $_POST['phoneNumber'];
    $supervisorAddress = $_POST['address'];
    $supervisorGender = $_POST['gender'];
    $supervisorDOB = $_POST['dob'];

    // Add these details to the database if all fields are entered
    if(!empty($supervisorFirstName) && !empty($supervisorSecondName) && !empty($supervisorEmail) && !empty($supervisorPassword) && !empty($supervisorPhoneNumber) && !empty($supervisorAddress) && !empty($supervisorGender) && !empty($supervisorDOB)){
        // Add the details to the database
        $database->supervisorSignup($supervisorFirstName, $supervisorSecondName, $supervisorEmail, $supervisorPassword, $supervisorPhoneNumber, $supervisorAddress, $supervisorGender, $supervisorDOB);
        // Get the generated supervisor id and echo it
        $supervisorId = $database->getSupervisorId($supervisorEmail);

        // Display the supervisor ID using JavaScript alert
        echo "<script>alert('Your supervisor id is: " . $supervisorId . ". Please use it to login.');</script>";

        // Redirect to the login page after the alert is displayed
        echo "<script>window.location.href = '../Templates/login.html';</script>";
        exit();
    } else {
        echo "Please fill in all the fields";
        header("Location: ../Templates/signup.html");
    }
}