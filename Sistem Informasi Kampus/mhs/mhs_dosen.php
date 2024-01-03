<?php
require "../koneksi.php";
include "../template/mhs_nav.php";

require "../functions/function_mhs.php";
$dosen_view = dosen_view("SELECT * FROM tb_dosen");
?>

<div class="container">
    <div class="table-responsive">
        <h3>Data Dosen Pengajar di Universitas Islam Negri Sultan Thaha Saifuddin Jambi.</h3>
        <hr>

        <table class="table table-stripped table-hover datatabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Dosen</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telpon</th>
                <th>Bidang Mengajar</th>
                <th>Jadwal Tugas</th>                        
            </tr>
        </thead>  
        <tbody>
        <?php
            $i = 1;
            foreach($dosen_view as $row){
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["nama_dosen"]; ?></td>
                <td><?php echo $row["alamat_dosen"]; ?></td>
                <td><?php echo $row["email_dosen"]; ?></td>
                <td><?php echo $row["notlp_dosen"]; ?></td>
                <td><?php echo $row["bidang_dosen"]; ?></td>
                <td><?php echo $row["jadwal_dosen"]; ?></td>
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