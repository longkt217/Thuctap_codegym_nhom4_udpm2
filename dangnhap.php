<?php session_start();?>
<html>
<head>
<title>Đăng nhập</title>
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
		       <h1>Đăng nhập hệ thống</h1>
				<div class="header-bottom">
				<div class="header-right w3agile">
				<div class="header-left-bottom agileinfo">	
					 <form method="post">
						<input type="text"  value="User name" name="txttdn" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
						<input type="password"  value="Password" name="txtmk" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'password';}"/>
						 <input type="submit" name="ok" value="Đăng nhập" />						 					
							<!--Quen Mat Khau-->
						 <div class="forgot">
						 	<h6><a href="#">Quên mật khẩu?</a></h6>						 	
						 </div>
						<div class="clear"> </div>
					  </div>
					</form>	
<!--header end here-->
<!--PHP-->
	<div align="center">
<?php
	include('config.php');
	if (isset($_POST["ok"]))
	{
		$email=$_POST['txttdn'];
		$pass=$_POST['txtmk'];
		if(empty($email) || empty($pass)) echo "<font color=White size=+3>Chưa nhập đủ dữ liệu!</font> ";
		else
			{
				$sql="select * from dangnhap where email='$email'";
				$run=mysqli_query($conn,$sql);
				$num=mysqli_num_rows($run);
				$row=mysqli_fetch_array($run);
				if($row['email']=='admin@admin.com')
				{
					$_SESSION['email']='admin@admin.com'; 
					header('location:listsanpham.php');	
				}
				else
				{
				if($num>=1)
				{
					$_SESSION['email']=$email;			
					$pw=$row['pass'];
					if($pass=$pw) header('location:webuser.php');
					else echo "<font color=White size=+3>Sai mật khẩu</font>"; 					
				}
				else echo "<font color=White size=+3>Sai tài khoản</font>";
			}
	} }
?>	
</div>
</body>
</html>