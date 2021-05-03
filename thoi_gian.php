<div class='container'>
    <div class="noidung">
        <h1>Bảng thống kê sản phẩm khoảng thời gian sản phẩm bán được</h1>
    </div>
    <form class="Textfield" method="Post" action="">
        <label for="date">Hãy chọn thời gian từ : </label>
        <input type="date" name="date1">
        <label for="date"> đến : </label>
        <input type="date" name="date2">
        <label for="choose">Chọn sản phẩm </label>
        <select name="choose" id="">
            <option value="">...</option>
            <option value="XB">XB</option>
            <option value="PS">PS</option>
            <option value="NTD">NTD</option>
            <option value="All">ALL</option>
        </select>
        <input type="submit" value="Tìm" name="submit">
    </form>
    <?php
        include("xuly/Xulythongke.php"); 
    ?>
</div>