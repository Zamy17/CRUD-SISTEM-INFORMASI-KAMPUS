<?php
include '../template/adm_nav.php';
require "../functions/function_mhsadm.php";



//ambil data url
$id = $_GET["id"];

//data mhs berdasarkan ID
$data_mahasiswa = query_view("SELECT * FROM tb_mahasiswa WHERE id_mhs = $id")[0];

//cek tombol submit ditekan/belum
if(isset($_POST["submit"])){
    var_dump($koneksi);
    var_dump($_POST);
    
    //cek berhasil / tidak update data
    if(update($_POST) > 0 ) {
        
    } else{
        echo mysqli_error($koneksi);
    }
}
?>

<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
<h1 align="center">Update Data Mahasiswa</h1>
</div>
<div class="panel-body">
    <form class="form-horizontal" action="" method="post">
    <div class="row">
        <div class="col-lg-6">
        <h3>Data Pribadi Mahasiswa</h3>
        <hr>
            <input type="hidden" name="id" value="<?php echo $data_mahasiswa["id_mhs"];?>">
            <div class="form-group">
                <label class="control-label col-sm-4" for="ktp_mhs">KTP :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ktp_mhs" name="ktp_mhs" readonly value="<?php echo $data_mahasiswa["ktp_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="nim_mhs">NIM :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nim_mhs" name="nim_mhs" readonly value="<?php echo $data_mahasiswa["nim_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="nama_mhs">Nama Lengkap :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required value="<?php echo $data_mahasiswa["nama_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="tgllahir_mhs">Tanggal Lahir :</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgllahir_mhs" name="tgllahir_mhs" required value="<?php echo $data_mahasiswa["tgllahir_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="tmplahir_mhs">Tempat Lahir :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmplahir_mhs" name="tmplahir_mhs" required value="<?php echo $data_mahasiswa["tmplahir_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="agama_mhs">Agama :</label>
                <div class="col-sm-8"><select id="agama_mhs" name="agama_mhs" class="form-control select2" style="width: 100%;">
                    <option value="<?php echo $data_mahasiswa["agama_mhs"];?>" selected="selected"><?php echo $data_mahasiswa["agama_mhs"];?></option>
                    <option value="muslim">Muslim</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="konghucu">Konghucu</option>
                    <option value="lainnya">Lainnya</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="kwn_mhs">Kewarganegaraan :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kwn_mhs" name="kwn_mhs" required value="<?php echo $data_mahasiswa["kwn_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="jk_mhs">Jenis Kelamin :</label>
                <div class="col-sm-8"><select id="jk_mhs" name="jk_mhs" class="form-control select2" style="width: 100%;">
                    <option value="<?php echo $data_mahasiswa["jk_mhs"];?>" selected="selected"><?php echo $data_mahasiswa["jk_mhs"];?></option>
                    <option value="Laki">Laki laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="alamat_mhs">Alamat :</label>
                <div class="col-sm-8">
                    <textarea id="alamat_mhs" name="alamat_mhs" class="form-control" required><?php echo $data_mahasiswa["alamat_mhs"];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email_mhs">Email :</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email_mhs" name="email_mhs" required value="<?php echo $data_mahasiswa["email_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="notlp_mhs">No. Telepon :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="notlp_mhs" name="notlp_mhs" required value="<?php echo $data_mahasiswa["notlp_mhs"];?>">
                </div>
            </div>
        </div> 

        <div class="col-lg-6">
        <h3>Data Alumni Mahasiswa</h3>
        <hr>
            <div class="form-group">
                <label class="control-label col-sm-4" for="smak_mhs">SMA / SMK :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="smak_mhs" name="smak_mhs" required value="<?php echo $data_mahasiswa["smak_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="almtsmak_mhs">Alamat Sekolah :</label>
                <div class="col-sm-8">
                    <textarea id="almtsmak_mhs" name="almtsmak_mhs" class="form-control" required><?php echo $data_mahasiswa["almtsmak_mhs"];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="llssmak_mhs">Lulus Tahun :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="llssmak_mhs" name="llssmak_mhs" required value="<?php echo $data_mahasiswa["llssmak_mhs"];?>">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
        <h3 style="margin-top: 50px">Data Orang Tua Mahasiswa</h3>
        <hr>
            <div class="form-group">
                <label class="control-label col-sm-4" for="ortu_mhs">Nama Ayah / Ibu :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ortu_mhs" name="ortu_mhs" required value="<?php echo $data_mahasiswa["ortu_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="tlportu_mhs">No. Telepon :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tlportu_mhs" name="tlportu_mhs" required value="<?php echo $data_mahasiswa["tlportu_mhs"];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="almtortu_mhs">Alamat Orang Tua :</label>
                <div class="col-sm-8">
                    <textarea id="almtortu_mhs" name="almtortu_mhs" class="form-control" required><?php echo $data_mahasiswa["almtortu_mhs"];?></textarea>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <button type="submit" name="submit" class="btn btn-primary">Update Data Mahasiswa</button>
    <a href="../admin/adm_mahasiswa.php" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
</div>


<?php
include '../template/footer.php';
?>