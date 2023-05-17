<?php

//This is primarily for testing purposes. This file will be deleted once the project is complete.

try{
    $conn = new PDO("mysql:host=me-dawa-server.mysql.database.azure.com;dbname=laravel", "iafgzihhqu@me-dawa-server", "mysql123lance");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>