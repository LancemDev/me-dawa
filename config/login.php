<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Processing login details</title>
</head>
<body>
<?php

include '../database/database.php';

$loginController = new LoginController();
$entity = $_POST['entity']; // Get the entity from the form
$loginController->login($entity);


class LoginController {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function login($entity) {
        // Get entity from the form
        // $entity = $_POST['entity']; // It should be passed as an argument instead

        // Depending on the entity, get the details from the form
        if ($entity === "Patient") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Check if the fields are empty
            if (!empty($username) && !empty($password) && !empty($entity)) {
                // Check if the user exists and if they do, redirect them to views/patient.view.php
                if ($this->database->patientExists($username, $password)) {
                    echo "<script>alert('Login Successful')</script>";
                    //$token = generateUniqueToken();
                    //saveTokenToDatabase($userId, $token);
                    //setRememberMeCookie($token);
                    header("Location: ../view/patient.view.php");
                } else {
                    echo "<script>alert('User does not exist')</script>";
                    echo "<script>window.location.href='../view/login.view.php'</script>";
                }
            } else {
                echo "<script>alert('Please fill in all the fields')</script>";
                echo "<script>window.location.href='../view/login.view.php'</script>";
            }
        }

        if ($entity === "Doctor") {
            global $username;
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Check if the fields are empty
            if (!empty($username) && !empty($password) && !empty($entity)) {
                // Check if the user exists and if they do, redirect them to views/doctor.view.php
                if ($this->database->doctorExists($username, $password)) {
                    echo "<script>alert('Login Successful')</script>";
                    header("Location: ../view/doctor.view.php");
                } else {
                    echo "<script>alert('User does not exist')</script>";
                    echo "<script>window.location.href='../view/login.view.php'</script>";
                }
            } else {
                echo "<script>alert('Please fill in all the fields')</script>";
                echo "<script>window.location.href='../view/login.view.php'</script>";
            }
        }

        if ($entity === "Supervisor") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Check if the fields are empty
            if (!empty($username) && !empty($password) && !empty($entity)) {
                // Check if the user exists and if they do, redirect them to views/admin.view.php
                if ($this->database->supervisorExists($username, $password)) {
                    echo "<script>alert('Login Successful')</script>";
                    header("Location: ../view/supervisor.view.php");
                } else {
                    echo "<script>alert('User does not exist')</script>";
                    echo "<script>window.location.href='../view/login.view.php'</script>";
                }
            } else {
                echo "<script>alert('Please fill in all the fields')</script>";
                echo "<script>window.location.href='../view/login.view.php'</script>";
            }
        }
    }
    /*public function getDoctorID() {
        if ($entity === "Doctor") {
            $doctorID = $this->database->getDoctorID($username);
            return $doctorID;
        }
    }*/
}


?>


</body>
</html>
