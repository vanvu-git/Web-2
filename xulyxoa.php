<?php
    $conn = new mysqli("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else $idsp = $_GET['idsp'];
$sql = "DELETE FROM `sanpham` WHERE id = '$idsp'";
echo $sql;
mysqli_query($conn,$sql);

header("location:admin.php?id=sp&act=sp");
?>