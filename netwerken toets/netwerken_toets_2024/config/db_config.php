<?php

$dbhost = 'localhost:3306';
$dbuser = 'net24mreijmer_milan';
$dbpass = 'JanDeMan890';
$dbname = 'net24mreijmer_netwerkentoets';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>