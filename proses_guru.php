<?php
include "koneksi.php";

$nama = $_POST['nama'];
$pelajaran = $_POST['pelajaran'];
$keterangan = $_POST['keterangan'];

$input = mysqli_query ($mysqli, "insert into guru set nama='$nama', pelajaran='$pelajaran', keterangan='$keterangan'");

if($input){
	header('location:guru.php?status=sukses');
}else{
	header('lacation:tambah_guru.php?status=gagal');
}
?>