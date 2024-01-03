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

function tambah($data_matkul){
    global $koneksi;
    //ambil elemen data
    $kode = htmlspecialchars($data_matkul["kode_matkul"]);
    $nama = htmlspecialchars($data_matkul["nama_matkul"]);
    $jmlsks = htmlspecialchars($data_matkul["jmlsks_matkul"]);
    $semester = htmlspecialchars($data_matkul["semester_matkul"]);


    //query
    $query = "INSERT INTO tb_matkul
                VALUES
                ('','$kode', '$nama', '$jmlsks', '$semester')
    ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapus($id_matkul){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_matkul WHERE id_matkul = $id_matkul");

    return mysqli_affected_rows($koneksi);
}

function update($data_matkul){
    global $koneksi;
    //ambil elemen data
    $id_matkul = $data_matkul["id"];
    $kode = htmlspecialchars($data_matkul["kode_matkul"]);
    $nama = htmlspecialchars($data_matkul["nama_matkul"]);
    $jmlsks = htmlspecialchars($data_matkul["jmlsks_matkul"]);
    $semester = htmlspecialchars($data_matkul["semester_matkul"]);


    //query
    $query = "UPDATE tb_matkul SET
                kode_matkul = '$kode',
                nama_matkul = '$nama',
                jmlsks_matkul = '$jmlsks',
                semester_matkul = '$semester'
            WHERE id_matkul = $id_matkul
            ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>