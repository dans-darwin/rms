<?php
session_start();
if(!isset($_SESSION['username'])) {
   header("Location: login.php?access_denied");
}
if($_SESSION['username'] == "user"){
    header("Location: index_user.php?access_denied");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/fonts/css/font-awesome.css" rel="stylesheet">
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
           <a class="navbar-brand" href="index.php">RMS</a>
       </div>

       <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php"><i class="fa fa-home" aria-hidden="true">Home</a></li></i>
           <li><a href="pages/ondoing.php"><i class="fa fa-files-o" aria-hidden="true">On Doing</a></li></i>
           <li><a href="pages/finish.php"><i class="fa fa-flag-checkered" aria-hidden="true">Finish</a></li></i>
           <li><a href="index_user.php"><i class="fa fa-eye" aria-hidden="true">Lihat Website</span></a></li></i>
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
&nbsp
<?php
include("pages/koneksi.php");
include("pages/pagination.php");

$sql =  "SELECT * FROM keluhan WHERE status='-'";
$result = mysql_query($sql);
			 //pagination config start
        	$rpp = 3; // jumlah record per halaman
        	$reload = "index.php?pagination=true";
        	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
        	if($page<=0) $page = 1;  
        	$tcount = mysql_num_rows($result);
        	$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        	$count = 0;
        	$i = ($page-1)*$rpp;
        	$no_urut = ($page-1)*$rpp;
        	//pagination config end
        	?>
        	<div class="container" style="margin-top: 50px">
        		<div class="panel panel-success	">
        			<div class="panel-heading">Data Keluhan</div>
        			<div class="panel-body">
        				<table class="table table-condensed">
        					<thead>
        						<tr>
        							<th>Costumer</th>
        							<th>Permasalahan</th>
        							<th>Tanggal</th>
        							<th>Status</th>
        							<th>Teknisi</th>
        							<th>Action</th>

        						</tr>
        					</thead>
        					<tbody>
        						<?php
        						while(($count<$rpp) && ($i<$tcount)) {
        							mysql_data_seek($result,$i);
        							$data = mysql_fetch_array($result);
        							?>
        							<tr>
        								<?php echo '<td>'.$data['costumer'].'</td>'; ?>
        								<?php echo '<td>'.$data['permasalahan'].'</td>'; ?>	
        								<?php echo '<td>'.$data['tanggal'].'</td>'; ?>
        								<?php echo '<td>'.$data['teknisi'].'</td>'; ?>
        								<?php echo '<td>'.$data['status'].'</td>'; ?>
        								<?php echo '<td><a href="pages/edit.php?id='.$data['id_costumer'].'">Edit</a>|<a href="pages/delete.php?id='.$data['id_costumer'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>'; ?>
        							</tr>
        							<?php
        							$i++; 
        							$count++;
        						}
        						?>
        					</tbody>
        				</table>
        				<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
        			</div>
        		</div>
        	</div>
        	<div class="container">
                <nav class="navbar navbar-default navbar-fixed-bottom"><p
                    style="text-align:center; margin-top: 10px";><i class="fa fa-copyright" aria-hidden="true">Copyright RMS</p></i>
                </nav>
            </div>
            <script src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        </body>
        </html>	