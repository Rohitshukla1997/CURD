<?php  
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$con=new mysqli("localhost","root","","php");
	$query="INSERT INTO users VALUES(NULL,'$name','$email')";
	if($con->query($query))
	{
	header('location:viewport.php');
	} 
	else
	{
		echo mysqli_error($con);
	}	
?>