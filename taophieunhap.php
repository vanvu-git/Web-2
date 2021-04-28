<?php
include ('../template/mysqlconnection.php'); 
session_start();
if(isset($_SESSION['account']))
    $account = $_SESSION['account'];
    $id = $_POST["ID"];
    $ncc = $_POST["ncc"];
    
    $conn = new mysqlconnection("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    
    $sql = "INSERT INTO `phieunhaphang`(`id`, `id_nhanvien`, `id_nhacungcap`, `status`, `tongtien`, `ngaynhap`)
     VALUES ( '$id' , '$account[id]' , '$ncc' , '0' ,'0',(SELECT CURRENT_DATE))";
    echo $sql;
    $conn->executeUpdate($sql);
   
    header("location:admin.php?id=pnh");
?>