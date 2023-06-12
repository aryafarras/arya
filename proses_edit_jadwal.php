<?php

include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$hari = $_POST['hari'];
$pelajaran=$_POST['pelajaran'];
$kelas=$_POST['kelas'];
$jam=$_POST['jam'];

mysqli_query($mysqli,"update guru set nama='$nama', hari='$hari', pelajaran='$pelajaran', kelas='$kelas', jam='$jam'where id='$id' ");
header("location:jadwal.php");

?>