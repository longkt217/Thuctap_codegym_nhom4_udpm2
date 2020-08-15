<?php 
include('config.php');
$layma = $_GET['name'];
$sql="delete from sanpham where name='$layma'";
$run=mysqli_query($conn,$sql);
if($run) header('location:listsanpham.php');
else echo 'Xóa thất bại'
?>