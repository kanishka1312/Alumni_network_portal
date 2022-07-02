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
            <div class="col-sm-4">
               <h3 style="text-align: center;"> 
                  <span  style="padding: 10px;">
                  </span>&nbsp;Search For Alumni
               </h3>
               <hr>
            </div>
         </div>
         <br>	
         <div class="row">
            <!-- <div class="col-sm-4" style="height: 0px"></div> -->
			<form method="post" id="form_reg" action="user.php">
				<div class="form-group">
					<div class=col-sm-4>
						<label><i class="glyphicon glyphicon-list-alt"></i>&nbsp;&nbsp;Institute:</label><br>
						<select class="form-control" name="institute" id="institute">
						<?php foreach ($institute_data as $key) {
							$institute=$key['ins_name'];
							echo "<option>".$institute."</option>";	
						}  ?>

                     </select>
					 </div>
					 <div class="col-sm-4">
                     <label><i class="glyphicon glyphicon-calendar"></i>&nbsp;&nbsp;Passing Year:</label><br>

                     <select class="form-control" name="year" id="year">
					 <?php foreach ($year_data as $key) {
						$year=$key['yr_name'];
						echo "<option>".$year."</option>";	
					}  ?>
                     </select>
				    </div>
					<div class="col-sm-4">
						<br>
                    	<input type="submit" name="submit" class="btn btn-primary hov" value="Next"  > 
					</div>

               </form>
            </div>
         </div>
		 <?php if(isset($_POST['submit'])){
			 $query_ins=$_POST['institute'];
			 $query_year=$_POST['year'];
			 $result=mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM pass_out WHERE Institute LIKE '%$query_ins%' AND Passing_Year LIKE '%$query_year%'"),MYSQLI_ASSOC); 
			 ?>
			 <BR>
			 <BR>
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

						echo "<td>".$id."</td>";	
						echo "<td>".$firstname."</td>";	
						echo "<td>".$lastname."</td>";	
						echo "<td>".$email."</td>";	
						echo "<td>".$gender."</td>";	
						echo "<td>".$status."</td>";	
						echo "<td>".$field."</td>";	
			echo "</tr>";
					}  ?>
			</tbody>
		</table>
		<?php } ?>
      </div>
   </body>
</html>