

<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "pasxalis";

$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error)
{
	die("geia xara".$conn->connect_error);
}



?>