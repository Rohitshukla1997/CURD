<?php 
$id=$_GET['id'];
$con=new mysqli("localhost","root","","php");
$query="SELECT * FROM users WHERE id='$id'";
$result=$con->query($query);
$data=$result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="post" action="update.php">
	<input type="hidden" name="id" value="<?php echo $data['id'];?>"> 
	 <p> Name: <input type="text" name="name" value="<?php echo $data['name'];?>"> </p>
	 <p>Email: <input type="email" name="email" value="<?php echo $data['email'];?>"></p>
    <input type="submit" name="update" value="Update">
</form>
</form>
</body>
</html>