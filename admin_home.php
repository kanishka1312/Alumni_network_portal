<?php

	include 'conn.php';
    $institute_data=mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM institute"),MYSQLI_ASSOC);
	$year_data= mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM expected_year"),MYSQLI_ASSOC);
  
        
 ?>
<html>
   <head>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
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
        <?php 
			 $result=mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM pass_out"),MYSQLI_ASSOC); 
			 ?>
			 <br>
			 <br>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Current Status</th>
				<th>Field of Expertise</th>
                <th>Update Field</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($result as $key) {
			echo "<tr>"; 
						$id=$key['Id'];
						$firstname=$key['First_name'];
						$lastname=$key['Last_name'];
						$email=$key['Email'];
						$gender=$key['Gender'];
						$status=$key['Current_status'];
						$field=$key['Field_of_Expertise'];
                        echo "<form action='update_pass_out.php' method='post'>";
						echo "<td><input class=form-control name=id type=text value=".$id." readonly></td>";	
						echo "<td><input class=form-control name=f_name type=text value=".$firstname."></td>";	
						echo "<td><input class=form-control name=l_name type=text value=".$lastname."></td>";	
						echo "<td><input class=form-control name=email type=text value=".$email."></td>";	
						echo "<td><input class=form-control name=gender type=text value=".$gender."></td>";	
						echo "<td><input class=form-control name=status type=text value=".$status."></td>";	
						echo "<td><input class=form-control name=field type=text value=".$field."></td>";	
                        echo "<td><input class='btn btn-primary' type=submit value=Update></td>";
                        echo "</form>";
                        
			echo "</tr>";
					}  ?>
			</tbody>
		</table>
                </div>
                </body>
                </html>