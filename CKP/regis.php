<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link href="favicon1.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="styles scan check.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
include('connection.php');
	?>
</head>

<body bgcolor="#FFDEAD">
	<div class="topnav" id="myTopnav">
  <a href="first.php" class="active">หน้าหลัก</a>
  <a href="regis.php">ลงทะเบียนผู้ใช้งาน</a>
  <a href="scan.php">สแกนบัตร</a>
    <a href="ad.php">สำหรับเจ้าหน้าที่</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="box2">
	<h2>ลงทะเบียนผู้ใช้งาน</h2>
	<form method="post" action="insert.php">
		<div class="inputBox">
			<input type="text" name="name" required="" autofocus>
			<label>ชื่อ</label>
		</div>
		<div class="inputBox">
			<input type="text" name="license" required="">
			<label>ทะเบียนรถ</label>
		</div>
		<div class="inputBox">
			<input type="text" name="numcard" required="">
			<label>รหัสในบัตรนักเรียน</label>
		</div>
		<br><center><input type="submit" name="" value="ยืนยัน"></center>
	</form>
</div>

</body>
</html>