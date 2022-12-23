<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "peringatan_banjir_dan_arg";
$conn = mysqli_connect($host, $user, $pass, $db_name);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
 