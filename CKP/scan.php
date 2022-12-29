<!DOCTYPE html>
<html>
<head>
	<title>Scancard</title>
	<link rel="stylesheet" type="text/css" href="styles scan check.css">
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

<div class="box">
<h2><b>Scancard</b></h2>
	<form method="post" action="check.php">
	<div class="inputBox">
	<input type="text" name="cardcheck" required="" autofocus="">
	<label>Scancard</label>
	<input type="submit" value="" hidden>
	</div>
	</form>


</div>
</body>
</html>