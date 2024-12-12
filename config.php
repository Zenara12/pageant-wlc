<?php
// Create connection
$con=mysqli_connect("localhost","root","","mrwlc2017");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 