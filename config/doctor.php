<?php

include_once '../database/database.php';

$database = new Database();

// Get the patientID and prescriptionDescription from the form
$patientID = $_POST['patientID'];
$prescriptionDescription = $_POST['prescriptionDescription'];
$prescriptionDuration = $_POST['prescriptionDuration'];

// Check if the fields are empty
if (!empty($patientID) && !empty($prescriptionDescription)) {
    // Start the session
    session_start();

    // Check if the doctor is logged in
    if (isset($_SESSION['username'])) {
        $doctorID = $_SESSION['username'];
        $prescriptionDate = date("Y-m-d");

        // Add the prescription to the database
        if ($database->addPrescription($patientID, $doctorID, $prescriptionDate, $prescriptionDuration, $prescriptionDescription)) {
            echo "<script>alert('Prescription added successfully. The patient can now view the prescription.')</script>";
            echo "<script>window.location.href='../Templates/doctor.html'</script>";
        } else {
            echo "<script>alert('Prescription not added')</script>";
            echo "<script>window.location.href='../Templates/doctor.html'</script>";
        }
    } else {
        echo "<script>alert('Doctor not logged in')</script>";
        echo "<script>window.location.href='../Templates/doctor.html'</script>";
    }
} else {
    echo "<script>alert('Please fill in all the fields')</script>";
    echo "<script>window.location.href='../Templates/doctor.html'</script>";
}

?>
