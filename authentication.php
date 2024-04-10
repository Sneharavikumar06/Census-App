<?php
if(isset($_POST['login']))
{
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$con=mysqli_connect("localhost:3306","root","","project");
	$q="SELECT * FROM `register2` WHERE `username`='$name' AND `password`='$pass'";
	$r=mysqli_query($con,$q);
	$check=mysqli_num_rows($r);
	if($check>0)
	{
		header('location:index.html');
	}
	else
	{
		echo "<script>alert('password or username is incorrect');</script>";
		
	}
}
?>