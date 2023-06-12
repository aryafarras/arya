<?php
include "koneksi.php";

$nama=$_POST['nama'];
$pelajaran=$_POST['pelajaran'];
$keterangan=$_POST['keterangan'];

$insert=mysqli_query($mysqli, "insert into guru set nama='$nama', pelajaran='$pelajaran', keterangan='$keterangan'");

if($insert){
	header("location:guru.php?status=sukses");
}else{
	header("location:tambah_guru.php?status=gagal");
}
?>