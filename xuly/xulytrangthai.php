<?php
include ('../../template/mysqlconnection.php'); 
    $account = null;
    session_start();
    if(isset($_SESSION['account']))
        $account = $_SESSION['account'];
    $conn = new mysqlconnection("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else
    { $idtk = $_GET['idtk'];
        $st = $_GET['st'] ;
$sql = "UPDATE khachhang SET `status`=$st  WHERE id = $idtk";

echo $sql;

$conn->executeUpdate($sql);

header("location:../admin.php?id=tkkh");
    }
?>