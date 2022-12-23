<?php


include('config/connection.php');
$query = "SELECT * FROM pondok_pucung ORDER BY id DESC LIMIT 100";
$waktu = mysqli_query($conn, $query);
$tinggi_air = mysqli_query($conn, $query);
$curah_hujan = mysqli_query($conn, $query);

?>

<?php include('layout/header.php') ?>
<?php include('layout/navbar.php') ?>

<div class="container">

    <h1 class="mb-3">Grafik Pondok Pucung</h1>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="row row-cols-1 row-cols-md-1 g-4">

        <!-- //GRAFIK TINGGI AIR  -->
        <!-- <div class="col">
            <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
                <div class="card-body">
                    <h1 class="card-title">Situ Parigi</h1><hr>
                    <h5>Tinggi Air</h5>
                    <div>
                        <canvas id="tinggi_airChart"></canvas>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- //GRAFIK CURAH HUJAN  -->
        <div class="col">
            <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
                <div class="card-body">
                    <!-- <h5 class="card-title">Pondok Pucung</h5><hr> -->
                    <h5 class="card-title">Curah Hujan</h5>
                    <div>
                        <canvas id="curah_hujanChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- //TEST GRAFIK CURAH HUJAN  -->
        <!-- <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
            <div class="card-body">
                <h5 class="card-title">Pondok Pucung</h5><hr>
                <h5 class="card-title">Curah Hujan</h5>
                <div>
                    <canvas id="curah_hujanChart"></canvas>
                </div>
            </div>
        </div> -->


        <!-- //GRAFIK TINGGI AIR  -->
        <!-- <div class="col">
            <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
                <div class="card-body">
                    <h5 class="card-title">Jurang Mangu Barat</h5>
                    <h5 class="card-title">Tinggi Air</h5>
                    <div>
                        <canvas id="voltageChart"></canvas>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- //GRAFIK CURAH HUJAN  -->
        <!-- <div class="col">
            <div class="card tr-card h-100 border-0 shadow-sm p-3 p-3">
                <div class="card-body">
                    <h5 class="card-title">Pondok Pucung</h5>
                    <h5 class="card-title">Curah Hujan</h5>
                    <div>
                        <canvas id="currentChart"></canvas>
                    </div>
                </div>
            </div>
        </div> -->

    </div>

    <script>
        const labels = [
            <?php
            while ($row = mysqli_fetch_array($waktu)) {
                echo "'" . $row['waktu'] . "', ";
            } ?>
        ];

        // GRAFIK TINGGI AIR ------------------------------
        // const dataTinggiAir = {
        //     labels: labels,
        //     datasets: [{
        //         label: 'Tinggi Air (cm)',
        //         backgroundColor: '#673783',
        //         borderColor: '#673783',
        //         data: [
        //             <?php
        //             while ($row = mysqli_fetch_array($tinggi_air)) {
        //                 echo $row['tinggi_air'] . ", ";
        //             } ?>
        //         ],
        //     }]
        // };
        // const configTinggiAir = {
        //     type: 'line',
        //     data: dataTinggiAir,
        //     options: {
        //         animation: {
        //             duration: 0
        //         },
        //     }
        // };
        // const tinggi_airChart = new Chart(
        //     document.getElementById('tinggi_airChart'),
        //     configTinggiAir
        // );

        // GRAFIK CURAH HUJAN ------------------------------
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

    </script>
</div>
<?php include('layout/footer.php') ?>