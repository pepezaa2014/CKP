<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form method="post" action="scan.php" onload="document.forms['check.php'].submit()">
<?php
include('connection.php');
$check=$_POST['cardcheck'];
$sql = "SELECT * FROM `scan` WHERE `CardID` = '$check'";
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d");
$time = date("H:i:s");
$result = $conn->query($sql);
$data = mysqli_fetch_array($result);
$ze=0;
$token=$data['Token'];
$token++;

if (($token>=3) && ($ze!=$token%2)) {
	$out=1;
}
else if (($token>=3) && ($ze==$token%2)) {
	$out=2;
}


if ($token==0) {
	$status="ไม่มาโรงเรียน";
}
else if ($token==1) {
	$status="อยู่ในโรงเรียน";
}
else if ($token==2) {
	$status="ออกจากโรงเรียน";
}


if ($out==1) {
	$status="อยู่ในโรงเรียน";
}
else if ($out==2) {
	$status="ออกจากโรงเรียน";
}




$sentTime = "UPDATE `scan` SET `Time` = '$time', `Status`='$status', `Token`='$token', `Outsc`='$out'  WHERE `scan`.`CardID` = '$check'";
$sending = $conn->query($sentTime);
// $sentdata = "SELECT * FROM `scan` WHERE `CardID` = '.$check.'";

if ($result->num_rows == 1) {
			$port = fopen("COM8", "w+");
			fwrite($port, "n");
			fclose($port);
		header('location:scan.php');

		}
		else
		{
		header('location:scan.php');
		}


// header('location:scan.php');
 ?>
 <input type="submit" name="">
</form>

  </body>
</html>