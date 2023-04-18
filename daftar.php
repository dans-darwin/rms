<?php
session_start();
if(isset($_SESSION['username'])) {
 header('location:index.php'); }
 ?>
 <link href="assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="style.css" rel="stylesheet" type="text/css">
 <h1>Welcome To RMS</h1>
 <title>Form Pendaftaran</title>
 <div align='center'>
  <form action="p_daftar.php" method="post">
    <table>
      <h2 style="text-align: center; margin-bottom: 30px; margin-top: 30px;">Daftar Baru</h2>
      <div class="login-box">
        <form role="form" method="POST" action="p_daftar.php">
          <div class="form-group">
            <label class="text-center">Username</label>
            <input type="text" value="" name="username" class="form-control" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label class="text-center">Password</label>
            <input type="password" value="" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div align="center">
          <p>Sudah Punya Akun ?<a href="login.php">Sign In</a></p>
          </div>
          <center>
            <button type="submit" name="simpan" class="btn btn-success">Daftar</button><span><button style="margin-left: 20px;" type="reset" name="simpan" class="btn btn-danger">Reset</button></span>
          </center>
        </form>
      </div>
    </div>
  </table>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
