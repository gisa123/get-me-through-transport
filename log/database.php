<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "gmmt_project";
$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error) {
	die("connection failed!".connect_error);
 } 
?>