<?php
    include ('../template/connection.php');
    $user = null;
    session_start();
    if(isset($_SESSION['user']))
        $user = $_SESSION['user'];
    $conn = new MyConn("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else
    { $idhd = $_GET['idhd'];
        $st = $_GET['st'] ;
$sql = "UPDATE hoadon SET `status`=$st ,`id_nhanvien` = '$user[id]' WHERE id = $idhd";
$conn->updateQuery($sql);
echo $sql;


header("location:admin.php?id=dh&act=dh");
    }
?>