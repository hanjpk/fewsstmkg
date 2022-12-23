<?php


include('config/connection.php');
$query = "SELECT * FROM situ_parigi ORDER BY id DESC LIMIT 100";
$waktu = mysqli_query($conn, $query);
$tinggi_air = mysqli_query($conn, $query);
$curah_hujan = mysqli_query($conn, $query);

$query2 = "SELECT * FROM jurang_mangu_barat ORDER BY id DESC LIMIT 100";
$waktu2 = mysqli_query($conn, $query2);
$tinggi_air2 = mysqli_query($conn, $query2);


$query3 = "SELECT * FROM pondok_pucung ORDER BY id DESC LIMIT 100";
$waktu3 = mysqli_query($conn, $query3);
$curah_hujan3 = mysqli_query($conn, $query3);

?>

<?php include('layout/header.php') ?>
<?php include('layout/navbar.php') ?>

<div class="container">

    <h1 class="mb-3">Grafik</h1>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="row row-cols-1 row-cols-md-2 g-4">

        <!-- //GRAFIK TINGGI AIR  SP-->
        <div class="col">
            <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
                <div class="card-body">
                    <h5 class="card-title">Situ Parigi</h5><hr>
                    <h5 class="card-title">Tinggi Air</h5>
                    <div>
                        <canvas id="tinggi_airChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- //GRAFIK CURAH HUJAN  SP-->
        <div class="col">
            <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
                <div class="card-body">
                    <h5 class="card-title">Situ Parigi</h5><hr>
                    <h5 class="card-title">Curah Hujan</h5>
                    <div>
                        <canvas id="curah_hujanChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- //GRAFIK TINGGI AIR  JMB-->
        <div class="col">
            <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
                <div class="card-body">
                    <h5 class="card-title">Jurang Mangu Barat</h5><hr>
                    <h5 class="card-title">Tinggi Air</h5>
                    <div>
                        <canvas id="tinggi_airChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- //GRAFIK CURAH HUJAN  PP-->
        <div class="col">
            <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
                <div class="card-body">
                    <h5 class="card-title">Pondok Pucung</h5><hr>
                    <h5 class="card-title">Curah Hujan</h5>
                    <div>
                        <canvas id="curah_hujanChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        const labels = [
            <?php
            while ($row = mysqli_fetch_array($waktu)) {
                echo "'" . $row['waktu'] . "', ";
            } ?>
        ];

        const labels2 = [
            <?php
            while ($row = mysqli_fetch_array($waktu2)) {
                echo "'" . $row['waktu'] . "', ";
            } ?>
        ];
        
        const labels3 = [
            <?php
            while ($row = mysqli_fetch_array($waktu3)) {
                echo "'" . $row['waktu'] . "', ";
            } ?>
        ];        

        // GRAFIK TINGGI AIR SP------------------------------
        const dataTinggiAir = {
            labels: labels,
            datasets: [{
                label: 'Tinggi Air (cm)',
                backgroundColor: '#673783',
                borderColor: '#673783',
                data: [
                    <?php
                    while ($row = mysqli_fetch_array($tinggi_air)) {
                        echo $row['tinggi_air'] . ", ";
                    } ?>
                ],
            }]
        };
        const configTinggiAir = {
            type: 'line',
            data: dataTinggiAir,
            options: {
                animation: {
                    duration: 0
                },
            }
        };
        const tinggi_airChart = new Chart(
            document.getElementById('tinggi_airChart'),
            configTinggiAir
        );

        // GRAFIK CURAH HUJAN SP------------------------------
        const dataCurahHujan = {
            labels: labels,
            datasets: [{
                label: 'Curah Hujan (mm)',
                backgroundColor: '#8B2D73',
                borderColor: '#8B2D73',
                data: [
                    <?php
                    while ($row = mysqli_fetch_array($curah_hujan)) {
                        echo $row['curah_hujan'] . ", ";
                    } ?>
                ],
            }]
        };
        const configCurahHujan = {
            type: 'line',
            data: dataCurahHujan,
            options: {
                animation: {
                    duration: 0
                },
            }
        };
        const curah_hujanChart = new Chart(
            document.getElementById('curah_hujanChart'),
            configCurahHujan
        );

        // GRAFIK TINGGI AIR JMB------------------------------
        const dataTinggiAir2 = {
            labels: labels2,
            datasets: [{
                label: 'Tinggi Air (cm)',
                backgroundColor: '#673783',
                borderColor: '#673783',
                data: [
                    <?php
                    while ($row = mysqli_fetch_array($tinggi_air2)) {
                        echo $row['tinggi_air'] . ", ";
                    } ?>
                ],
            }]
        };
        const configTinggiAir2 = {
            type: 'line',
            data: dataTinggiAir2,
            options: {
                animation: {
                    duration: 0
                },
            }
        };
        const tinggi_airChart2 = new Chart(
            document.getElementById('tinggi_airChart2'),
            configTinggiAir2
        );

        // GRAFIK CURAH HUJAN PP------------------------------
        const dataCurahHujan3 = {
            labels: labels3,
            datasets: [{
                label: 'Curah Hujan (mm)',
                backgroundColor: '#8B2D73',
                borderColor: '#8B2D73',
                data: [
                    <?php
                    while ($row = mysqli_fetch_array($curah_hujan3)) {
                        echo $row['curah_hujan'] . ", ";
                    } ?>
                ],
            }]
        };
        const configCurahHujan3 = {
            type: 'line',
            data: dataCurahHujan3,
            options: {
                animation: {
                    duration: 0
                },
            }
        };
        const curah_hujanChart3 = new Chart(
            document.getElementById('curah_hujanChart3'),
            configCurahHujan3
        );


    </script>
</div>
<?php include('layout/footer.php') ?>