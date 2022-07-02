<?php
	$title="Alumni Portal";
?>

<!DOCTYPE html>
 <html>
 <head>
	 <style>
	 .font-custom-class{
		 font-size: 20px;
	 }
	 .font-custom-body-class{
		font-size: 14px;
	 }
	 
	.footer {
		left: 0;
		bottom: 0;
		width: 100%;
		background-color: 'lightgray';
		color: black;
		text-align: center;
	}

    </style>
 	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
 	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 	<meta name="viewport" content="width=device-width, initial-scale=1"> 
 </head>
	 <body>
	 	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand">Alumni Portal</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="front.php">Home</a></li>
                <li class="active"><a href="about.php">About Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-list"></i> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="admin.php">Admin</a></li>
						<li><a href="user.php">User</a></li>
                        <li><a href="front.php">Exit</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-id" data-slide-to="0" class=""></li>
		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
		<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
	</ol>

	<div class="carousel-inner">
		<div class="item">
			<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="img.jpg" width="100%" style="height: 450px !important;">
			<div class="container">
				<div class="carousel-caption">
					<h1>JIIT Noida</h1>
					<p><a class="btn btn-lg btn-primary" href="https://www.jiit.ac.in/" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="img2.jpg" width="100%" style="height: 450px !important;">
			<div class="container">
				<div class="carousel-caption">
					<h1>JIIT Solan</h1>
					<p><a class="btn btn-lg btn-primary" href="https://www.juit.ac.in/" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
		<div class="item active">
			<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="img4.jpg" width="100%" style="height: 450px !important;">
			<div class="container">
				<div class="carousel-caption">
					<h1>Amity University Noida</h1>
					<p><a class="btn btn-lg btn-primary" href="https://www.amity.edu/" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
 	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			<div class="panel panel-default" onclick="location.href='user.php'">
					<div class="panel-heading font-custom-class"><b>User</b></div>
					<div class="panel-body font-custom-body-class">Here any user can access the pass out trainees of the particular institute and with the particular passing year. </div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default" onclick="location.href='admin.php'">
					<div class="panel-heading font-custom-class"><b>Admin</b></div>
					<div class="panel-body font-custom-body-class">Here admin of institute can access the record of the trainees and can modify or update the details in the main database.</div>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default" onclick="location.href='about.php'">
					<div class="panel-heading font-custom-class"><b>About Us</b></div>
					<div class="panel-body font-custom-body-class">Here you can find out the contact details of the pass out trainees from different institute.<br>To know more click on the panel.</div>
				</div>
			</div>
		</div>
	</div>




	
<br><br><br>
<div class="footer">
  <p>&copy; Copyright &nbsp;All Rights Reserved</p>
</div>
	 