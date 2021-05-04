<?php
include ('../../template/mysqlconnection.php'); 
    $idnv = $_POST["idnv"];
    $ho = $_POST["ho"];
    $ten = $_POST["ten"];
    $tk = $_POST["tk"];
    $mk = $_POST["mk"];
    $quyen = $_POST["quyen"];
    $mk = md5($mk);
    $conn = new mysqlconnection("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    
    
    $sql = "INSERT INTO `nhanvien`(`id`, `ho`, `ten`,`username`, `password`, `ChucVu`)
     VALUES ( '$idnv' , '$ho' , '$ten' , '$tk' , '$mk', '$quyen')";
    echo $sql;
    $conn->executeUpdate($sql);
 
    
    
    header("location:../admin.php?id=tknv");
?>