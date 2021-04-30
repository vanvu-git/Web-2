<?php
include ('../template/mysqlconnection.php'); 
    $conn = new mysqlconnection("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else $idsp = $_GET['idsp'];
$sql = "DELETE FROM `sanpham` WHERE id = '$idsp'";
echo $sql;
$conn->executeUpdate($sql);

header("location:admin.php?id=sp&act=sp");
?>