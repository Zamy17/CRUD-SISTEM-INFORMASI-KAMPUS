<?php
session_start();
if (!isset($_SESSION["login"])){
    header('location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIMas Universitas Islam Negri Sultan Thaha Saifuddin Jambi </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../aset/bootstrap/css/stayle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="../aset/bootstrap/js/bootstrap.min.js"></script>

  <!-- datatabel -->
  <link rel="stylesheet" type="text/css" href="../aset/datatabel/datatables.min.css"/>
  <script type="text/javascript" src="../aset/datatabel/datatables.min.js"></script>

  <script>
    $(document).ready(function() {
    $('.datatabel').DataTable();
  } );
  </script>
</head>
<body>

<nav class="navbar navbar-default main-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"  style="color: white;">DASHBOARD DOSEN</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../Dosen/dsn_home.php"  style="color: black;">Home</a></li>
      <li><a href="../Dosen/dsn_matkul.php"  style="color: white;">Data Mata Kuliah</a></li>
      <li><a href="../Dosen/dsn_dosen.php" style="color: white;">Data Dosen</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../logout.php"  style="color: white;"><span class="glyphicon glyphicon-log-in"  style="color: white;"></span> Logout</a></li>
    </ul>
  </div>
</nav>
