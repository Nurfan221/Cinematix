<?php
$id = $_GET['id'];
echo $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <div class="container">
        <div class="jadwal">
            <?php

            for ($i = 0; $i < 5; $i++) {
                // blok kode yang akan diulang di sini!

            ?>
                <div class="tgltayang">
                    <h1>1 mei </h1>
                    <h1>Hari ini</h1>
                </div>

            <?php } ?>
        </div>




        <div class="bioskop">
            <div class="bioskop1">
                <div class="alamatbioskop">
                    <img src="gambar/bintang.png" alt="">
                    <h1>JOGJA CITY XXI </h1>
                    <p>Jl. Magelang No.6 No.18, Kutu Patran, Sinduadi, Kec. Mlati, Kabupaten Slem...</p>
                </div>
                <div class="jamtayang">
                    <h1>2D</h1>
                    <?php

                    for ($i = 0; $i < 4; $i++) {
                        // blok kode yang akan diulang di sini!

                    ?>
                        <div class="jamtayang2">
                            <h1>13.00</h1>
                        </div>

                    <?php } ?>
                </div>

            </div>
            <div class="bioskop2">
                <div class="xxi">
                    <img src="gambar/XXI.png" alt="">
                </div>
                <div class="harga">
                    <h1>Rp.45.000.00-</h1>
                </div>
            </div>
        </div>
        <div class="tombolbeli">
            <div class="tiket">
                <img src="gambar/tiket.png" alt="">
            </div>
            <div class="tiket2">
                <h1>BELI TIKET</h1>
            </div>

        </div>
    </div>


</body>

</html>