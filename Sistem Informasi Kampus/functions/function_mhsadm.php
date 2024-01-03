<?php
require "koneksi.php";

function query_view($query_view) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query_view);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id_mhs){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE id_mhs = $id_mhs");

    return mysqli_affected_rows($koneksi);
}

function update($data_mhs) {
    global $koneksi;

    // Ambil elemen data
    $id_mahasiswa = $data_mhs["id"];
    $ktp = htmlspecialchars($data_mhs["ktp_mhs"]);
    $nim = htmlspecialchars($data_mhs["nim_mhs"]);
    $nama = htmlspecialchars($data_mhs["nama_mhs"]);
    $agama = htmlspecialchars($data_mhs["agama_mhs"]);
    $tgllahir = htmlspecialchars($data_mhs["tgllahir_mhs"]);
    $jk = htmlspecialchars($data_mhs["jk_mhs"]);
    $alamat = htmlspecialchars($data_mhs["alamat_mhs"]);
    $email = htmlspecialchars($data_mhs["email_mhs"]);
    $notlp = htmlspecialchars($data_mhs["notlp_mhs"]);

    // Upload foto
    $namaFile = $_FILES['foto_mhs']['name'];
    $ukuranFile = $_FILES['foto_mhs']['size'];
    $error = $_FILES['foto_mhs']['error'];
    $tmpName = $_FILES['foto_mhs']['tmp_name'];

    // Lokasi penyimpanan foto (folder "uploads")
    $uploadDir = "../uploads/";

    // Jika ada file foto yang diunggah
    if ($error === 0) {
        // Generasi nama unik untuk file foto
        $namaFileBaru = uniqid() . "_" . $namaFile;

        // Pindahkan file foto ke folder "uploads"
        move_uploaded_file($tmpName, $uploadDir . $namaFileBaru);

        // Hapus foto lama jika ada
        $queryHapusFotoLama = "SELECT foto_mhs FROM tb_mahasiswa WHERE id_mhs = $id_mahasiswa";
        $resultHapusFotoLama = mysqli_query($koneksi, $queryHapusFotoLama);
        $rowHapusFotoLama = mysqli_fetch_assoc($resultHapusFotoLama);
        $fotoLama = $rowHapusFotoLama['foto_mhs'];

        if ($fotoLama != "default.jpg") {
            unlink($uploadDir . $fotoLama);
        }

        // Update data dengan nama file foto baru
        $queryUpdate = "UPDATE tb_mahasiswa SET
                            ktp_mhs = '$ktp',
                            nim_mhs = '$nim',
                            nama_mhs = '$nama',
                            agama_mhs = '$agama',
                            tgllahir_mhs = '$tgllahir',
                            jk_mhs = '$jk',
                            alamat_mhs = '$alamat',
                            email_mhs = '$email',
                            notlp_mhs = '$notlp',
                            foto_mhs = '$namaFileBaru'
                        WHERE id_mhs = $id_mahasiswa";
    } else {
        // Jika tidak ada file foto yang diunggah
        $queryUpdate = "UPDATE tb_mahasiswa SET
                            ktp_mhs = '$ktp',
                            nim_mhs = '$nim',
                            nama_mhs = '$nama',
                            agama_mhs = '$agama',
                            tgllahir_mhs = '$tgllahir',
                            jk_mhs = '$jk',
                            alamat_mhs = '$alamat',
                            email_mhs = '$email',
                            notlp_mhs = '$notlp'
                        WHERE id_mhs = $id_mahasiswa";
    }

    // Eksekusi query update
    mysqli_query($koneksi, $queryUpdate);

    return mysqli_affected_rows($koneksi);
}
?>
