<?php
include ('../../template/mysqlconnection.php'); 
    $idpn = $_GET["idpn"];
    $idsp = $_POST["idsp"];
    $sl = $_POST["sl"];
    $dg = $_POST["dg"];
    $tong = $sl * $dg;
    $conn = new mysqlconnection("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    
    $sql = "INSERT INTO `ct_phieunhaphang`(`id_phieunhaphang`, `id_sanpham`, `soluong`,`dongia`, `thanhtien`)
     VALUES ( '$idpn' , '$idsp' , '$sl' , '$dg' ,'$tong')";
    echo $sql;
    $conn->executeUpdate($sql);
    $sql = "UPDATE `phieunhaphang` SET `tongtien`= (SELECT SUM(thanhtien) FROM ct_phieunhaphang WHERE phieunhaphang.id = ct_phieunhaphang.id_phieunhaphang)";
    echo $sql;
    $conn->executeUpdate($sql);
  
    header("location:../admin.php?id=pnh");
?>