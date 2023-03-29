<?php 
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$con=new mysqli("localhost","root","","php");
$query="UPDATE users SET name='$name', email='$email' WHERE id='$id'";
if($con->query($query))
{
	header('location:viewport.php');
}
else
{
	echo mysqli_error($con);
}


 ?>