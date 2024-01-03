<?php
require "../koneksi.php";
include "../template/dsn_nav.php";

require "../functions/function_dosen.php";
$dosen_view = query_view("SELECT * FROM tb_dosen");
?>

<div class="container">
    <div class="table-responsive">
        <h3>Data Dosen Pengajar di Universitas Islam Negri Sultan Thaha Saifuddin Jambi</h3>
        <hr>
       <!-- <div style="padding-bottom:20px">
        <a href="../adm_dosen/tambah_dosen.php" class="btn btn-primary" title="Tambah data dosen pengajar"><span class="glyphicon glyphicon-pencil"></span> Tambah Data</a>
        </div> -->
        <table class="table table-stripped table-hover datatabel">
        <thead>
            <tr>
                <th>No</th>
                <th>KTP Dosen</th>
                <th>Nama Dosen</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telpon</th>
                <th>Bidang Mengajar</th>
                <th>Jadwal Tugas</th>
             <!--   <th>Opsi</th>   -->                      
            </tr>
        </thead>  
        <tbody>
        <?php
            $i = 1;
            foreach($dosen_view as $row){
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["ktp_dosen"]; ?></td>
                <td><?php echo $row["nama_dosen"]; ?></td>
                <td><?php echo $row["alamat_dosen"]; ?></td>
                <td><?php echo $row["email_dosen"]; ?></td>
                <td><?php echo $row["notlp_dosen"]; ?></td>
                <td><?php echo $row["bidang_dosen"]; ?></td>
                <td><?php echo $row["jadwal_dosen"]; ?></td>
             <!--   <td>
                    <a href="../adm_dosen/update_dosen.php?id=<?php echo $row["id_dosen"]; ?>" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-cog"></span> Edit</a>
                    <a href="../adm_dosen/hapus_dosen.php?id=<?php echo $row["id_dosen"]; ?>" onclick="return confirm('Yakin MENGHAPUS data ?');" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                </td> -->
            </tr>
        <?php
            }
        ?>
        </tbody>
        </table>          
    </div>
</div> <!--container-->


<?php
    include "../template/footer.php";
?>