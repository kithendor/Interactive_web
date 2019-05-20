<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<?php
	
	include("conn.php");
	$fname = $lname = $city = $mail = "";

	if(!empty($_POST))
	{

		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$city = $_POST["city"];
		$mail = $_POST["mail"];

		$ins = "INSERT INTO users (fname_db, lname_db, city, mail) VALUES ('$fname','$lname','$city','$mail')";

		if($conn->query($ins))
		{
			echo "den mpike";
		}
		else
		{
			echo "ola kala";
		}
 	 }



	

?>

<div class="container">

<form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input name="fname" type="text" class="form-control" id="exampleInputEmail1"  placeholder="First Name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input name="lname"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">City</label>
    <select name="city"  class="form-control" id="exampleFormControlSelect1">
      <option value="Athens">Athens</option>
      <option value="New_york">New York</option>
      <option value="Patra">Patra</option>
      <option value="Paris">Paris</option>
    </select>
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Mail</label>
    <input name="mail"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Mail">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>