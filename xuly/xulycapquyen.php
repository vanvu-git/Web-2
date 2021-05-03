<?php
include ('../../template/mysqlconnection.php'); 
    $conn = new mysqlconnection("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else
    {
   
        $quyen = $_POST['quyen'];
        $idnv = $_POST['idnv'];
    
    
    $sql = "UPDATE `nhanvien` SET `ChucVu`='$quyen' WHERE id='$idnv'";
    
    echo $sql;
$conn->executeUpdate($sql);

header("location:../admin.php?id=tknv");
}
?>