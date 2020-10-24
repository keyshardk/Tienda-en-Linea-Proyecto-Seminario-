<?php
//DB details
$dbHost = 'mysql.hostinger.es';
$dbUsername = 'u604611936_keyshardm';
$dbPassword = 'Juegos15';
$dbName = 'u604611936_mydb';



//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}