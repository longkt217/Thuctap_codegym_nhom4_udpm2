<?php
include('config.php');
$layma=$_GET['name'];
$sqlselect="select * from sanpham where code='$layma'";
$runselect=mysqli_query($conn,$sqlselect);
$rowselect=mysqli_fetch_array($runselect);
?>
<html>
<head>
<title>Sửa sản phẩm</title>
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
		       <h1>Cập nhật sản phẩm :</h1>
				<div class="header-bottom">
				<div class="header-right w3agile">
				<div class="header-left-bottom agileinfo">	
					 <form action="#" method="post">
						<input type="text"  value="<?php echo $rowselect['name']?>" name="txtten" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>                    
                        <input type="text"  value="<?php echo $rowselect['money']?>" name="txtm" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>                 
                        <input type="file"  value="<?php echo $rowselect['picture']?>" name="txtp" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>                                             
						 <input type="submit" name="ok" value="Cập nhật" />
 </form>
 </div>
 <div class="copyright">
	<p>© 2020 Sếu UDPM2. All rights reserved | Design by  <a href="#" target="_blank"> Long </a></p>
</div>
 <div align="center">
<?php
	
	if (isset($_POST["ok"]))
	{
		if(empty($_POST['txtten'])) echo "<font color=RED size=+3>Chưa nhập dữ liệu</font>";
		else {
			$sql="update sanpham set name= '".$_POST['txtten']."' where code='$layma'";
			$run=mysqli_query($conn,$sql);
			$sql_m="update sanpham set money= '".$_POST['txtm']."' where code='$layma'";
			$run=mysqli_query($conn,$sql_m);
			$sql_p="update sanpham set picture= '".$_POST['txtp']."' where code='$layma'";
			$run=mysqli_query($conn,$sql_p);

			if ($run) header('location:listsanpham.php');
				}
				}
?>
</div>                        
</body>
</html>