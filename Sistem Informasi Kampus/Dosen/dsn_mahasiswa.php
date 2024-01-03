<?php
require "../koneksi.php";
include "../template/dsn_nav.php";

require "../functions/function_mhsadm.php";
$mhsadm_view = query_view("SELECT * FROM tb_mahasiswa");
?>

<div class="container">
    <div class="table-responsive">
        <h3>Data Mahasiswa Baru di Universitas Islam Negri Sultan Thaha Saifuddin Jambi</h3>
        <hr>
        </div>
        <table class="table table-stripped table-hover datatabel">
        <thead>
            <tr>
                <th>No</th>
                <th>KTP Mahasiswa</th>
                <th>NIM Mahasiswa</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telpon</th>
       <!--         <th>Opsi</th>      -->                   
            </tr>
        </thead>  
        <tbody>
        <?php
            $i = 1;
            foreach($mhsadm_view as $row){
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["ktp_mhs"]; ?></td>
                <td><?php echo $row["nim_mhs"]; ?></td>
                <td><?php echo $row["nama_mhs"]; ?></td>
                <td><?php echo $row["alamat_mhs"]; ?></td>
                <td><?php echo $row["email_mhs"]; ?></td>
                <td><?php echo $row["notlp_mhs"]; ?></td>
      <!--          <td>
                    <a href="../adm_mahasiswa/update_mhs.php?id=<?php echo $row["id_mhs"];?>" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-cog"></span> Edit</a>
                    <a href="../adm_mahasiswa/hapus_mhs.php?id=<?php echo $row["id_mhs"];?>" onclick="return confirm('Yakin MENGHAPUS data ?');" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                </td>       -->
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