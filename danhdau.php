<?php
    $user = null;
    session_start();
    if(isset($_SESSION['user']))
        $user = $_SESSION['user'];
    $conn = new mysqli("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else
    { $idhd = $_GET['idhd'];
        $st = $_GET['st'] ;
$sql = "UPDATE hoadon SET `status`=$st ,`id_nhanvien` = '$user[id]' WHERE id = $idhd";

echo $sql;

mysqli_query($conn,$sql);

header("location:admin.php?id=dh&act=dh");
    }
?>