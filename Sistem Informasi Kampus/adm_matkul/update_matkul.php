<?php
include "../template/adm_nav.php";
require "../functions/function_matkul.php";

//ambil data url
$id = $_GET["id"];

//data mhs berdasarkan ID
$data_matkul = query_view("SELECT * FROM tb_matkul WHERE id_matkul = $id")[0];

//cek tombol submit ditekan/belum
if(isset($_POST["submit"])){
    //cek berhasil / tidak tambah data
    if(update($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL diupdate');
                document.location.href = '../admin/adm_matkul.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data GAGAL diupdate');
                document.location.href = '../admin/adm_matkul.php';
            </script>
        ";
    }
}
?>

<div class="container">
<form class="form-horizontal" action="" method="post">
    <div class="row">
    <div class="col-lg-6">
        <h3>Update Data Mata Kuliah</h3>
        <hr>
        <input type="hidden" name="id" value="<?php echo $data_matkul["id_matkul"];?>">
        <div class="form-group">
            <label class="control-label col-sm-4" for="kode_matkul">Kode Mata Kuliah :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="kode_matkul" id="kode_matkul" required value="<?php echo $data_matkul["kode_matkul"];?>">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-4" for="nama_matkul">Nama Mata Kuliah :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" required value="<?php echo $data_matkul["nama_matkul"];?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="jmlsks_matkul">Jumlah SKS :</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="jmlsks_matkul" id="jmlsks_matkul" required value="<?php echo $data_matkul["jmlsks_matkul"];?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="semester_matkul">Semester :</label>
            <div class="col-sm-8"><select id="semester_matkul" name="semester_matkul" class="form-control select2" style="width: 100%;">
                <option value="<?php echo $data_matkul["semester_matkul"];?>" selected="selected"><?php echo $data_matkul["semester_matkul"];?></option>
                <option value="1">1 (Satu)</option>
                <option value="2">2 (Dua)</option>
                <option value="3">3 (Tiga)</option>
                <option value="4">4 (Empat)</option>
                <option value="5">5 (Lima)</option>
                <option value="6">6 (Enam)</option>
                <option value="7">7 (Tujuh)</option>
                <option value="8">8 (Delapan)</option>
            </select>
            </div>
        </div>
        <hr>
    </div> <!-- col -->
    </div> <!-- row -->
    <button type="submit" name="submit" class="btn btn-primary">Update Data Mata Kuliah</button>
    <a href="../admin/adm_matkul.php" class="btn btn-danger">Batal</a>
</form>
</div> <!--container-->

<?php
include "../template/footer.php";
?>