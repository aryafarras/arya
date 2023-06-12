<?php
include "koneksi.php";

$nama=$_POST['nama'];
$hari = $_POST['hari'];
$pelajaran=$_POST['pelajaran'];
$kelas=$_POST['kelas'];
$jam=$_POST['jam'];

$insert=mysqli_query($mysqli, "insert into jadwal set nama='$nama', hari='$hari', pelajaran='$pelajaran', kelas='$kelas', jam='$jam'");

if($insert){
	header("location:tambah_jadwal.php?status=sukses");
}else{
	header("location:tambah_jadwal.php?status=gagal");
}
?>