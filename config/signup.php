<!DOCTYPE html>
<html>
<head>
    <title>Processing login details</title>
</head>
<body>
    <div>
        <h1>
            Use the details to login now.
        </h1>
    </div>
<?php

// Include the database connection file
include_once '../database/database.php';

// Create an instance of the database class
$database = new Database();

// Get the details from the form in signup.view.php
// Get the type of entity selected from the options
$entity = $_POST['entity'];

if($entity === "Patient"){
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
        $database->doctorSignup($patientFirstName, $patientLastName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB);

        // Get the generated patient id and echo it
        $patientId = $database->getPatientId($patientEmail);
        echo "Your patient id is: " . $patientId." Please use it to login.";
    } else {
        echo "Please fill in all the fields";
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

        // Get the generated doctor id and echo it
        $doctorId = $database->getDoctorId($doctorEmail);
        echo "Your doctor id is: " . $doctorId." Please use it to login.";
    } else {
        echo "Please fill in all the fields";
    }

} else if($entity === "Supervisor"){
    $supervisorFirstName = $_POST['supervisorFirstName'];
    $supervisorSecondName = $_POST['supervisorSecondName'];
    $supervisorEmail = $_POST['supervisorEmail'];
    $supervisorPassword = $_POST['supervisorPassword'];
    $supervisorPhoneNumber = $_POST['supervisorPhoneNumber'];
    $supervisorAddress = $_POST['supervisorAddress'];
    $supervisorGender = $_POST['supervisorGender'];
    $supervisorDOB = $_POST['supervisorDOB'];

    // Add these details to the database if all fields are entered
    if(!empty($supervisorFirstName) && !empty($supervisorSecondName) && !empty($supervisorEmail) && !empty($supervisorPassword) && !empty($supervisorPhoneNumber) && !empty($supervisorAddress) && !empty($supervisorGender) && !empty($supervisorDOB)){
        // Add the details to the database
        $database->supervisorSignup($supervisorFirstName, $supervisorSecondName, $supervisorEmail, $supervisorPassword, $supervisorPhoneNumber, $supervisorAddress, $supervisorGender, $supervisorDOB);

        // Get the generated supervisor id and echo it
        $supervisorId = $database->getSupervisorId($supervisorEmail);
        echo "Your supervisor id is: " . $supervisorId." Please use it to login.";
    } else {
        echo "Please fill in all the fields";
    }
}

// Redirect to view/login.view.php after 7 seconds
//header('Refresh: 7; URL=../view/login.view.php');
?>
</body>
</html>