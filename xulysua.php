<?php
include ('../template/connection.php');
    $conn = new Myconn("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else
    {
   
    $msp = $_POST["msp"];
    $idtl = $_POST["mtl"];
    $tsp = $_POST["ten"];
    $dg = $_POST["dg"];
    $sl = $_POST["sl"];
    $src="images/" . $_FILES["file"]["name"];
$sql = "UPDATE `sanpham` SET `id_theloai`='$idtl',`ten`='$tsp',`dongia`='$dg',`image_link`='$src',`Soluong`='$sl' WHERE id='$msp'";
echo $sql;
$conn->updateQuery($sql);
$conn->Close();
header("location:admin.php?id=sp&act=sp");
}
?>