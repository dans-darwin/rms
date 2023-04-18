<?php
if(isset($_POST['edit'])){
	include('koneksi.php');
	$id				= $_POST['id'];	
	$costumer		= $_POST['costumer'];	
	$permasalahan	= $_POST['permasalahan'];		
	$tanggal		= $_POST['tanggal'];
	$teknisi 		= $_POST['teknisi'];
	$status 		= $_POST['status'];	

	$update = mysql_query("UPDATE keluhan SET id_costumer='$id', costumer='$costumer', permasalahan='$permasalahan', tanggal='$tanggal', teknisi='$teknisi', status='$status' WHERE id_costumer='$id'") or die(mysql_error());
	
	if($update){
		//echo 'Data berhasil update! ';
		header("location:../index.php");
	}else{
		//echo '<a href="edit.php?id='.$id.'">Kembali</a>';	
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>