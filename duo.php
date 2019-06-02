
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "pasxalis";

$conn = new mysqli($host, $username, $password, $database);



$val = $_GET["val"];
$val2 = $_GET["val2"];

$ins = "INSERT INTO users (fname_db, lname_db) VALUES ('$val','$val2')";

if($conn->query($ins))
{
	echo "ok";
}
else
{
	echo "no";
}




?> 