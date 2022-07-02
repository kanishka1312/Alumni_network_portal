<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  	
	<title></title>
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
	<div class="container">
	<br><br>
		<div class="row">

			<div class="col-sm-4" height=0px></div>
				<div class="col-sm-4"><h1 style="text-align: center;"> <span class="glyphicon glyphicon-user" style="padding: 15px;"></span>&nbsp;Admin</h1> <hr>
				</div>
		
		</div>

	<br>	
	<div class="row">
		<div class="col-sm-4" style="height: 0px"></div>


	
	<div class=col-sm-4>
		<form action="admin_check.php" method="post">
			<div class="form-group">
			    <label><i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;ID:</label><br>
			          <input type="text" name="ID" class="form-control" required><br>   
			    <label><i class="glyphicon glyphicon-lock"></i>&nbsp;&nbsp;Password:</label><br>
			          <input type="Password" name="Password" class="form-control"required><br>
			          <button type="submit" name="submit" class="btn btn-primary abc" value="submit"  >Next <i class=" glyphicon glyphicon-log-in"></i>
						</button>
			</div>   
		</form>

	</div>	
</div>
</div>
</body>
</html>
