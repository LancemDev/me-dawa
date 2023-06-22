<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Processing login details</title>
    <link rel="icon" href="../images/logo.jpg">
</head>
<body>
<?php

session_start(); // Start the session

include '../database/database.php';

$entity = $_POST['entity']; // Get the entity from the form

$database = new Database();


    // Get entity from the form
    // $entity = $_POST['entity']; // It should be passed as an argument instead

    // Depending on the entity, get the details from the form
if ($entity === "Patient") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the fields are empty
    if (!empty($username) && !empty($password) && !empty($entity)) {
        // Check if the user exists and if they do, redirect them to views/patient.view.php
        if ($database->patientExists($username, $password)) {
            echo "<script>alert('Login Successful')</script>";

            $_SESSION['entity'] = $entity;
            $_SESSION['username'] = $username;
            include '../view/patient.php';
            // get id of patient and store in session and display it as a js alert
            header("Location: ../view/patient.php");
        } else {
            echo "<script>alert('User does not exist')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    } else {
        echo "<script>alert('Please fill in all the fields')</script>";
        echo "<script>window.location.href='../view/login.php'</script>";
    }
}

if ($entity === "Doctor") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the fields are empty
    if (!empty($username) && !empty($password) && !empty($entity)) {
        // Check if the user exists and if they do, redirect them to views/doctor.view.php
        if ($database->doctorExists($username, $password)) {
            // get id of doctor and store in session and display it as a js alert
            echo "<script>alert('Login Successful')</script>";

            $_SESSION['entity'] = $entity;
            $_SESSION['username'] = $username;
            header("Location: ../view/doctor.php");
        } else {
            echo "<script>alert('User does not exist')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    } else {
        echo "<script>alert('Please fill in all the fields')</script>";
        echo "<script>window.location.href='../view/login.php'</script>";
    }
}

if ($entity === "Supervisor") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the fields are empty
    if (!empty($username) && !empty($password) && !empty($entity)) {
        // Check if the user exists and if they do, redirect them to views/admin.view.php
        if ($database->supervisorExists($username, $password)) {
            // get id of supervisor and store in session and display it as a js alert
            echo "<script>alert('Login Successful')</script>";

            $_SESSION['entity'] = $entity;
            $_SESSION['username'] = $username;
            header("Location: ../view/supervisor.php");
        } else {
            echo "<script>alert('User does not exist')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    } else {
        echo "<script>alert('Please fill in all the fields')</script>";
        echo "<script>window.location.href='../view/login.php'</script>";
    }
}

if ($entity === "Pharmaceutical") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the fields are empty
    if (!empty($username) && !empty($password) && !empty($entity)) {
        // Check if the user exists and if they do, redirect them to views/admin.view.php
        if ($database->CompanyExists($username, $password)) {
            // get id of pharmaceutical company and store in session and display it as a js alert
            echo "<script>alert('Login Successful')</script>";

            $_SESSION['entity'] = $entity;
            $_SESSION['username'] = $username;
            echo "<script>alert('Login Successful. Welcome');</script>";
            header("Location: ../view/company.php");
        } else {
            echo "<script>alert('User does not exist')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    } else {
        echo "<script>alert('Please fill in all the fields')</script>";
        echo "<script>window.location.href='../view/login.php'</script>";
    }
}

if ($entity === "Pharmacy"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the fields are empty
    if (!empty($username) && !empty($password) && !empty($entity)) {
        // Check if the user exists and if they do, redirect them to views/admin.view.php
        if ($database->pharmacyExists($username, $password)) {
            // get id of pharmacy and store in session and display it as a js alert
            echo "<script>alert('Login Successful')</script>";

            $_SESSION['entity'] = $entity;
            $_SESSION['username'] = $username;
            echo "<script>alert('Login Successful. Welcome');</script>";
            header("Location: ../view/pharmacy.php");
        } else {
            echo "<script>alert('User does not exist')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    } else {
        echo "<script>alert('Please fill in all the fields')</script>";
        echo "<script>window.location.href='../view/login.php'</script>";
    }
}


?>


</body>
</html>