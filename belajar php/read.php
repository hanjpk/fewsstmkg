<?php
include('config/connection.php');
$query = "SELECT * FROM situ_parigi";
$read = mysqli_query($conn, $query);
if ($read) {
 while ($row = mysqli_fetch_assoc($read)) {
 echo $row['id'] . " " . $row['tanggal'] . " " . $row['waktu'] . " " . 
$row['tinggi_air'] . " " . $row['curah_hujan'] . " " . "<br>";
}
} else {
 echo "Data gagal dibaca" . mysqli_error($conn);
}