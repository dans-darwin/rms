<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("pages/koneksi.php");
?>
<html lang="en">
<head>
	<title>Login</title>
</head>
<body>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css">
	<h1>Welcome To RMS</h1>
	<div class="frm" align="center">
	<form method="post" action="p_login.php">
		<div class="form-group"><input type="text" class="form-control" name="username" value="" placeholder="Username or Email"></div>
		<br>
		<div class="form-group"><input type="password" class="form-control" name="password" value="" placeholder="Password"></div>
		<br>
		<div align="center">
		<p>Belum Punya Akun ?<a href="daftar.php">Ayo Daftar!</a></p>
		</div>
		<br>
		<div><input type="submit" class="btn btn-danger" name="login" value="Login"></div>
	</form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html> 