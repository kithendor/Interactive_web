
<?php
// Array with names
$host = "localhost";
$username = "root";
$password = "";
$database = "pasxalis";

$conn = new mysqli($host, $username, $password, $database);



$val = $_GET["val"];



//echo "asd";

if ($val !== "") {
    $sel = "SELECT * FROM users WHERE fname_db='$val'";

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



?> 