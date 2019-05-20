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
    <label for="exampleInputEmail1">Last Name</label>
    <input name="lname" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Last Name">
  </div>



  <button type="submit" name="btn"  class="btn btn-primary">Submit</button>
  <button type="submit" name="btn" value="tsiou" class="btn btn-primary">Submit2</button>
</form>


<?php
  
  include("conn.php");

if(!empty($_POST))
  {

  if($_POST["btn"]=="tsiou")
  {

    $sel = "SELECT * FROM users";

     $resutl = $conn->query($sel);

     if($resutl->num_rows>0)
     {
        while($row = $resutl->fetch_assoc())
        {
            echo "Fname: ".$row['fname_db']." Lname: ".$row['lname_db']." City: ".$row['city']."<br>";
        }
     }
     else
     {
       echo "den echw tipota";
     }
   }
   else
   {
     $lname = $_POST["lname"];

    $sel = "SELECT * FROM users WHERE lname_db='$lname'";

    $resutl = $conn->query($sel);

     if($resutl->num_rows>0)
     {
        while($row = $resutl->fetch_assoc())
        {
            echo "Fname: ".$row['fname_db']." Lname: ".$row['lname_db']." City: ".$row['city']."<br>";
        }
     }
     else
     {
       echo "den echw tipota";
     }


   }
 }



  

?>


</div>



</body>
</html>