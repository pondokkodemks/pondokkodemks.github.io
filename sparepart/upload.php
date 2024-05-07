<?php
// Sertakan file koneksi.php
include_once 'koneksi.php';

// Tangani pengunggahan gambar dan data
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

// Ambil data dari formulir
$part = $_POST['part'];
$area = $_POST['area'];
$sub_area = $_POST['sub_area'];
$desc = $_POST['desc'];
$img = $_FILES["foto"]["name"];

// Simpan informasi ke database
$query = "INSERT INTO sparepart (img, partname, area, subarea, desk) VALUES ('$img', '$part', '$area', '$sub_area', '$desc')";
mysqli_query($koneksi, $query);

// Kirim respon JSON
$response = array("success" => true);
echo json_encode($response);
?>
