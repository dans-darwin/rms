<?php
session_start();
if(!isset($_SESSION['username'])) {
   header("Location: ../login.php?access_denied");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Finish</title>
</head>
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/bootstrap.css" rel="stylesheet">

<body>
	<?php include('menu.php'); ?>
	<?php

	include("koneksi.php");
	include("pagination.php");

	$sql =  "SELECT * FROM keluhan WHERE status='Finish'";
	$result = mysql_query($sql);
		//pagination config start
        	$rpp = 2; // jumlah record per halaman
        	$reload = "finish.php?pagination=true";
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
        								<?php echo '<td><a href="delete.php?id='.$data['id_costumer'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>'; ?>
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
        <div class="container-fluid"></div>
        <script type="text/javascript" src="../assets/js/jquery.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>