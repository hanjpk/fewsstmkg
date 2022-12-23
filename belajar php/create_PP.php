<?php
include('connect.php');
$query1 = "INSERT INTO pondok_pucung VALUES (NULL,'23-12-2022','01:44:21',5)";
$create = mysqli_query($conn, $query1);
if ($create) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan" . mysqli_error($conn);
}