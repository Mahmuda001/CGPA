<?php
 include("config/connect.php");

if(isset($_POST['submit'])){
	
	$c_title = $_POST['c_title'];
	$c_credit = $_POST['c_credit'];
	$c_code = $_POST['c_code'];

	
	if($c_title =='' or $c_credit =='' or $c_code ==''){
		
		echo "<script>alert('Any of the fields is empty')</script>";
		echo "<script>window.open('home.php','_self')</script>";
		exit();
	}
	else{
		
		$query = "INSERT INTO `course`(`c_name`, `c_credit`, `c_code`) VALUES ('$c_title','$c_credit','$c_code')";
		
	
	$store = mysqli_query($con,$query);

	if($store){
		echo "<script>alert('Course information submitted')</script>";
		echo "<script>window.open('home.php','_self')</script>";
		
	}
	else{
		
		echo "Check Something is create a problem!";
	}
}
}
?>