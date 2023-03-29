<?php
 $con=new mysqli("localhost","root","","php");
 $query="SELECT * FROM users";
 $result=$con->query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<table border="5px solid black">

	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td> Action</td>
	</tr>
<?php
$num=1;
while($data=$result->fetch_assoc()) 
{
		echo "<tr>";
		echo "<td>".$num++."</td>";
		echo "<td>".$data['name']."</td>";
		echo "<td>".$data['email']."</td>";
		echo "<td><a href =delete.php?id=".$data['id']."> Delete</a></td>";
		echo "<td> <a href=edit.php?id=".$data['id']."> Edit</a></td>";
		echo "</tr>";
}
?>
</table>
</body>
</html>
