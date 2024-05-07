<?php
// Sertakan file koneksi.php
include_once 'koneksi.php';

$selected_column = $_GET['area']; // Ambil dari parameter GET, misalnya 'Line 1', 'Line 2', dll.

// Kueri SQL untuk mengambil data dari kolom yang dipilih
$query_subarea = "SELECT * FROM subarea";

// Eksekusi kueri
$result_subarea = mysqli_query($koneksi, $query_subarea);

// Periksa apakah hasilnya tidak kosong
if (mysqli_num_rows($result_subarea) > 0) {
    // Loop melalui hasil query
    while ($row_subarea = mysqli_fetch_assoc($result_subarea)) {
        // Periksa apakah nilai kolom yang dipilih tidak kosong
        if (!empty($row_subarea[$selected_column])) {
            // Cetak opsi untuk dropdown hanya jika nilai kolom tidak kosong
            echo "<option value='" . $row_subarea[$selected_column] . "'>" . $row_subarea[$selected_column] . "</option>";
        }
    }
}
?>
