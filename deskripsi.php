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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background-color: #1F3747; height: 50px">
            <a class="navbar-brand" href="dasboard.php" style="color:aliceblue;">SINEMA TIX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="judul">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <div class="icon"><img src="gambar/play1.png" alt="">
                                <p style="color:aliceblue;  text-align: center;     margin: 0 auto; ">Now Playing</p>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="icon"><img src="gambar/movie.png" alt="">
                                <p style="color:aliceblue; text-align: center;    margin: 0 auto;">Theater</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="icon"><img src="gambar/megaphone.png" alt="">
                                <p style="color:aliceblue; text-align: center;     margin: 0 auto;">UP Coming</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="icon"><img src="gambar/lokasi.png" alt="">
                                <p style="color:aliceblue;     margin: 0 auto; text-align: center;">Location</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    </div>



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

                            <td>Mark</td>
                        </tr>
                    </th>
                    <th>
                        <tr>
                            <th>Durasi</th>

                            <td>Jacob</td>
                        <tr>
                    </th>
                    <th>Sutradara</th>

                    <td>Larry</td>
                    </tr>
                    <tr>
                        <th>Rating Usia</th>

                        <td>Larry</td>
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


</body>

<!-- ajax -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.klik_menu').click(function() {
            var menu = $(this).attr('id');
            if (menu == "sinopsis") {
                $('.badan').load('sinopsis.php');
                document.getElementById("jadwal").style = "border:none;";
                document.getElementById("sinopsis").style = "border-bottom:2px solid; color: black;";
            } else if (menu == "jadwal") {
                $('.badan').load('jadwal.php');
                document.getElementById("sinopsis").style = "border:none;";
                document.getElementById("jadwal").style = "border-bottom:2px solid; color: black;";
            }
        });


        // halaman yang di load default pertama kali
        $('.badan').load('home.php');

    });
</script>

</html>