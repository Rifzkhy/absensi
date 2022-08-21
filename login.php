<?php

include 'koneksi.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$sebagai = $_POST["sebagai"];
	$no = $_POST["no"];
	$ttl = $_POST["ttl"];


	$query="SELECT * FROM $tb1 WHERE sebagai='".$sebagai."' AND no='".$no."' AND ttl='".$ttl."' ";

	$result=mysqli_query($config,$query);

	$row=mysqli_fetch_array($result);

	if($row["sebagai"]=="pembimbing")
	{	

		$_SESSION["no"]=$no;
		$_SESSION["status"] = "login";

		header("location:pembimbing/read.php");
	}

	elseif($row["sebagai"]=="peserta")
	{

		$_SESSION["no"]=$no;
		$_SESSION["status"] = "login";
		
		header("location:peserta/read.php");
	}

	else
	{
		echo "<script>alert('NIK/NIS atau TTL salah!');window.location='index.php';</script>";
	}

}
?>