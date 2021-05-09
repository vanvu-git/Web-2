<?php
if(isset($_GET['id']))
{	
	$id=$_GET['id'];
	
	if($id == "tc") 	include('trang_chu.php');
	else if($id == "sp") 	include('san_pham.php');
	else if($id == "add") 	include('them.php');
	else if($id == "fix") 	include('sua.php');
	else if($id == "dh")     include('donhang.php');
	else if($id == "tkkh")     include('TK_KH.php');
	else if($id == "pnh")     include('phieunhap.php');
	else if($id == "ycnh")     include('yeucaunhaphang.php');
	else if($id == "home")     include('home.php');
	else if($id == "tknv")     include('TK_NV.php');
	else if($id == "tk"){
		if(isset($_GET['act'])){
			if($_GET['act']=='tg')
				include('thoi_gian.php');
			else if($_GET['act']=='cn')
				include('ban_chay.php');
		}
	}
	else if($id == "dmk")     include('doimatkhau.php');
}
?>