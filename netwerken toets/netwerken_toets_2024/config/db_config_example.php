<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '"';
$dbname = 'bijbaan';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>