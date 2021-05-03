<div class='container'>
    <div class="noidung">
        <h1>Bảng thống kê sản phẩm bán chạy nhất trong tháng</h1>
    </div>
    <form class="Textfield" method="Post" action="">
        <label for="date">Hãy chọn tháng thống kê</label>
        <input type="month" name="date">
        <input type="submit" value="Tìm" name="submit">
    </form>
    <?php
        include("xuly/Xulythongke.php"); 
    ?>
</div>