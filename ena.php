
<?php
// Array with names
$a[] = "Anna";
$a[] = "Agatha";
$a[] = "Alice";
$a[] = "Boris";
$a[] = "Borg";
$a[] = "Cen";
$a[] = "Hugo";
$a[] = "Hege";
$a[] = "Halk";


$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}


echo $hint === "" ? "Tipota" : $hint;
?> 