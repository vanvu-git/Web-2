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
    { $idtk = $_GET['idtk'];
        $st = $_GET['st'] ;
$sql = "UPDATE khachhang SET `status`=$st  WHERE id = $idtk";

echo $sql;

mysqli_query($conn,$sql);

header("location:admin.php?id=tkkh");
    }
?>