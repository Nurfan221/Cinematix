<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Dasboard</title>
</head>

<body>
    <!-- bg -->
    <div class="contaianer ">

        <!-- navbar -->

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


        <!-- Banner -->
        <div class="banner">
            <div class="banner1">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="max-height: 500px;">
                        <div class="carousel-item active">
                            <img src="gambar/frame1.png" class="d-block w-100" style="max-height: 400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/frame2.png" class="d-block w-100" style="max-height: 400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/frame3.png" class="d-block w-100" style="max-height: 400px;" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>

        <div class="section">
            <div class="container">
                <h3>Produk</h3>
                <div class="box">
                    <?php
                    $curl = curl_init();

                    curl_setopt($curl, CURLOPT_URL, 'http://localhost/in_cinema/index.php');
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                    $response = curl_exec($curl);
                    $data = json_decode($response, true);

                    curl_close($curl);
                    // var_dump($data);
                    foreach ($data['data'] as $item) {



                    ?>

                        <a href="deskripsi.php?id=<?php echo $item['id_film'] ?>">
                            <div class="produk">
                                <div class="gmbrprdk" style=" height:200px">
                                    <img src="<?php echo $item['poster']; ?>">
                                </div>
                                <div class="deskripsi" style=" height:170px;">

                                    <div class="deskripsi1" style=" height:100px;  margin-top: 20px;">
                                        <p class="nama"><?php echo $item['judul']; ?></p>

                                    </div>

                                    <div class="deskripsi2" style=" height:50px">
                                        <!-- Button trigger modal -->
                                        <form action="deskripsi.php?id=<?php echo $item['id_film'] ?>" method="POST">
                                            <button class="button-24" name="deskripsi" value="Cari-Produk" id="btnlogin" role="button" style="  margin-left: 60px; padding-top:5px;">Deskripsi</button>
                                        </form>





                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>


    </div>





</body>

</html>