<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Eimai to krifouli</h1>

<?php
session_start();
if($_SESSION["username"]){

	echo $_SESSION["username"]." kalimera sas";

	echo "<br> krufo perisoxmeno";
}

?>
<a href="logout.php">Log out</a>

</body>
</html>