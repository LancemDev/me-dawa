<?php

require './database/database.php';

// Create an instance of the database class
$database = new Database();

// Run the triggers
$database->createTriggers();

?>