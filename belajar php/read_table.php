<table>
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Tinggi Air</th>
            <th>Curah Hujan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('config/connection.php');
        $query = "SELECT * FROM situ_parigi";
        $read = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($read)) {
        ?>
        <tr>
            <td><?php echo $row['tanggal'] ?></td>
            <td><?php echo $row['waktu'] ?></td>
            <td><?php echo $row['tinggi_air'] ?></td>
            <td><?php echo $row['curah_hujan'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>