<?php
// Include the necessary files and perform any additional setup if needed
require "../koneksi.php";
require "../functions/function_mhsadm.php";
$mhsadm_view = query_view("SELECT * FROM tb_mahasiswa");

// Output the HTML content for printing
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Include any necessary CSS styles for printing -->
</head>
<body>

    <h3>Data Mahasiswa Baru di Universitas Islam Negri Sultan Thaha Saifuddin Jambi</h3>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>KTP Mahasiswa</th>
                <th>NIM Mahasiswa</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telpon</th>
                <!-- Add other table headers as needed -->
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($mhsadm_view as $row) {
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["ktp_mhs"]; ?></td>
                    <td><?php echo $row["nim_mhs"]; ?></td>
                    <td><?php echo $row["nama_mhs"]; ?></td>
                    <td><?php echo $row["alamat_mhs"]; ?></td>
                    <td><?php echo $row["email_mhs"]; ?></td>
                    <td><?php echo $row["notlp_mhs"]; ?></td>
                    <!-- Add other table data as needed -->
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- Include any necessary scripts for printing -->

    <script>
        // Use JavaScript to trigger the print dialog when the page loads
        window.onload = function () {
            window.print();
        };

        // Redirect after printing or canceling the print dialog
        window.onafterprint = function () {
            window.location.href = 'adm_mahasiswa.php';
        };

        window.onbeforeprint = function () {
            window.location.href = 'adm_mahasiswa.php';
        };
    </script>

</body>
</html>
