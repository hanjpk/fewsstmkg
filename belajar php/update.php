<?php
include('config/connection.php');
$query1 = "UPDATE situ_parigi SET tanggal='19-08-2022', waktu='12:00:00', 
tinggi_air=160, curah_hujan=8 WHERE id=2";
$update = mysqli_query($conn, $query1);
if ($update) {
 echo "Data berhasil diupdate";
} else {
 echo "Data gagal diupdate" . mysqli_error($conn);
}
