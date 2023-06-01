<?php

include_once '../config/Database.php';

$database = new Database();

// get the patientID and prescriptionDescription from the form
$patientID = $_POST['patientID'];
$prescriptionDescription = $_POST['prescriptionDescription'];

// Check if the fields are empty
if (!empty($patientID) && !empty($prescriptionDescription)) {
    // Add the prescription to the database
    /*if($database->givePrescription($patientID, $prescriptionDescription)){
        echo "<script>alert('Prescription added successfully')</script>";
        echo "<script>window.location.href='../view/doctor.view.php'</script>";
    } else {
        echo "<script>alert('Prescription not added')</script>";
        echo "<script>window.location.href='../view/doctor.view.php'</script>";
    }
} else {
    echo "<script>alert('Please fill in all the fields')</script>";
    echo "<script>window.location.href='../view/doctor.view.php'</script>";
}*/
}

?>