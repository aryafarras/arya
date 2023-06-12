<?php
include "koneksi.php";

$nama = $_POST['nama'];
$hari = $_POST['hari'];
$pelajaran = $_POST['pelajaran'];
$kelas = $_POST['kelas'];
$jam = $_POST['jam'];

$input = mysqli_query ($mysqli, "insert into guru set nama='$nama', hari='$hari', pelajaran='$pelajaran', kelas='$kelas', jam='$jam'");

if($input){
	header('location:jadwal.php?status=sukses');
}else{
	header('lacation:tambah_jadwal.php?status=gagal');
}
?>