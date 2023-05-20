<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Processing login details</title>
</head>
<body>
<?php
// Get username and password details from the form in view/login.php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $entity = $_POST['entity'];
}

// Check if the username and password are not empty
if(!empty($username) && !empty($password)){
    // Call the login function from database/database.php
    require '../database/database.php';
    // Create an instance of the database class
    $db = new Database();
    $login = $db->userExists($username, $password, $entity);
    if($login){
        // If the login is successful, redirect to the page of that specific entity
        if($entity == 'Doctor'){
            header('Location: ../view/doctor.view.php');
        } else if($entity == 'Patient'){
            header('Location: ../view/patient.view.php');
        } else if($entity == 'Supervisor'){
            header('Location: ../view/supervisor.view.php');
        }
    }
} else {
    // If the username and password are empty, redirect to view/login.view.php
    header('Location: ../view/login.view.php');
}

?>

</body>
</html>
