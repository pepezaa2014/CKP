<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
include('connection.php');
$sql = "SELECT * FROM `sacn`";
$result = $conn->query($sql);
$data = mysqli_fetch_array($result);

$sentTime = "UPDATE `scan` SET `Time` = '00:00:00', `Status`='ไม่มาโรงเรียน',`Token` = '0',`Parking` = '',`ParkNo` = '',`Outsc` = '0'";
$sending = $conn->query($sentTime);
header('Location:first.php');
 ?>
</body>
</html>