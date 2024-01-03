<?php
require "koneksi.php";

function dosen_view($dosen_view) {
    global $koneksi;
    $result = mysqli_query($koneksi, $dosen_view);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function matkul_view($matkul_view){
    global $koneksi;
    $result = mysqli_query($koneksi, $matkul_view);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function regis_mhs($data_mhs){
    global $koneksi;
    
    // Ambil elemen data
    $ktp = htmlspecialchars($data_mhs["ktp_mhs"]);
    $nim = htmlspecialchars($data_mhs["nim_mhs"]);
    $nama = htmlspecialchars($data_mhs["nama_mhs"]);
    $agama = htmlspecialchars($data_mhs["agama_mhs"]);
    $tgllahir = htmlspecialchars($data_mhs["tgllahir_mhs"]);
    $jk = htmlspecialchars($data_mhs["jk_mhs"]);
    $alamat = htmlspecialchars($data_mhs["alamat_mhs"]);
    $email = htmlspecialchars($data_mhs["email_mhs"]);
    $notlp = htmlspecialchars($data_mhs["notlp_mhs"]);

    // Ambil data file
    $namaFile = $_FILES['foto_mhs']['name'];
    $ukuranFile = $_FILES['foto_mhs']['size'];
    $error = $_FILES['foto_mhs']['error'];
    $tmpName = $_FILES['foto_mhs']['tmp_name'];

    // Cek apakah ada file yang diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // Cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Yang Anda upload bukan gambar!');
              </script>";
        return false;
    }

    // Cek jika ukuran file terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar (maksimal 1 MB)!');
              </script>";
        return false;
    }

    // Generate nama file baru
    $namaFileBaru = uniqid() . "." . $ekstensiGambar;

    // Upload file ke folder 'uploads'
    move_uploaded_file($tmpName, '../uploads/' . $namaFileBaru);

    // Query untuk menyimpan data mahasiswa beserta nama file foto ke database
    $query = "INSERT INTO tb_mahasiswa
                VALUES
                ('','$ktp', '$nim', '$nama', '$agama', '$tgllahir',
                '$jk', '$alamat', '$email', '$notlp', '$namaFileBaru')
            ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
?>
