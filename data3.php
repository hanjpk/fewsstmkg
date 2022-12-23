<?php include('layout/header.php') ?>
<?php include('layout/navbar.php') ?>

<div class="container">

    <h1>Data Table ARG Pondok Pucung</h1>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Curah Hujan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('config/connection.php');
                    $query = "SELECT * FROM pondok_pucung";
                    $read = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($read)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['tanggal'] ?></td>
                            <td><?php echo $row['waktu'] ?></td>
                            <td><?php echo $row['curah_hujan']; ?></td>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>



</div>

<?php include('layout/footer.php') ?>