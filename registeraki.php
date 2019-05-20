<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
<?php

$fname = $lname = $mail = $pass = $gender = "";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mail = $_POST["mail"];
$pass = $_POST["pass"];
$gender = $_POST["gender"];

echo "$fname $lname $mail $gender $pass"

?>
<div class="container">
<form  method="POST" action="register.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
  </div>


   <div class="form-group">
    <label for="fnameid">First Name</label>
    <input type="text" class="form-control" id="fnameid" placeholder="Enter first name" name="fname" required>
  </div>

  <div class="form-group">
    <label for="lnameid">Last Name</label>
    <input type="text" class="form-control" id="lnameid" placeholder="Enter last name" name="lname" required>
  </div>

  <label for="lnameid">Gender</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
  <label class="form-check-label" for="male">
    Male
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="female" value="female">
  <label class="form-check-label" for="female">
    Female
  </label>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>






