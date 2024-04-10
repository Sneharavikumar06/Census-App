<?php
if(isset($_POST['insert']))
    {
      
$username = $_POST['username'];
$aadharno  = $_POST['aadharno'];
$password = $_POST['password'];
$con=mysqli_connect("localhost:3306","root","","project");
	$dis="INSERT INTO `register2`(`username`, `aadharno`, `password`) VALUES ('$username','$aadharno','$password')";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Inserted added successfully')</script>";
	}
	else{
		echo "<script>alert('Please enter all details')</script>";
	}
}
?>


