<?php 
    //INSERT INTO `institute`(`ins_name`) select `Institute` FROM `admin`
    //INSERT INTO `expected_year`(`yr_name`) select DISTINCT `Passing_Year` FROM `pass_out`
	include 'conn.php';
    if(@$_POST['submit']){
        $id=$_POST['ID'];
        $password=$_POST['Password'];
        $result=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM admin_cred WHERE Id='$id' AND Password='$password'"));
        if($result==1){
          echo "login successful";
        //   session_start();
        //   $_SESSION['email']=$id;
          header("location: admin_home.php");
        }
        else{
          echo "login failed";
        }

    }

 ?>
