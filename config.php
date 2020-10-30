<?php
//Object Oriented
$serverName = 'localhost';
$username = 'root';
$password = 'root';
$dbName = 'sept_php';
$conn = new mysqli($serverName, $username, $password, $dbName); //returns sql obj

if($conn->connect_error) {
	die('Failed:' . $conn->connect_error);
}