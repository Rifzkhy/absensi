<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'absensi';
$tb1 = 'akun';
$tb2 = 'absen';

$config = mysqli_connect($host,$user,$pass,$db);

session_start();

if($_SESSION['status'] !="login"){
	echo "<script>alert('Ups sepertinya salah input!');window.location='index.php';</script>";
}
?>