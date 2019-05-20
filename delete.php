<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<?php

if(!empty($_POST))
{
	 include("conn.php");

	 $lname = $_POST["lname"];

	 $del = "DELETE FROM users WHERE lname_db='$lname'";

	 if($conn->query($del))
	 {
	 	echo "vgike";
	 }
	 else
	 {
	 	echo "den vgike";
	 }
}

?>

<div class="container">

<form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input name="lname" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Last Name">
  </div>

  <button type="submit" name="btn"  class="btn btn-primary">Submit</button>
</form>

</div>


</body>

</html>