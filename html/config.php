<?php
session_start();
$dbHost = 'localhost' ;
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mydb';


$dbc = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

?>