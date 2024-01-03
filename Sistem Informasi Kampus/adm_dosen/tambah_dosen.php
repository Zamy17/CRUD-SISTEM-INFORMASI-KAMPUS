<?php
include "../template/adm_nav.php";
require "../functions/function_dosen.php";

//cek tombol submit ditekan/belum
if(isset($_POST["submit"])){
    
    //cek berhasil / tidak tambah data
    if(tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL ditambahkan');
                document.location.href = '../admin/adm_dosen.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data GAGAL ditambahkan');
                document.location.href = '../admin/adm_dosen.php';
            </script>
        ";
    }

}
?>

<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
    <h3 align="center">Input Data Dosen Baru</h3>
</div>
<div class="panel-body">
    <form class="form-horizontal" action="" method="post">
        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label col-sm-4" for="ktp_dosen">KTP :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="ktp_dosen" id="ktp_dosen" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="nama_dosen">Nama Lengkap :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="alamat_dosen">Alamat :</label>
                <div class="col-sm-8">
                    <textarea id="alamat_dosen" name="alamat_dosen" class="form-control" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email_dosen">Email :</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email_dosen" id="email_dosen" required>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="control-label col-sm-4" for="notlp_dosen">No. Telepon :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="notlp_dosen" id="notlp_dosen" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="bidang_dosen">Bidang Dosen:</label>
                <div class="col-sm-8"><select id="bidang_dosen" name="bidang_dosen" class="form-control select2" style="width: 100%;">
                    <option value="-" selected="selected">---</option>
                    <option value="Komputasi">Komputasi</option>
                    <option value="Jaringan">Jaringan</option>
                    <option value="RPL">RPL</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="jadwal_dosen">Jadwal Tugas :</label>
                <div class="col-sm-8">
                    <textarea id="jadwal_dosen" name="jadwal_dosen" class="form-control" required></textarea>
                </div>
            </div>
        </div> <!-- col -->
        </div> <!-- row -->
        <hr>
        <button type="submit" name="submit" class="btn btn-primary">Register Data</button>
        <a href="../admin/adm_dosen.php" class="btn btn-danger">Batal</a>
    </form>
</div>
</div> <!--container-->

<?php
include "../template/footer.php";
?>