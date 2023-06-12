<?php

include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$pelajaran=$_POST['pelajaran'];
$keterangan=$_POST['keterangan'];

mysqli_query($mysqli,"update guru set nama='$nama', pelajaran='$pelajaran', keterangan='$keterangan'where id='$id' ");
header("location:guru.php");

?>