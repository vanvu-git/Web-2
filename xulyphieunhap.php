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
    { $idpn = $_GET['idpn'];
        $st = $_GET['st'] ;
$sql = "UPDATE phieunhaphang SET `status`=$st  WHERE id = '$idpn'";

echo $sql;

mysqli_query($conn,$sql);

header("location:admin.php?id=pnh");
    }
?>