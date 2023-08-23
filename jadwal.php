<?php
$id = $_GET['id'];
// Mendapatkan tanggal hari ini
$tanggalHariIni = date('Y-m-d');

// Membuat array untuk menyimpan tanggal-tanggal
$tanggal30HariKedepan = [];

// Mengulang sebanyak 30 hari
for ($i = 0; $i < 10; $i++) {
    // Menambahkan i hari ke tanggal hari ini
    $tanggal = date('Y-m-d', strtotime("+$i days", strtotime($tanggalHariIni)));

    // Menambahkan tanggal ke array
    $tanggal10HariKedepan[] = $tanggal;
}

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost/in_cinema/bioskop.php');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$bioskop = curl_exec($curl);
$data_bioskop = json_decode($bioskop, true);

$data_bioskop = $data_bioskop['data'];
curl_close($curl);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost/in_cinema/studio.php');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$studio = curl_exec($curl);
$data_studio = json_decode($studio, true);

$data_studio = $data_studio['data'];
curl_close($curl);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style/coba.scss">

</head>

<body>

    <form action="" method="POST" class="jadwal-form w-[94%] my-3 mx-auto">

        <div class="jadwal">
            <section class="sec">
                <?php

                foreach ($tanggal10HariKedepan as $tgl) {
                    // Set lokalisasi ke bahasa Indonesia
                    if ($tgl == date("Y-m-d")) {
                        $hari = "Today";
                    } else {
                        $hari = strftime("%a", strtotime($tgl));
                    }
                    $tanggall = strftime("%d", strtotime($tgl));
                    $bulan = strftime("%b", strtotime($tgl));

                ?>
                    <div class="cektod">
                        <input class="inputtod" type="radio" id="<?= $tgl ?>" name="select" value="<?= $tgl ?>" checked>
                        <label class="labeltod" for="<?= $tgl ?>">
                            <span class="text-2xl font-bold"><?= $tanggall ?> <?= $bulan ?></span>
                            <span class="text-2xl font-bold"><?= $hari ?></span>
                        </label>
                    </div>

                <?php
                }


                ?>
            </section>
        </div>




    </form>



</body>

</html>