<?php
require "../koneksi.php";
include "../template/adm_nav.php";

require "../functions/function_matkul.php";
$matkul_view = query_view("SELECT * FROM tb_matkul");
?>

<div class="container">
    <div class="table-responsive">
        <h3>Data Mata Kuliah Universitas Islam Negri Sultan Thaha Saifuddin Jambi</h3>
        <hr>
        <div style="padding-bottom:20px">
            <a href="../adm_matkul/tambah_matkul.php" class="btn btn-primary" title="Tambah data mata kuliah"><span class="glyphicon glyphicon-pencil"></span> Tambah Data</a>
       
        </div>
        <table class="table table-stripped table-hover datatabel" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Jumlah SKS</th>
                    <th>Semester</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($matkul_view as $row) {
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row["kode_matkul"]; ?></td>
                        <td><?php echo $row["nama_matkul"]; ?></td>
                        <td><?php echo $row["jmlsks_matkul"]; ?></td>
                        <td><?php echo $row["semester_matkul"]; ?></td>
                        <td>
                            <a href="../adm_matkul/update_matkul.php?id=<?php echo $row["id_matkul"]; ?>" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-cog"></span> Edit</a>
                            <a href="../adm_matkul/hapus_matkul.php?id=<?php echo $row["id_matkul"]; ?>" onclick="return confirm('Yakin MENGHAPUS data ?');" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
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

<script>
    function printTable() {
        var printContents = document.getElementById("dataTable").outerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
