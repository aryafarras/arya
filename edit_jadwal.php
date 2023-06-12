<?php

include "koneksi.php";
$id=$_GET['id'];
$tampil=mysqli_query($mysqli, "select * from jadwal where id='$id'");
$hasil=mysqli_fetch_array($tampil);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Edit Guru</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="guru.php">Kembali</a>
</nav>
<br>
<br>
<br>
<fieldset>
  <legend align="center">edit guru</legend>
<form method="POST" action="proses_edit_jadwal.php">
<table align="center">
  <tr>
    <td>Nama Guru</td>
    <td>:</td>
    <td><input type="hidden" name="id" value="<?php echo $hasil['id']?>">
      <input style="width: 530px;" type="text" name="nama" value="<?php echo $hasil['nama']?>"></td>
  </tr>
  <tr>
    <td>hari</td>
    <td>:</td>
    <td><input style="width: 530px;" type="text" name="hari" value="<?php echo $hasil['hari']?>"></td>
  </tr>
  <tr>
    <td>Mata Pelajaran</td>
    <td>:</td>
    <td><input style="width: 530px;" type="text" name="pelajaran" value="<?php echo $hasil['pelajaran']?>"></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><input style="width: 530px;" type="text" name="kelas" value="<?php echo $hasil['kelas']?>"></td>
  </tr>
   <tr>
    <td>Jam</td>
    <td>:</td>
    <td><input style="width: 530px;" type="time" name="jam" value="<?php echo $hasil['jam']?>"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="selesai" name="kirim" class="btn btn-primary btn block" style="width: 530px;"></td>
  </tr>
</table>  
</form>