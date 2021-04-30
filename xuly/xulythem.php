<?php
include ('../template/mysqlconnection.php'); 
    $idsp = $_POST["msp"];
    $idtl = $_POST["mtl"];
    $tsp = $_POST["ten"];
    $dg = $_POST["dg"];
    $sl = $_POST["sl"];
    $conn = new mysqlconnection("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    $src= "images/" . $_FILES["file"]["name"];
    $sql = "INSERT INTO `sanpham`(`id`, `id_theloai`, `ten`,`dongia`, `image_link`, `Soluong`)
     VALUES ( '$idsp' , '$idtl' , '$tsp' , '$dg' , '$src', '$sl')";
    echo $sql;
    $conn->executeUpdate($sql);
 
    if($_FILES["file"]["error"]>0)
    {
      echo "Error: " . $_FILES["file"]["error"];
    }   

    if(file_exists("images/". $_FILES["file"]["name"]))
    {
        echo "file đã có rồi";
    }else  move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]);
    
    header("location:admin.php?id=sp&act=sp");
?>