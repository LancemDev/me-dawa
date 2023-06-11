<?php

include_once '../config/Database.php';

$database = new $database();

$prescriptionID = $_POST['prescriptionID'];

if (!empty($prescriptionID)){
    echo "<script>alert ('Enter all the fields');</script>";
    // Then redirect to the same form
    echo "<script>window.location.href='../Templates/pharmacy.html'</script>";
} else{
    // Remove the med from the drugs table since the user will be given it
    if($database->dispense($prescriptionID)){
        echo "<script>alert('Drug dispensed Successfully')</script>";

        // Then redirect back to the form to dispense another drug
        echo "<script>window.location.href='../Templates/pharmacy.html'</script>";
    }

}


?>