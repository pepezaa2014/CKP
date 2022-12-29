<!DOCTYPE html>
<html>
<head>
	<title>CKW-Parking</title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="fist st.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body, html {
  			height: 100%;
 			margin: 0;
		}
	</style>
  <?php
  include('connection.php');
  ?>
</head>

<body>
	<div class="topnav" id="myTopnav">
  <a href="" class="active">หน้าหลัก</a>
  <a href="regis.php">ลงทะเบียนผู้ใช้งาน</a>
  <a href="scan.php">สแกนบัตร</a>
  <a href="ad.php">สำหรับเจ้าหน้าที่</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<?php 

// $sql = "SELECT * FROM `scan` ORDER BY ID asc";
// $result = mysqli_query($conn, $query); 

$query = "SELECT * FROM scan ORDER BY ID asc" or die("Error:" . mysqli_error()); 
$result = mysqli_query($conn, $query); 

$dcome=0;
$all=0;
$come=0;
while($row = mysqli_fetch_array($result)) { 
  $all++;
  if ($row['Status'] == "ไม่มาโรงเรียน") {
    $dcome++;
  }
}
$come = $all-$dcome;
// $sentTime = "UPDATE `scan` SET `Time` = '00:00:00', `Status`='ไม่มาโรงเรียน',`Token` = '0',`Parking` = '',`ParkNo` = '',`Outsc` = '0'";
// $sending = $conn->query($sentTime);
 ?>


<div style="width:80%;">
<div id="chart_div" style="position:absolute;width:900px;height:400px; margin: 150px 0 0 40px;"></div>  
</div>
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>   
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
    // สร้างตัวแปร array เก็บค่า ข้อมูล
    var dataArray1=[
      ['วัน', 'จำนวนนักเรียนที่ลงทะเบียน', 'จำนวนนักเรียนที่ไม่มาโรงเรียน', 'จำนวนนักเรียนที่มาโรงเรียน', 'จำนวนนักเรียนที่กลับบ้าน'],
      ['วันนี้',  4,      2,      1,      1]            
    ];
         
    // แปลงข้อมูลจาก array สำหรับใช้ในการสร้าง กราฟ
    var data = google.visualization.arrayToDataTable(dataArray1);
 
    // ตั้งค่าต่างๆ ของกราฟ
    var options = { 
        title: "จำนวนนักเรียนที่นำรถมาโรงเรียนเชียงคำวิทยาคม",
        width: 650,
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: 'right', maxLines: 3 },
        tooltip: { trigger: 'select' }
    };
 
    // สร้างกราฟแนวตั้ง แสดงใน div id = chart_div
    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(data, options); // สร้างกราฟ
     
}
</script>

  <div class="parallax">
</div>




<div class="box" style="margin-left: 20%;">
  <div class="box3" style="font-size: 30px;"><b><center>CKW-Parking</center></b></div>
  <div style="color: white; font-size: 18px">
    &nbsp;&nbsp; ระบบการจัดการลานรถในโรงเรียนเเชียงคำวิทยาคม จัดทำขึ้นเพื่อระบบรักษาความปลอดภัยในโรงรถ โรงเรียนเชียงคำวิทยาคม ที่มีชื่อว่า “ระบบจัดการลานจอดรถ” เพื่อแก้ไขปัญหาภายในโรงรถ โรงเรียนเชียงคำวิทยาคม
</div>

</body>
</html>