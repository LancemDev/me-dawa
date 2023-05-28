<?php

include_once '../database/database.php';

// Instantiate DB & connect
$db = new Database();
echo "x : ". $db->patientsTableExists();