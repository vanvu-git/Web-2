<?php
include ('../../template/mysqlconnection.php'); 
    $conn = new mysqlconnection("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    else
    {
    if(isset($_POST['quyen']))
    {
        $quyen = $_POST['quyen'];
        $idnv = $_POST['idnv'];
        $sql = "UPDATE `nhanvien` SET `ChucVu`='$quyen' WHERE id='$idnv' ";
        echo $sql;
        $conn->executeUpdate($sql);
        header("location:../admin.php?id=tknv");
    }
    if(isset($_POST['trangthai']))
    {
        $trangthai = $_POST['trangthai'];
        $idnv = $_POST['idnv'];
        if($trangthai == "Khóa")
        {
            $trangthai = 0;
        }else $trangthai = 1;
        $sql = "UPDATE `nhanvien` SET `trangthai`='$trangthai' WHERE id='$idnv' ";
        echo $sql;
        $conn->executeUpdate($sql);
        header("location:../admin.php?id=tknv");
    }

}
?>