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
    $temp = 0;
    $sql = "SELECT * FROM ct_phieunhaphang";
    $result = $conn->executeQuery($sql);
    foreach($result as $row)
    {
        if($row['id_phieunhaphang'] == $idpn && $row['id_sanpham'] == $idsp)
        {   
            $slc = $row['soluong'];
            $temp++;
        }
    }
    

    if($temp > 0)
    {
        $tongsl = $sl + $slc;
        $tong = $tongsl * $dg;

        $sql = "UPDATE `ct_phieunhaphang` SET `soluong`= '$tongsl',`thanhtien`='$tong' WHERE ct_phieunhaphang.id_phieunhaphang = '$idpn' AND id_sanpham = '$idsp' ";
    }  
    else $sql = "INSERT INTO `ct_phieunhaphang`(`id_phieunhaphang`, `id_sanpham`, `soluong`,`dongia`, `thanhtien`)
     VALUES ( '$idpn' , '$idsp' , '$sl' , '$dg' ,'$tong')";
    echo $sql;
    $conn->executeUpdate($sql);
    $sql = "UPDATE `phieunhaphang` SET `tongtien`= (SELECT SUM(thanhtien) FROM ct_phieunhaphang WHERE phieunhaphang.id = ct_phieunhaphang.id_phieunhaphang)";
    echo $sql;
    $conn->executeUpdate($sql);
  
   header("location:../admin.php?id=pnh");
?>