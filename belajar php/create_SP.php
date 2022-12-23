<?php
include('config/connection.php');
$query1 = "INSERT INTO situ_parigi VALUES (NULL,'23-12-2022','01:44:21',155,2)";
$create = mysqli_query($conn, $query1);
if ($create) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan" . mysqli_error($conn);
}