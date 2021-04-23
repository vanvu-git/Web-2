<?php
    $idsp = $_POST["msp"];
    $idtl = $_POST["mtl"];
    $tsp = $_POST["ten"];
    $dg = $_POST["dg"];
    
    $conn = new mysqli("localhost","root","","console-beta");
    if(!$conn)
    {
        echo"ket noi that bai";
    }
    $src= "images/" . $_FILES["file"]["name"];
    $sql = "INSERT INTO `sanpham`(`id`, `id_theloai`, `ten`,`dongia`, `image_link`)
     VALUES ( '$idsp' , '$idtl' , '$tsp' , '$dg' , '$src')";
    echo $sql;
    mysqli_query($conn,$sql);
 
    if($_FILES["file"]["error"]>0)
    {
      echo "Error: " . $_FILES["file"]["error"];
    }   

    if(file_exists("images/". $_FILES["file"]["name"]))
    {
        echo "file đã có rồi";
    }else  move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]);
    mysqli_close($conn);
    header("location:index.php?id=sp&act=sp");
?>