<!DOCTYPE html>
<html>
<head>
	<title>Admin ♥</title>
	<link rel="stylesheet" type="text/css" href="styles admin.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

<div style="top: 9.8%; left: 35%;">
	<img src="support.png" width="80px" height="80px">
</div>

<!-- <div style="margin-top: -5.5%; margin-left: 60%;"> -->
	<img src="admin.png" width="80px" height="80px">
<!-- </div> -->

	<div class="box">
		<div class="box3" style="font-size: 30px; ">
			<b><center>Admin</center></b>
		</div>
	<form method="POST" action="ad2.php">
			<div class="inputBox">
			<input type="text" name="user" required="" autofocus>
			<label>User</label>
		</div>
			<div class="inputBox">
			<input type="password" name="pass" required="">
			<label>Password</label>
		</div>
		<center><input type="submit" name="" value="ยืนยัน"></center>
	</form>
	</div>


	<div class="pic"></div>
</body>
</html>