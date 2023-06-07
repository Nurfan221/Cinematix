<?php
$curl = curl_init();
$code = $_GET['id'];
curl_setopt($curl, CURLOPT_URL, 'http://localhost/in_cinema/index.php?id=' . $code);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$data = json_decode($response, true);

$data = $data['data'];
curl_close($curl);


foreach ($data as $item) {
    $judul = $item['judul'];
    $producer = $item['producer'];
    $poster = $item['poster'];
    $id_film = $item['id_film'];
    $thumbnail = $item['thumbnail'];
    $sinopsis = $item['sinopsis'];
    $genre = $item['genre'];
    $time = $item['time'];
    $usia = $item['usia'];

    $time = $time * 60;
}



?>

<?php
//--------------------------konversi waktu----------------------------
function waktu($time)
{

    if (($time > 0) and ($time < 60)) {
        $lama = number_format($time) . " detik";
        return $lama;
    }
    if (($time > 60) and ($time < 3600)) {
        $detik = fmod($time, 60);
        $menit = $time - $detik;
        $menit = $menit / 60;
        $lama = $menit . " Menit " . number_format($detik) . " detik";
        return $lama;
    }
    if ($time >= 3600) {
        $detik = fmod($time, 60);
        $tempmenit = ($time - $detik) / 60;
        $menit = fmod($tempmenit, 60);
        $jam = ($tempmenit - $menit) / 60;
        $lama = $jam . " Jam " . $menit . " Menit " . number_format($detik) . " detik";
        return $lama;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <title>Deskripsi</title>

</head>

<body>

    <!-- navbar -->
    <nav>
        <div class="navbar">
            <div class="logoutama">
                <img src="gambar/sinematix.png" alt="">
            </div>

            <div class="menupilihan">
                <div class="logomenu">
                    <div class="logomenu1">
                        <img src="gambar/play1.png" alt="">
                    </div>
                    <div class="logomenu2">
                        <h1>Now Playing</h1>
                    </div>
                </div>
                <div class="logomenu">
                    <div class="logomenu1">
                        <img src="gambar/movie.png" alt="">
                    </div>
                    <div class="logomenu2">
                        <h1>Theater</h1>
                    </div>
                </div>
                <div class="logomenu">
                    <div class="logomenu1">
                        <img src="gambar/megaphone.png" alt="">
                    </div>
                    <div class="logomenu2">
                        <h1>Up Coming</h1>
                    </div>
                </div>
                <div class="logomenu">
                    <div class="logomenu1">
                        <img src="gambar/lokasi.png" alt="">
                    </div>
                    <div class="logomenu2">
                        <h1>Location</h1>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <div class="contaianer">





        <div class="deskripsi3">
            <div class="gambardesk">
                <img src="gambar/deskripsi1.png" alt=""></img>
            </div>

            <div class="diskripsifilm ">
                <div class="deskripsifilm1">
                    <img class="gambarfilm" src="<?php echo $poster ?>" alt=""></img>

                </div>

                <div class="deskripsifilm2">
                    <h1><?php echo $judul ?></h1>
                    <table>
                        <th>
                            <tr>
                                <th>Genre</th>
                                <td> : </td>
                                <td><?php echo $genre    ?></td>
                            </tr>
                        </th>
                        <th>
                            <tr>
                                <th>Durasi</th>
                                <td> : </td>
                                <td><?php $jam = waktu($time);
                                    echo $jam  ?></td>
                            <tr>
                        </th>
                        <th> Producer</th>
                        <td> : </td>
                        <td><?php echo $producer ?></td>
                        </tr>
                        <tr>
                            <th>Usia</th>
                            <td>: </td>
                            <td><?php echo $usia ?></td>
                        </tr>

                    </table>
                </div>


            </div>
            <!-- <dev class="pilihanfilm">
            1
        </dev> -->
            <div class="deskripsifilm3">
                <div class="pilihandesk1">
                    <div class="menu">
                        <ul>
                            <li><a class="klik_menu" id="sinopsis">Sinopsis</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pilihandesk2">
                    <div class="menu">
                        <ul>
                            <li><a class="klik_menu" id="jadwal">Jadwal</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- jadwal -->

        <!-- ajax -->
        <div class="badan">

        </div>

        <div>
            <footer>
                <div class="container">
                    <small>Copyright &copy; 2023 - PRODUNCH </small>
                </div>
            </footer>


        </div>
    </div>


</body>

<!-- ajax -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.klik_menu').click(function() {
            var menu = $(this).attr('id');
            if (menu == "sinopsis") {

                $('.badan').load('sinopsis.php?id=<?php echo $item['id_film'] ?>');
                document.getElementById("jadwal").style = "border:none;";
                document.getElementById("sinopsis").style = "border-bottom:2px solid; color: black;";


            } else if (menu == "jadwal") {
                $('.badan').load('jadwal.php?id=<?php echo $item['id_film'] ?>');
                document.getElementById("sinopsis").style = "border:none;";
                document.getElementById("jadwal").style = "border-bottom:2px solid; color: black;";
            }
        });


        // halaman yang di load default pertama kali
        $('.badan').load('home.php');

    });
</script>

</html>