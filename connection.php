<?php
$conn = mysqli_connect("localhost","root","","election-thesis");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
