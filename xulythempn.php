<?php
    $idpn = $_GET["idpn"];
    $idsp = $_POST["idsp"];
    $sl = $_POST["sl"];
    $dg = $_POST["dg"];
    $tong = $sl * $dg;
    $conn = new mysqli("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    
    $sql = "INSERT INTO `ct_phieunhaphang`(`id_phieunhaphang`, `id_sanpham`, `soluong`,`dongia`, `thanhtien`)
     VALUES ( '$idpn' , '$idsp' , '$sl' , '$dg' ,'$tong')";
    echo $sql;
    mysqli_query($conn,$sql);
    $sql = "UPDATE `phieunhaphang` SET `tongtien`= (SELECT SUM(thanhtien) FROM ct_phieunhaphang WHERE phieunhaphang.id = ct_phieunhaphang.id_phieunhaphang)";
    echo $sql;
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:admin.php?id=pnh");
?>