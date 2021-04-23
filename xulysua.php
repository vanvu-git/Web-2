<?php
    $conn = new mysqli("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else
    {
   
    $idsp = $_GET["idsp"];
    $idtl = $_POST["mtl"];
    $tsp = $_POST["ten"];
    $dg = $_POST["dg"];

    $src="images/" . $_FILES["file"]["name"];
$sql = "UPDATE `sanpham` SET `id_theloai`='$idtl',`ten`='$tsp',`dongia`='$dg',`image_link`='$src' WHERE id='$idsp'";
//echo $sql;
mysqli_query($conn,$sql);
mysqli_Close($conn);
header("location:admin.php?id=sp&act=sp");

}
?>