<?php
include('koneksi.php');

if (isset($_POST['add'])) {
	$costumer   = $_POST['costumer'];
	$permasalahan  = $_POST['permasalahan'];
	$tanggal = $_POST['tanggal'];
	$teknisi = $_POST['teknisi'];
	$status = $_POST['status'];
	$sql =  mysql_query("INSERT INTO keluhan VALUES(NULL, '$costumer', '$permasalahan', '$tanggal' , '$teknisi' , '$status')") or die(mysqli_error());
	if ($sql) {
		 echo "</br>"
		 echo "<div align='center'>Data Berhasil Ditambah<a href='../index_user.php'>Back</a></div>";
		 echo '<center>Terimakasih atas keluhannya</center>';
	}else{
		echo 'Data gagal di Add';
	}
}
?>	