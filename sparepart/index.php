<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylepopup.css">

    <style>
        /* CSS untuk menyesuaikan ukuran textarea */
        #desc {
            height: 150px; /* Atur ketinggian textarea sesuai kebutuhan */
            width: 100%; /* Lebar textarea sama dengan lebar form dikurangi margin dan padding */
            margin-right: 10px; /* Memberikan margin kanan */
            padding: 5px; /* Memberikan padding */
            box-sizing: border-box; /* Membuat lebar termasuk padding dan border */
        }
    </style>
</head>
<body>
    <h2>Update Spare Part</h2>
    <form id="uploadForm" enctype="multipart/form-data">
        <label for="part">Nama Part:</label>
        <input type="text" id="part" name="part"><br><br>
        
        <label for="area">Area:</label>
        <select id="area" name="area" onchange="updateSubArea()">
            <?php
            // Ambil pilihan area dari database
            include_once 'koneksi.php'; // Sertakan file koneksi.php
            $query_area = "SELECT * FROM area";
            $result_area = mysqli_query($koneksi, $query_area);
            if (mysqli_num_rows($result_area) > 0) {
                while($row_area = mysqli_fetch_assoc($result_area)) {
                    echo "<option value='" . $row_area['area'] . "'>" . $row_area['area'] . "</option>";
                }
            }
            ?>
        </select><br><br>
        
        <label for="sub_area">Sub Area:</label>
        <select id="sub_area" name="sub_area">
            <!-- Opsi sub area akan diperbarui oleh JavaScript -->
        </select><br><br>
        
        <label for="desc">Deskripsi:</label>
        <textarea id="desc" name="desc"></textarea><br><br>
        
        <label for="foto">Gambar:</label>
        <input type="file" name="foto" id="foto"><br><br>
        
        <input type="button" value="Upload Foto" onclick="submitForm()" id="uploadBtn">
    </form>

    <div id="success-popup">
        Upload berhasil!
    </div>

    <script src="get_subarea.js"></script>
    <script src="upload-submit.js"></script>
</body>
</html>
