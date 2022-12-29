<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	include('connection.php');
	?>
</head>
<body>

	<?php
$name= $_POST['name'];
$license= $_POST['license'];
$card= $_POST['numcard'];
// $date = date("Y-m-d");
// $time = date("H:i:s"); 
$sql = "SELECT * FROM `sd`";
$sentdata = "INSERT INTO `scan` (`ID`, `Name`, `CardID`, `Status`, `Time`, `License`, `Token`) VALUES (NULL, '$name', '$card', 'ไม่มา', '', '$license', '0')";
$sending = $conn->query($sentdata);	
header("location:regis.php");
	?>

</body>
</html>

<!-- INSERT INTO `scan` (`ID`, `Name`, `CardID`, `Status`, `Time`, `License`, `Token`) VALUES (NULL, '', '', '', '', '', '') -->