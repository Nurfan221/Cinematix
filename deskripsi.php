<?php
$curl = curl_init();
$code = $_GET['id'];
curl_setopt($curl, CURLOPT_URL, 'https://carifilm.000webhostapp.com/public/api/get-film/' . $code);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$data = json_decode($response, true);

$data = $data['data'];
curl_close($curl);





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deskripsi</title>
    <link rel="stylesheet" href="style/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background-color: #1F3747; height: 50px">
            <a class="navbar-brand" href="#" style="color:aliceblue;">SINEMA TIX</a>
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
    <div class="section">
        <div class="container">
            <h3>Detail Produk</h3>
            <div class="box">

                <div class="box2">
                    <h2><?php echo $data['judul']; ?></h2>
                    <p>genre genre genre</p>
                </div>
                <div class="box3">
                    <div class="produk2 ">
                        <img src="<?php echo $data['poster']; ?>" alt=""></img>
                    </div>
                    <div class="desk">
                        <div class="deskkiri">
                            <div class="deskkiri1">
                                <p>Produce </p>
                            </div>
                            <div class="deskkiri1">
                                <p>Deskripsi </p>
                            </div>
                        </div>

                        <div class="deskkanan">
                            <div class="deskkanan1">
                                <p> : <?php echo $data['produce'] ?></p>
                            </div>
                            <div class="deskkanan1">
                                <p style="text-align: justify;"> : <?php echo $data['deskripsi'] ?></p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="box4">
                    <div class="jadwal1">
                        <p>Jadwal</p>
                    </div>

                    <div class="jadwal2">
                        <p>18 April</p>
                        <h1>SEL</h1>
                    </div>
                </div>

            </div>
        </div>

        <div>
            <footer>
                <div class="container">
                    <small>Copyright &copy; 2023 - PRODUNCH </small>
                </div>
            </footer>
        </div>
</body>

</html>