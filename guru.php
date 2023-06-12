<!DOCTYPE html>
<html>
<?php
include "koneksi.php";

?>
<head>
 <!DOCTYPE html>
<html>
<head>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>guru</title>

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
  <body  style="background-image:url(https://images.pexels.com/videos/4822860/black-and-white-background-cool-wallpaper-hd-wallpapers-motion-4822860.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500); background-size:cover;" align="center">
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="tambah_guru.php">Kembali</a>
  <a class="navbar-brand" href="tambah_jadwal.php">jadwal pelajaran</a>
  <a class="navbar-brand" href="index2.html">logout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index2.html"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled"></a>
      </li>
    </ul>
   
  </div>
</nav>
<br>
<br>
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
</head>
<body>
  <br>
  <hr>
<center><h1>Absensi guru</h1>
<br>
<br>
<table border="1" align="center" width="60%">
  <tr align="center" bgcolor="black" style="color: white">
    <td>id</td>
    <td>nama</td>
    <td>mata pelajaran</td>
    <td>keterangan</td>
    <td>opsi</td>
  </tr>
  <?php
  $tampil=mysqli_query($mysqli,"select * from guru");
  $no=1;
  while ($hasil=mysqli_fetch_array($tampil)){
    ?>
    <tr bgcolor="white" style="color: black" align="center">
      <td><?php echo $no++;?></td>
      <td><?php echo $hasil['nama'];?></td>
      <td><?php echo $hasil['pelajaran'];?></td>
      <td><?php echo $hasil['keterangan'];?></td>
      <td>
        <a href="edit_guru.php?id=<?php echo $hasil['id'];?>" class="btn btn-primary btn block">edit</a>|
        <a href="hapus_guru.php?hapus&id=<?=$hasil['id'];?>" class="btn btn-danger btn block">hapus</a>
      </td>
    </tr>
    <?php
  }
  ?>
</table>
<br>
<hr>
<div>copyright &copy; 2023|SMK Luqman AL Hakim </div>
  </div>
</center>
</body>
</html>