<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>



<div class="container">

<form method="POST" action="">

<div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input name="fname" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Last Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input name="lname" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Last Name">
  </div>



  <button type="submit" name="btn"  class="btn btn-primary">Submit</button>
</form>


<?php
  
  include("conn.php");

if(!empty($_POST))
  {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    $sel = "SELECT * FROM users WHERE fname_db='$fname' && lname_db='$lname'";

     $resutl = $conn->query($sel);

     if($resutl->num_rows>0)
     {
        $row = $resutl->fetch_assoc();
        
            echo "Fname: ".$row['fname_db']." Lname: ".$row['lname_db']." City: ".$row['city']."<br>";

            session_start();
            $_SESSION["username"] = $row['fname_db'];

            header("location:secret.php");
        
     }
     else
     {
       echo "den echw tipota";
     }
   }
   


  

?>


</div>



</body>
</html>