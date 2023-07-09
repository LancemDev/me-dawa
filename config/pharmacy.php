<?php

include_once '../database/database.php';

// Create an instance of the Database class
$database = new Database();


// Dispense the drug based on the drug id posted here
if(isset($_POST['dispense'])){
    $drugID = $_POST['drugID'];
    if($database->dispense($drugID)){
        echo "<script>alert('Drug dispensed Successfully')</script>";

        // Then redirect back to the form to dispense another drug
        echo "<script>window.location.href='../view/pharmacy.php'</script>";
    } else{
        echo "<script>alert('Problem somewhere')</script>";
    }
}


?>