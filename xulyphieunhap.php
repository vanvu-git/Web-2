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
    { $idpn = $_GET['idpn'];
        $st = $_GET['st'] ;
$sql = "UPDATE phieunhaphang SET `status`=$st  WHERE id = '$idpn'";

echo $sql;

$conn->updateQuery($sql);   

header("location:admin.php?id=pnh");
    }
?>