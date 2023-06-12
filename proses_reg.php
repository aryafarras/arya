<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$input = mysqli_query ($mysqli, "insert into login set username='$username', password='$password'");

if($input){
	header('location:index2.html?status=sukses');
}else{
	header('lacation:register.php?status=gagal');
}
?>