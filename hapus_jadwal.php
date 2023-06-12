<?php
// Tombol Hapus ditekan
include "koneksi.php";
if(isset($_GET['hapus'])){
	$id=$_GET['id'];
	$hapus=mysqli_query($mysqli,"DELETE FROM jadwal WHERE id='$id'");
		if($hapus){
			header("location:jadwal.php");
		}else{
			echo"<script>alert('maaf,data tersebut dengan data yg lain');
			</script>";
		}
}
?>