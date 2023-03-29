<?php
$id=$_GET['id'];
$con=new mysqli("localhost","root","","php");
$query="DELETE FROM users WHERE id ='$id'";
if($con->query($query))
{
	header('location:viewport.php');
}
else
{
	echo mysquli_error($con);
}

  ?>