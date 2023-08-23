<?php
include "koneksi.php";

// Mendapatkan data dari permintaan DELETE
if (isset($_POST['jam']) && isset($_POST['kursi']) && isset($_POST['id_bioskop']) && isset($_POST['tanggal']) && isset($_POST['id_studio'])) {
    $jam = $_POST['jam'];
    $kursi = $_POST['kursi'];
    $id_bioskop = $_POST['id_bioskop'];
    $tanggal = $_POST['tanggal'];
    $id_studio = $_POST['id_studio'];

    $successCount = 0; // Counter untuk menghitung jumlah penghapusan yang berhasil

    // Melakukan penghapusan kursi secara berulang
    foreach ($kursi as $kursiItem) {
        // Mengeksekusi perintah SQL untuk menghapus data
        $query = "DELETE FROM data_tiket 
                  WHERE jam = '$jam' AND id_bioskop = '$id_bioskop' 
                  AND tanggal = '$tanggal' AND id_studio = '$id_studio' 
                  AND nomor_kursi = '$kursiItem'";

        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $successCount++;
        }
    }

    // Menentukan status dan pesan berdasarkan jumlah penghapusan yang berhasil
    if ($successCount == count($kursi)) {
        $response = array('status' => 'success', 'message' => 'Data berhasil dihapus', "jumlah_data" => $successCount);
    } else {
        $response = array('status' => 'error', 'message' => 'Gagal menghapus data!');
    }
} else {
    $response = array('status' => 'error', 'message' => 'Data yang diperlukan tidak lengkap');
}

// Mengembalikan response dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);

// Menutup koneksi database
mysqli_close($koneksi);
?>
