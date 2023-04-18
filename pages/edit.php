	
<?php
session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../login.php?access_denied");
}

?><!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<!--bootstrap-->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/bootstrap.css" rel="stylesheet">
<!--bootstrap-->
<style type="text/css">

	.frm1 {
		border-style: solid;
		width: 700px;
		padding-top: 10px;
		padding-left: 30px;
		padding-bottom: 20px;
		margin: auto;
		border-color: rgb(60,179,113);
	}

</style>
<?php
include('koneksi.php');
$id = $_GET['id'];
$show = mysql_query("SELECT * FROM keluhan WHERE id_costumer='$id'");
if(mysql_num_rows($show) == 0){
		//echo '<script>window.history.back()</script>';
	
}else{
	$data = mysql_fetch_assoc($show);
}
?>
<?php 
require_once('menu.php');
?>
<body>
	<div>
		<center><h1>Form Keluhan</h1></center>
		<br><br>
		<form class="frm1" action="p_edit.php" method="post">
			<div class="input-group"><input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-group"><label>Costumer:</label><input type="text" name="costumer" value="<?php  echo $data ['costumer'];?>"></div>
				<div class="input-group">
					<label>Permasalahan :<label>
						<textarea name="permasalahan" rows="5" cols="70">
							<?php echo $data ['permasalahan']; ?></textarea></div>
							<div class="input-group"><label>Tanggal:</label><input type="date" name="tanggal" value="<?php echo $data ['tanggal']; ?>"></div>
							<div class="input-group">
								<label>Teknisi:</label>
								<select class="form-control" name="teknisi">
									<option></option>
									<option value="Alfif">Alfif</option>
									<option value="Galih">Galih</option>
								</select>
							</div>	
							<div class="input-group">
								<label>Status:</label>
								<select class="form-control" name="status">
									<option></option>
									<option value="On Doing">On Doing</option>
									<option value="Finish">Finish</option>
								</select>
								<?php
								if(isset($_POST['edit'])){
										$selected_val = $_POST['status'];  // Storing Selected Value In Variable
										//echo "You have selected :" .$selected_val;  // Displaying Selected Value
									}
									?>
								</div>	
								<center><input type="submit" class="btn btn-success" name="edit" value="Edit"></center>		
							</form>	
							<?php
							if(isset($_POST['edit'])){
							$selected_val = $_POST['status'];  // Storing Selected Value In Variable
							//echo "You have selected :" .$selected_val;  // Displaying Selected Value
						}
						?>
					</div>
					<div class="container">
						<nav class="navbar navbar-default navbar-fixed-bottom"><p
							style="text-align:center; margin-top: 10px";><i class="fa fa-copyright " aria-hidden="true">Copyright RMS</p></i></nav>
						</div>
						<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
						<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
					</body>
					</html>