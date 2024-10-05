<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "fire_safety";

$conn = mysqli_connect($server,$username,$password,$db);
if($conn){
    echo "";
}
else{
    echo "mysqli_error";
}

?>