<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "github";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  echo "connection ok";
}
else{
  echo "connection Failed";
}
?>
