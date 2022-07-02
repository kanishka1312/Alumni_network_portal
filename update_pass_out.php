<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
  	
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<?php
include 'conn.php';

$id=$_POST['id'];
$first=$_POST['f_name'];
$last=$_POST['l_name'];
$email=$_POST['email'];
$status=$_POST['status'];
$field=$_POST['field'];
$result=mysqli_query($conn,"UPDATE pass_out SET First_name='$first',Last_name='$last',Email='$email',Current_status='$status',Field_of_Expertise='$field' WHERE Id='$id'");
echo "Successfully Updated !!";

?>
&nbsp;&nbsp;<a href=admin_home.php class="btn btn-success">Go Back</a>