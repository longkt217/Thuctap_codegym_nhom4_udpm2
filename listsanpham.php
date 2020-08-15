<?php   
	include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sách sản phẩm</title>
<style>
.grid-container
{
	display:grid;
	width:500px;
	margin-left:400px;
	grid-gap:10px;
	padding:10px;
	background-image: url(images/banner1.jpg)
}
.grid-container > div
{
	font-family:"Courier New", Courier, monospace;
	font-size:18px;
	color:#FFFFFF;
	border:1px solid #000;
	text-align:left;
	background-color:rgba (255,255,255,0.6)
	
}
</style>
</head>
<body>
<h2 align="center">Danh sách sản phẩm</h2>
<a href="#">KHÁCH HÀNG</a><BR />
<a href="themsanpham.php">THÊM MỚI</a>
<div class="grid-container">
<?php
	$sql="select * from sanpham";
	$run=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($run))
	{
?>
<div>
   <img src="upload/<?php echo $row['picture']?>" width="30%" height="30%"><br>
	Name : <?php echo $row['name']; ?> <br>
    Code : <?php echo $row['code']; ?><br>
    Money : <?php echo $row['money']; ?><br>
    Description : <?php echo $row['description']; ?><br>
	<a href="deletesp.php?name=<?php echo $row['name']; ?>" onclick="if(confirm('Bạn có chắc chắn xóa không'))return true; else return false">Delete</a>
    <a href="editsp.php?name=<?php echo $row['code']; ?>">Edit</a>
    
</div>
<?php
}
?>
</div>
</body>
</html>