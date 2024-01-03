<?php
require "../koneksi.php";
include "../template/adm_nav.php";

require "../functions/function_mhsadm.php";
$mhsadm_view = query_view("SELECT * FROM tb_mahasiswa");
?>

<!-- Add Print function -->
<script>
function printTable() {
    window.print();
}
</script>

<div class="container">
    <div class="table-responsive">
        <h3>Data Mahasiswa Baru di Universitas Islam Negri Sultan Thaha Saifuddin Jambi</h3>
        <hr>
        <!-- Add Print Button above the table on the left side -->
        <div class="mb-3" style="float: left;">
            <a class="btn btn-primary" onclick="printTable()" title="Print Data">
                <span class="glyphicon glyphicon-print"></span> Print</a>
        </div>
        <div style="clear: both;"></div>

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
                    <th>Foto</th>
                    <th>Opsi</th>
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
                        <td>
                            <!-- Tampilkan Foto -->
                            <img src="../uploads/<?php echo $row["foto_mhs"]; ?>" alt="Foto Mahasiswa" class="img-thumbnail" style="width: 70px; height: 70px;">
                        </td>
                        <td>
                            <a href="../adm_mahasiswa/update_mhs.php?id=<?php echo $row["id_mhs"];?>" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-cog"></span> Edit</a>
                            <a href="../adm_mahasiswa/hapus_mhs.php?id=<?php echo $row["id_mhs"];?>" onclick="return confirm('Yakin MENGHAPUS data ?');" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                        </td>
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
