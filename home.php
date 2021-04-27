<?php 
    $conn = new mysqlconnection("localhost","root","","console-beta");
    $sql = "SELECT COUNT(id) AS 'tong' FROM sanpham";

    
    $rs = $conn->executeQuery($sql);
    foreach($rs as $r)
    {
        $sp = $r ;
    }
    $sql = "SELECT COUNT(id) AS 'tong' FROM khachhang ";

    $rs = $conn->executeQuery($sql);
    foreach($rs as $r)
    {
        $kh = $r ;
    }
    $sql = "SELECT COUNT(id) AS 'tong' FROM hoadon";

    $rs = $conn->executeQuery($sql);
    foreach($rs as $r)
    {
        $dh = $r ;
    }

    $sql = "SELECT COUNT(id) AS 'tong' FROM phieunhaphang";

    $rs = $conn->executeQuery($sql);
    foreach($rs as $r)
    {
     $pn = $r ;
    }
  
  
?>
<div class="columns is-multiline is-mobile mt-5">
       
        <div class="column is-6-mobile is-3-tablet is-3-desktop">
            <div class="box">
            <a href="admin.php?id=sp" class="bigger-when-hover">
                <img src="../images/shopping-cart.png" alt="" class="image is-128x128">
                <h4 class="is-size-4 has-text-centered">Sản phẩm</h4>
                <p class="has-text-danger is-size-5 has-text-centered has-text-weight-semibold">Số lượng: <?php echo $sp['tong']; ?></p>
            </a>
            </div>
        </div>

        <div class="column is-6-mobile is-3-tablet is-3-desktop">
            <div class="box">
            <a href="admin.php?id=dh" class="bigger-when-hover">
                <img src="../images/invoices.png" alt="" class="image is-128x128">
                <h4 class="is-size-4 has-text-centered">Đơn hàng</h4>
                <p class="has-text-danger is-size-5 has-text-centered has-text-weight-semibold">Số lượng: <?php echo $dh['tong']; ?></p>
            </a>
            </div>
        </div>

        <div class="column is-6-mobile is-3-tablet is-3-desktop">
            <div class="box">
            <a href="admin.php?id=tkkh" class="bigger-when-hover">
                <img src="../images/man-user.png" alt="" class="image is-128x128">
                <h4 class="is-size-4 has-text-centered">Khách hàng</h4>
                <p class="has-text-danger is-size-5 has-text-centered has-text-weight-semibold">Số lượng: <?php echo $kh['tong']; ?></p>
            </a>
            </div>
        </div>

        <div class="column is-6-mobile is-3-tablet is-3-desktop">
            <div class="box">
            <a href="admin.php?id=pnh" class="bigger-when-hover">
                <img src="../images/home.png" alt="" class="image is-128x128">
                <h4 class="is-size-4 has-text-centered">Phiếu nhập hàng</h4>
                <p class="has-text-danger is-size-5 has-text-centered has-text-weight-semibold">Số lượng: <?php echo $pn['tong']; ?></p>             
            </a>
            </div>
        </div>
      
</div>