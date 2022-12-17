<?php
session_start();
$dbHost = 'localhost' ;
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'trefle';


$trefle = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

?>