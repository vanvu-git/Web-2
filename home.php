<?php 
    $conn = new mysqli("localhost","root","","console-beta");
    $sql = "SELECT COUNT(id) FROM sanpham";

    $rs = $conn -> query($sql);
    $sp = $rs -> fetch_array();

    $sql = "SELECT COUNT(id) FROM khachhang";

    $rs = $conn -> query($sql);
    $kh = $rs -> fetch_array();

    $sql = "SELECT COUNT(id) FROM hoadon";

    $rs = $conn -> query($sql);
    $dh = $rs -> fetch_array();

    $sql = "SELECT COUNT(id) FROM phieunhaphang";

    $rs = $conn -> query($sql);
    $pn = $rs -> fetch_array();
    mysqli_close($conn);
  
?>
<div class="columns is-multiline is-mobile mt-5">
       
        <div class="column is-6-mobile is-3-tablet is-3-desktop">
            <div class="box">
            <a href="admin.php?id=sp" class="bigger-when-hover">
                <img src="../images/shopping-cart.png" alt="" class="image is-128x128">
                <h4 class="is-size-4 has-text-centered">Sản phẩm</h4>
                <p class="has-text-danger is-size-5 has-text-centered has-text-weight-semibold">Số lượng: <?php echo $sp[0]; ?></p>
            </a>
            </div>
        </div>

        <div class="column is-6-mobile is-3-tablet is-3-desktop">
            <div class="box">
            <a href="admin.php?id=dh" class="bigger-when-hover">
                <img src="../images/invoices.png" alt="" class="image is-128x128">
                <h4 class="is-size-4 has-text-centered">Đơn hàng</h4>
                <p class="has-text-danger is-size-5 has-text-centered has-text-weight-semibold">Số lượng: <?php echo $dh[0]; ?></p>
            </a>
            </div>
        </div>

        <div class="column is-6-mobile is-3-tablet is-3-desktop">
            <div class="box">
            <a href="admin.php?id=tkkh" class="bigger-when-hover">
                <img src="../images/man-user.png" alt="" class="image is-128x128">
                <h4 class="is-size-4 has-text-centered">Khách hàng</h4>
                <p class="has-text-danger is-size-5 has-text-centered has-text-weight-semibold">Số lượng: <?php echo $kh[0] ; ?></p>
            </a>
            </div>
        </div>

        <div class="column is-6-mobile is-3-tablet is-3-desktop">
            <div class="box">
            <a href="admin.php?id=pnh" class="bigger-when-hover">
                <img src="../images/home.png" alt="" class="image is-128x128">
                <h4 class="is-size-4 has-text-centered">Phiếu nhập hàng</h4>
                <p class="has-text-danger is-size-5 has-text-centered has-text-weight-semibold">Số lượng: <?php echo $pn[0]; ?></p>             
            </a>
            </div>
        </div>
      
</div>