<?php
session_start();
include '../database/database.php';

$database = new Database();
// Code to handle user deletion based on the provided user ID
if(isset($_POST['user_id'])){
  $user_id = $_POST['user_id'];
  $entity = $_SESSION['entity'];

  if ($database->deleteEntity($entity, $user_id)){
    echo "<script>alert('User deleted successfully')</script>";
    echo "<script>window.location.href='../view/dashboard.php?entity=$entity'</script>";
  }

}
?>
