<?php
	if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT id_costumer FROM keluhan WHERE id_costumer='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM keluhan WHERE id_costumer='$id'");
		if($del){
			header("location:../index.php");
			//echo 'Data siswa berhasil di hapus! ';			
		}else{
			
			echo 'Gagal menghapus data! ';
			echo '<a href="index.php"></a>';	

		}
	}
}	
?>		