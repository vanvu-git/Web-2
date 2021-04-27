<?php
    include ('../template/connection.php');
    $account = null;
    session_start();
    if(isset($_SESSION['account']))
        $account = $_SESSION['account'];
    $conn = new MyConn("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else
    { $idhd = $_GET['idhd'];
        $st = $_GET['st'] ;
$sql = "UPDATE hoadon SET `status`=$st ,`id_nhanvien` = '$account[id]' WHERE id = $idhd";
$conn->updateQuery($sql);
echo $sql;


header("location:admin.php?id=dh&act=dh");
    }
?>