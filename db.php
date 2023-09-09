<?php
// ini merupakan file koneksi ke database
// this is comment ****
$con = mysqli_connect("localhost", "root", "", "db_gerewek");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
