<?php


include('config/connection.php');
$query = "SELECT * FROM situ_parigi ORDER BY id DESC LIMIT 100";
$waktu = mysqli_query($conn, $query);
$tinggi_air = mysqli_query($conn, $query);
$curah_hujan = mysqli_query($conn, $query);

?>

<?php include('layout/header.php') ?>
<?php include('layout/navbar.php') ?>

<div class="container">

    <h1>Dashboard</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <p class="card-title">Situ Parigi</p>
                    <hr>
                    <p>Tinggi Air</p>
                    <h1 class="card-text">155 cm</h1>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <p class="card-title">Situ Parigi</p>
                    <hr>
                    <p>Curah Hujan</p>
                    <h1 class="card-text">15 mm</h1>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <p class="card-title">Jurang Mangu Barat</p>
                    <hr>
                    <p>Tinggi Air</p>
                    <h1 class="card-text">51 cm</h1>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <p class="card-title">Pondok Aren</p>
                    <hr>
                    <p>Curah Hujan</p>
                    <h1 class="card-text">5 mm</h1>
                </div>
            </div>
        </div>

        <!-- <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <p class="card-title">Freq</p>
                    <h1 class="card-text">50 Hz</h1>
                </div>
            </div>
        </div>

         <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <p class="card-title">Estimasi Harga</p>
                    <h1 class="card-text">3500 Rupiah</h1>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <p class="card-title">Estimasi Harga WBP</p>
                    <h1 class="card-text">5500 Rupiah</h1>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <p class="card-title">Estimasi Harga LWBP</p>
                    <h1 class="card-text">6500 Rupiah</h1>
                </div>
            </div>
        </div> -->
        
    </div>

</div>

<?php include('layout/footer.php') ?>