<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost/in_cinema/getOrder.php');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$data = json_decode($response, true);

$data = $data['data'];
curl_close($curl);


foreach ($data as $item) {
    $id_film = $item['id_film'];
    $id_studio = $item['id_studio'];
    $id_bioskop = $item['id_bioskop'];
    $tanggal = $item['tanggal'];
    $jam = $item['jam'];
    $kursi = $item['kursi'];
    $harga = $item['harga'];
    $jumlah = $item['jumlah'];
    $total_harga = $item['total_harga'];
}
$harga = formatRupiah($harga);
$total_harga = $total_harga + (4000 * $jumlah);
$total_harga = formatRupiah($total_harga);

function formatRupiah($angka)
{
    $rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $rupiah;
}






//ngambil film berdasarkan id_film
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost/in_cinema/index.php?id=' . $id_film);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$data = json_decode($response, true);

$data = $data['data'];
curl_close($curl);

foreach ($data as $item) {
    $judul = $item['judul'];
    $gambar = $item['poster'];
}

//ngambil studio berdasarkan id_studio
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost/in_cinema/studio.php?id=' . $id_studio);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$data = json_decode($response, true);

$data = $data['data'];
curl_close($curl);

foreach ($data as $item) {
    $nama_studio = $item['nama_studio'];
    $studio = $item['studio'];
}

//ngambil bioskop berdasarkan id_bioskop
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost/in_cinema/bioskop.php?id=' . $id_bioskop);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$data = json_decode($response, true);

$data = $data['data'];
curl_close($curl);

foreach ($data as $item) {
    $nama_bioskop = $item['nama'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a13d2f4f0a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>order</title>
</head>

<body>

    <div class="w-[100vw] h-[100vh] border border-1">

        <div class="flex justify-center  w-[49vw] h-[100vh] border  border-black float-left bg-red p-3">
            <div class="w-[80%] h-[7%] flex justify-center items-center border border-black p-1 bg-red-500 text-white rounded-md">
                <h1 class="w-[86%]  pr-1 border-r-2 float-left">Silahkan lakukan pembayaran Anda sebelum hitung mundur selesai</h1>
                <p id="countdown" class="w-[10%] float-right text-right mr-2"></p>
            </div>

        </div>

        <!-- movie detail  -->
        <div class="w-[49vw] h-[100vh] border border-1 float-right bg-gray-300 p-5">
            <h1>Movie Detail</h1>
            <div class="w-[100%] h-[40%] border border-black p-2">
                <div class="w-[30%] h-[100%] float-left border border-black">
                    <div class="flex justify-center">
                        <img class="w-[90%]" src="<?= $gambar ?>" alt="">
                    </div>
                </div>

                <div class="w-[70%] h-full float-right border border-black">
                    <table class="border border-collapse w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2" colspan="2"><?= $judul ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2 w-1/5">Bioskop</td>
                                <td class="border px-4 py-2 w-2/5 text-right"><?= $nama_bioskop ?></td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 w-1/5">Tanggal</td>
                                <td class="border px-4 py-2 w-2/5 text-right"><?= $tanggal ?></td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 w-1/5">Jam</td>
                                <td class="border px-4 py-2 w-2/5 text-right"><?= $jam ?></td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 w-1/5">Studio</td>
                                <td class="border px-4 py-2 w-2/5 text-right text-lg font-bold"><?php echo $studio . " <span class='text-sm font-normal'>( " . $nama_studio . ")</span>"; ?></td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2 w-1/5">Kursi</td>
                                <td class="border px-4 py-2 w-2/5 text-right"><?= $kursi ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- detail pembayaran  -->
            <div class="w-[100%] h-[50%] border border-black mt-5 p-2">
                <h1>Payment Detail</h1>
                <table class="border border-collapse w-full">


                    <tr>
                        <td class="border px-4 py-2 w-1/5">Harga Tiket</td>
                        <td class="border px-4 py-2 w-2/5 text-right"><?= $harga ?></td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2 w-1/5">Jumlah kursi</td>
                        <td class="border px-4 py-2 w-2/5 text-right"><?= $jumlah ?></td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2 w-1/5">Biaya Admin</td>
                        <td class="border px-4 py-2 w-2/5 text-right">Rp.4000 x <?= $jumlah ?></td>
                    </tr>

                    <!-- input hidden -->
                    <input type="hidden" id="jam" value="<?= $jam ?>">
                    <input type="hidden" id="kursi" value="<?= $kursi ?>">
                    <input type="hidden" id="id_bioskop" value="<?= $id_bioskop ?>">
                    <input type="hidden" id="id_studio" value="<?= $id_studio ?>">
                    <input type="hidden" id="tanggal" value="<?= $tanggal ?>">
                    <input type="hidden" id="kursi" value="<?= $kursi ?>">





                </table>

                <div class="border-black border-t-2">
                    <table class="border border-collapse w-full mt-2">
                        <tr>
                            <td class="border px-4 py-2 w-1/5">Total</td>
                            <td class="border px-4 py-2 w-2/5 text-right"><?= $total_harga ?></td>
                        </tr>
                    </table>
                    <div class="flex justify-center mt-2">
                        <button class="w-[20%] bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Button
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>


<script>
    // Mendapatkan elemen dengan ID 'countdown'
    var countdownElement = document.getElementById('countdown');

    // Menentukan waktu awal countdown
    var timeLeft = 65;

    // Mengupdate countdown setiap detik
    var countdownInterval = setInterval(function() {
        // Mengurangi waktu yang tersisa
        timeLeft--;
        var detik = timeLeft;

        // Konversi detik menjadi menit:detik
        var menit = Math.floor(detik / 60);
        var detikSisa = detik % 60;
        var waktu = menit + ":" + detikSisa;

        // Memperbarui teks pada elemen countdown
        countdownElement.innerText = waktu;

        // Memeriksa apakah countdown telah selesai
        if (timeLeft <= 0) {
            clearInterval(countdownInterval);
            const jam = document.getElementById("jam").value;
            const id_studio = document.getElementById("id_studio").value;
            const id_bioskop = document.getElementById("id_bioskop").value;
            const kursi = document.getElementById("kursi").value;
            const tanggal = document.getElementById("tanggal").value;
            $.ajax({
                url: 'http://localhost/in_cinema/deleteOrder.php',
                method: 'POST',
                data: {
                    id_bioskop: id_bioskop,
                    id_studio: id_studio,
                    tanggal: tanggal,
                    jam: jam,
                    kursi: kursi

                },
                success: function(response) {

                    alert('Waktu pemesanan habis')
                    window.location.href = 'dasboard.php'
                    console.log(response)
                },
                error: function(xhr, status, error) {
                    console.error('Error: ' + error);
                }
            });
        }
    }, 1000); // Mengulang setiap 1 detik (1000 milidetik)
</script>

</html>