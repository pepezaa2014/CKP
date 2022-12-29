<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('connection.php');
$user=$_POST['user'];
$pass=$_POST['pass'];

$sql = "SELECT * FROM `admin` WHERE `user` = '$user' and `pass` = '$pass'";
$result = $conn->query($sql);
$data = mysqli_fetch_array($result);


if ($result->num_rows == 1) {
		header('Location:ad3.php');
		}
		else
		{
		header('Location:err.php');			
		}
  ?>
</body>
</html>