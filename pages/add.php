<?php
session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../login.php?access_denied");
}
?>
<html>
<head>
	<title>Add</title>
</head>
<!--bootstrap-->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/fonts/css/font-awesome.css" rel="stylesheet">
<link href="../assets/css/bootstrap.css" rel="stylesheet">
<link href="../style.css" rel="stylesheet" type="text/css">
<!--bootstrap-->
<style type="text/css">

	.frm1 {
		border-style: solid;
		width: 700px;
		padding-top: 20px;
		padding-left: 30px;
		padding-bottom: 20px;
		margin: auto;
		border-color:#98FB98;
	}
	
</style>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">RMS</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../index_user.php"><i class="fa fa-home" aria-hidden="true">Home</i></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o" aria-hidden="true"> <span class="caret"></span></a></i>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"> <?php echo $_SESSION['username'] ?></a></li></i>
						<li><a href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"> Logout</a></li></i>
					</ul>
				</li> 
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav> 
<body>
	<div>
		<center><h1>Form Keluhan</h1></center>
		<form class="frm1" action="p_add.php" method="POST">
			<div class="input-group">Costumer:<input type="text" name="costumer"></div>
			<div class="input-group">Permasalahan:
				<textarea name="permasalahan" rows="5" cols="80">
				</textarea></div>
				<br>
				<div class="input-group">Tanggal:<input type="date" name="tanggal"></div>
				<div class="input-group">
					<label>Teknisi:</label>
					<select class="form-control" name="teknisi">
						<option></option>
						<option value="-">-</option>
					</select>
					<?php
					if(isset($_POST['add'])){
					$selected_val = $_POST['teknisi'];  // Storing Selected Value In Variable
					//echo "You have selected :" .$selected_val;  // Displaying Selected Value
				}
				?>
			</div>	
			<div class="input-group">
				<label>Status:</label>
				<select class="form-control" name="status">
					<option></option>
					<option value="-">-</option>
				</select>
				<?php
				if(isset($_POST['add'])){
					$selected_val = $_POST['status'];  // Storing Selected Value In Variable
					//echo "You have selected :" .$selected_val;  // Displaying Selected Value
				}
				?>
			</div>	
			<center><input type="submit" class="btn btn-success" name="add" value="Add"></center>	
		</form>
	</div>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-bottom"><p
		style="text-align:center; margin-top: 10px";><i class="fa fa-copyright" aria-hidden="true">Copyright RMS</p></i></nav>
		</div>
		<script type="text/javascript" src="../assets/js/jquery.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

	</body>
	</html>
