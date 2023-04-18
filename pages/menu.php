<title></title>
</head>
<link href="./assets/css/bootstrap.min.css" rel="stylesheet">
<link href="./assets/css/bootstrap.css" rel="stylesheet">
<link href="../assets/fonts/css/font-awesome.css" rel="stylesheet">
<link href="../style.css" rel="stylesheet" type="text/css">

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
				<a class="navbar-brand" href="../index.php">RMS</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../index.php"><i class="fa fa-home" aria-hidden="true">Home</i></a></li>
					<li><a href="ondoing.php"><i class="fa fa-files-o" aria-hidden="true">On Doing</i></a></li>
					<li><a href="finish.php"><i class="fa fa-flag-checkered" aria-hidden="true">Finish</i></a></li>
					<li><a href="../index_user.php"><i class="fa fa-eye" aria-hidden="true">Lihat Website</i></a></li>
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
	
	<script src="./assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>	