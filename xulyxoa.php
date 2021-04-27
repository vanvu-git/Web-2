<?php
include ('../template/connection.php');
    $conn = new Myconn("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else $idsp = $_GET['idsp'];
$sql = "DELETE FROM `sanpham` WHERE id = '$idsp'";
echo $sql;
$conn->updateQuery($sql);

header("location:admin.php?id=sp&act=sp");
?>