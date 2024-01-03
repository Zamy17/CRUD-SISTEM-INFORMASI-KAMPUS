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

function tambah($data_dosen){
    global $koneksi;
    //ambil elemen data
    $ktp = htmlspecialchars($data_dosen["ktp_dosen"]);
    $nama = htmlspecialchars($data_dosen["nama_dosen"]);
    $alamat = htmlspecialchars($data_dosen["alamat_dosen"]);
    $email = htmlspecialchars($data_dosen["email_dosen"]);
    $notlp = htmlspecialchars($data_dosen["notlp_dosen"]);
    $bidang = htmlspecialchars($data_dosen["bidang_dosen"]);
    $jadwal = htmlspecialchars($data_dosen["jadwal_dosen"]);

    //query
    $query = "INSERT INTO tb_dosen
                VALUES
                ('','$ktp', '$nama', '$alamat', '$email', '$notlp', '$bidang', '$jadwal')
    ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapus($id_dosen){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_dosen WHERE id_dosen = $id_dosen");

    return mysqli_affected_rows($koneksi);
}

function update($data_dosen){
    global $koneksi;
    //ambil elemen data
    $id_dosen = $data_dosen["id"];
    $ktp = htmlspecialchars($data_dosen["ktp_dosen"]);
    $nama = htmlspecialchars($data_dosen["nama_dosen"]);
    $alamat = htmlspecialchars($data_dosen["alamat_dosen"]);
    $email = htmlspecialchars($data_dosen["email_dosen"]);
    $notlp = htmlspecialchars($data_dosen["notlp_dosen"]);
    $bidang = htmlspecialchars($data_dosen["bidang_dosen"]);
    $jadwal = htmlspecialchars($data_dosen["jadwal_dosen"]);

    //query
    $query = "UPDATE tb_dosen SET
                ktp_dosen = '$ktp',
                nama_dosen = '$nama',
                alamat_dosen = '$alamat',
                email_dosen = '$email',
                notlp_dosen = '$notlp',
                bidang_dosen = '$bidang',
                jadwal_dosen = '$jadwal'
            WHERE id_dosen = $id_dosen
            ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>