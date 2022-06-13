<?php
// Masukkan Host, username, password, database anda di bawah.
$con = mysqli_connect("localhost","root","","signup1");
// Cek connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>