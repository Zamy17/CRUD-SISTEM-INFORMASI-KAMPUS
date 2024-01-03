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
    //ambil elemen data
    $ktp = htmlspecialchars($data_mhs["ktp_mhs"]);
    $nim = htmlspecialchars($data_mhs["nim_mhs"]);
    $nama = htmlspecialchars($data_mhs["nama_mhs"]);
    $tgllahir = htmlspecialchars($data_mhs["tgllahir_mhs"]);
    $tmplahir = htmlspecialchars($data_mhs["tmplahir_mhs"]);
    $agama = htmlspecialchars($data_mhs["agama_mhs"]);
    $kwn = htmlspecialchars($data_mhs["kwn_mhs"]);
    $jk = htmlspecialchars($data_mhs["jk_mhs"]);
    $alamat = htmlspecialchars($data_mhs["almt_mhs"]);
    $email = htmlspecialchars($data_mhs["email_mhs"]);
    $notlp = htmlspecialchars($data_mhs["notlp_mhs"]);
    $smak = htmlspecialchars($data_mhs["smak_mhs"]);
    $almtsmak = htmlspecialchars($data_mhs["almtsmak_mhs"]);
    $llssmak = htmlspecialchars($data_mhs["llssmak_mhs"]);
    $ortu = htmlspecialchars($data_mhs["ortu_mhs"]);
    $tlportu = htmlspecialchars($data_mhs["tlportu_mhs"]);
    $almtortu = htmlspecialchars($data_mhs["almtortu_mhs"]);

    //query
    $query = "INSERT INTO tb_mahasiswa
                VALUES
                ('','$ktp', '$nim', '$nama', '$tgllahir', '$tmplahir', '$agama', '$kwn',
                '$jk', '$alamat', '$email', '$notlp', '$smak', '$almtsmak', '$llssmak', '$ortu', '$tlportu', '$almtortu')
    ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>