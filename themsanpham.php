<?php
include('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Add SP</title>
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
		       <h1>Shop PC</h1>
				<div class="header-bottom">
				<div class="header-right w3agile">
				<div class="header-left-bottom agileinfo">	
 <div>
	
    	<form method="post" enctype="multipart/form-data">
        			<div>.</div>
					<div class="text2">Name Product</div>
					<div class="textbox"><input type="textbox" name="txtten" /></div>
					<div class="text2">Code Product</div>
					<div class="textbox"><input type="textbox" name="txtcode" /></div>					
                    <div class="text2">Money</div>
					<div class="textbox"><input type="textbox" name="txtm" /></div>
                    <div class="text2">Description</div>
					<div class="textbox"><textarea name="txtdes"> </textarea></div>
                 	<div class="text2">Picture</div>
					<div class="textbox"><input type="file" name="txtanh"></div>
                    <br>
					<div><input type="submit" name="ok" value="Thêm mới" />
					</form>
				<div>
						<div class="clear"> </div>
</div>
<!--PHP-->
<div align="center">
<?php
include('config.php');
	if (isset($_POST["ok"]))
	{
		$ten=$_POST['txtten'];
		$code=$_POST['txtcode'];
		$category=$_POST['txtca'];
		$money=$_POST['txtm'];
		$description=$_POST['txtdes'];
		
		move_uploaded_file($_FILES['txtanh']['tmp_name'],'upload/'.$_FILES['txtanh']['name']);
		if (($ten=="")||($code=="")||($category=="")) echo "<font color=RED size=+3>Chưa nhập đủ dữ liệu!</font> ";
		else 
		$sql="insert into sanpham ( name, code, category, money, description, picture) values ('$ten','$code','$category','$money','$description','".$_FILES['txtanh']['name']."') ";
		$run=mysqli_query($conn,$sql);	
		if ($run) echo header('location:listsanpham.php');//"<font color=White size=+3> thành công</font>"; 
		else echo "<font color=White size=+3> thất bại!</font>";
		}

?>
</div>			
</body>
</html>