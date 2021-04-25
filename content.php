<?php
if(isset($_GET['id']))
{	
	$id=$_GET['id'];
	
	if($id == "tc") 	include('trang_chu.php');
	else	if($id == "sp") 	include('san_pham.php');
	else	if($id == "add") 	include('them.php');
	else	if($id == "fix") 	include('sua.php');
	else 	if($id == "dh")     include('donhang.php');
	else 	if($id == "tkkh")     include('TK_KH.php');
	else 	if($id == "pnh")     include('phieunhap.php');
}
?>