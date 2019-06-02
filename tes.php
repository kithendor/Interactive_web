
<?php
// Array with names
$host = "localhost";
$username = "root";
$password = "";
$database = "pasxalis";

$conn = new mysqli($host, $username, $password, $database);



$val = $_GET["val"];

$a[] = array();;

//echo "asd";

if ($val !== "") {
    $sel = "SELECT * FROM users WHERE fname_db='$val'";

     $resutl = $conn->query($sel);

     if($resutl->num_rows>0)
     {
        $i = 0;
        while($row = $resutl->fetch_assoc())
        {
            $a[$i] = $row['fname_db'];
            $i++;
            
        }
        //echo $a[1];
        echo json_encode($a);

     }
     else
     {
       echo "den echw tipota";
     }
}



?> 