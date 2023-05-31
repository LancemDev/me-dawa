<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Processing login details</title>
</head>
<body>
<?php

include '../database/database.php';

// Create an instance of the database class
$database = new Database();

// Get entity from the form
$entity = $_POST['entity'];

// Depending on the entity, get the details from the form
if ($entity === "patient"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $entity = "patients";

    // Check if the fields are empty
    if(!empty($username) && !empty($password) && !empty($entity)){
        // Check if the user exists and if they do, redirect them to views/patient.view.php
        if($database->userExists($username, $password, $entity)){
            header("Location: ../views/patient.view.php");
        } else {
            echo "User does not exist";
        }
    } else {
        echo "Please fill in all the fields";
    }
}

if ($entity === "doctor"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $entity = "doctors";

    // Check if the fields are empty
    if(!empty($username) && !empty($password) && !empty($entity)){
        echo "Check one";
        // Check if the user exists and if they do, redirect them to views/doctor.view.php
        if($database->userExists($username, $password, $entity)){
            header("Location: ../views/doctor.view.php");
        } else {
            echo "User does not exist";
        }
    } else {
        echo "Please fill in all the fields";
    }
}

if ($entity === "supervisor"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $entity = "supervisors";

    // Check if the fields are empty
    if(!empty($username) && !empty($password) && !empty($entity)){
        // Check if the user exists and if they do, redirect them to views/admin.view.php
        if($database->userExists($username, $password, $entity)){
            header("Location: ../views/supervisor.view.php");
        } else {
            echo "User does not exist";
        }
    } else {
        echo "Please fill in all the fields";
    }
}

?>

</body>
</html>
