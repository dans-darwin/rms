<?php

session_start();
if(!isset($_SESSION['username'])) {
   header("Location: login.php?access_denied");
}
include 'pages/koneksi.php';

if (isset($_SESSION['level']) && isset($_SESSION['username']))
{


   if($_SESSION['level'] == "user")
   {
       //echo "<p>Selamat datang di halaman tiga wahai user : ".$_SESSION['username']."</p>";
   }
}
else
{
   echo "<h1>Nah.. Anda pasti mencoba akses halaman ini tanpa login ya?</h1>";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Index User</title>
</head>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/fonts/css/font-awesome.css" rel="stylesheet">

<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">

<body>
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
     <a class="navbar-brand" href="index_user.php">RMS</a>
 </div>

 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="index_user.php"><i class="fa fa-home" aria-hidden="true">Home</a></li></i>
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o" aria-hidden="true"> <span class="caret"></span></a></i>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"> <?php echo $_SESSION['username'] ?></a></li></i>
        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"> Logout</a></li></i>
    </ul>
</li> 
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> 
<div>
    <p style="text-align: center; color: #73AD21; font-size: 30px; margin-top: 100px;">Welcome To RMS</p>
    <h1 style="text-align: center; color:black;">Ada masalah dengan Aplikasi/Website anda . Kami siap membantu mengatasi permasalahan pada Aplikasi/Website anda.</h1>
</br>
<p style="text-align: center;"><a href="pages/add.php" class="btn btn-success btn-md" role="button"><i class="fa fa-plus-circle fa-2x" aria-hidden="true">Add Problem</a></p></i>
</div>
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-bottom"><p
        style="text-align:center; margin-top: 10px";><i class="fa fa-copyright" aria-hidden="true">Copyright RMS</p></i></nav>
    </div>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>
