<?php
include('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Đăng ký</title>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>Đăng ký hệ thống</h1>
				<div class="header-bottom">
				<div class="header-right w3agile">
				<div class="header-left-bottom agileinfo">	
 <div>
	 <!--Form dang ky-->
    	<form method="post">
					<div>.</div>
					<div class="text2">Tên khách hàng</div>
					<div class="textbox"><input type="textbox" name="txtten" /></div>
					<div class="text2">Giới tính</div>
					<div class="radio">
						<input type="radio" name="txtgt" value="Nam" checked="checked" /> Nam
						<input type="radio" name="txtgt" value="Nữ" /> Nữ
					</div>					
					 <div class="text2">Số điện thoại</div>
					 <div class="textbox"><input type="textbox" name="txtdt" /></div>
					 <div class="text2">Email</div>
					 <div class="textbox"><input type="textbox" name="txtemail" /></div>
					 <div class="text2">Password</div>
					 <div class="textbox"><input type="password" name="txtpass" /></div>
					 <div class="text2">Sở thích</div>
					 <div class="checkbox">
						<input type="checkbox" name="txtst[]" value="Game" checked="checked"/>Game
						<input type="checkbox" name="txtst[]" value="Music" />Music
					 </div>
					 <div class="checkbox">
						<input type="checkbox" name="txtst[]" value="Phim" />Phim
						<input type="checkbox" name="txtst[]" value="Hát" />Hát
					 </div>
						<input type="submit" name="ok" value="Đăng ký" />						
					</form>
				<div>
			<!--Quen Mat Khau-->
						 <div class="forgot">
						 	<h6><a href="#">Quên mật khẩu?</a></h6>
						 </div>
						<div class="clear"> </div>
					</form>	
<!--PHP-->
<div align="center">
<?php

	include('config.php');
	if (isset($_POST["ok"]))
	{
		$ten=$_POST['txtten'];
		$gioitinh=$_POST['txtgt'];
		$quequan=$_POST['txtquequan'];
		$dienthoai=$_POST['txtdt'];
		$email=$_POST['txtemail'];
		$pass=$_POST['txtpass'];
		$sothich=$_POST['txtst'];
		$luust="";
		foreach($sothich as $i)
		{$luust .=$i; }
		if (($pass=="")||($dienthoai=="")||($email=="")) echo "<font color=RED size=+3>Chưa nhập đủ dữ liệu!</font> ";
		else 
		$sql="insert into dangky ( name, gender, address, phone, email, pass, hobby) values ('$ten','$gioitinh','$quequan','$dienthoai','$email','$pass','$luust') ";
		{$sql_kt="select * from dangky where email='$email'";
		$kt=mysqli_query($conn, $sql_kt);
		if(mysqli_num_rows($kt) > 0) echo "<font color=White size=+3>Tài khoản đã tồn tại</font>";
		else{		
		$sql_dn="insert into dangnhap (email, pass) values ('$email','$pass')";
		$run_dn=mysqli_query($conn,$sql_dn);
		$run=mysqli_query($conn,$sql);	
		
		if ($run) echo header('location:dangnhap.php');
		else echo "<font color=White size=+3>Đăng ký thất bại!</font>";
		}
	}	
	}
?>
</div>			
</body>
</html>