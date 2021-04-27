
<nav class="columns has-text-centered">
    <div class="column is-12 has-text-weight-bold mt-4" style="background-color:#39d6db;">
        <div  style="color:white;">Phiếu nhập hàng</div>
    </div>
</nav>

<table class="table">
<thead>
    <tr>  
      <th>ID</th>
      <th>ID nhân viên</th>
      <th>ID nhà cung cấp</th>
      <th>Tổng tiền</th>
      <th>Chi tiết</th>
      <th>Ngày nhập</th>
      <th>Trạng thái</th>
    </tr>
</thead>
<?php
    $conn = new  mysqli("localhost", "root","","console-beta");

    $sql = "SELECT * FROM phieunhaphang";
    if ($result = $conn -> query($sql)) {
        
  while ($row = $result -> fetch_array()) {
?>
<tbody>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['id_nhanvien'];?></td>
      <td><?php echo $row['id_nhacungcap'];?></td>
      <td class="column" style="color:#ff0505;font-family: Arial, Helvetica, sans-serif;font-weight:bold;"><?php echo number_format($row['tongtien']).'đ';?></td>
      <td><button class="button is-primary" onclick="myFunction('ct<?php echo $row['id']; ?>')">Chi tiết</button></td>
      <div class="modal" id="ct<?php echo $row['id'];?>">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head has-background-primary">
                    <p class="modal-card-title">Chi tiết đơn hàng</p>
                    <button class="delete" onclick="myFunction('ct<?php echo $row['id'];?>')" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                    <div class="columns is-multiline is-mobile">
                      <div class="column is-3-mobile is-3-desktop has-text-weight-bold">ID sản phẩm</div>
                      <div class="column is-3-mobile is-3-desktop has-text-weight-bold">Số lượng</div>
                      <div class="column is-3-mobile is-3-desktop has-text-weight-bold">Đơn giá</div>
                      <div class="column is-3-mobile is-3-desktop has-text-weight-bold">Thành tiền</div>
                    </div>
                    <?php $sql_1 ="SELECT * FROM phieunhaphang,ct_phieunhaphang WHERE phieunhaphang.id=ct_phieunhaphang.id_phieunhaphang AND  phieunhaphang.id='$row[id]'";
                       
                     if ($rs = $conn -> query($sql_1)) {                       
                      while ($r = $rs -> fetch_array())  {?>
                    <div class="columns is-multiline is-mobile">
                      <div class="column is-3-mobile is-3-desktop"><?php echo $r['id_sanpham'];?></div>
                      <div class="column is-3-mobile is-3-desktop"><?php echo $r['soluong'];?></div>
                      <div class="column is-3-mobile is-3-desktop"><?php echo $r['dongia'];?></div>
                      <div class="column is-3-mobile is-3-desktop"><?php echo $r['thanhtien'];?></div>
                    </div>
                    <?php }}?>
                    <div class="columns is-multiline is-mobile">
                      <div class="column"></div>
                      <div class="column"></div>
                      <div class="column has-text-weight-bold">Tổng tiền:</div>
                      <div class="column" style="color:#ff0505;font-family: Arial, Helvetica, sans-serif;font-weight:bold;"><?php echo number_format($row['tongtien']).'đ';?></div>
                    </div>
                    </section>                    
                    <footer class="modal-card-foot">                   
                    <button class="button" onclick="myFunction('ct<?php echo $row['id'];?>')">Đóng</button>
                    </footer>
                </div>
        </div>


      <td><?php echo $row['ngaynhap'];?></td>
        <?php if($row['status']==0) {?>
            <td><button class="button is-danger" onclick="myFunction('<?php echo $row['id']; ?>')">Chưa duyệt</button></td>
            <td><button class="button is-link" type="button" onclick="myFunction('sp<?php echo $row['id'];?>')">Chọn sản phẩm</button></td>
        <div class="modal" id="sp<?php echo $row['id'];?>">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
            <p class="modal-card-title">Thêm sản phẩm</p>
            <button class="delete" type="button" onclick="myFunction('sp<?php echo $row['id'];?>')" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
            <form action="xulythempn.php?idpn=<?php echo $row['id'];?>" method="POST">
            <div class="field">
                    <label for="" class="label">ID sản phẩm:</label>
                    <div class="select">
                        <select id="idsp" name="idsp">
                            <?php  
                              
                                $sql_1 = "SELECT `id` FROM  sanpham";
                                if ($result_1 = $conn -> query($sql_1)) {
                                    while ($row_1 = $result_1 -> fetch_array()) {
                            ?>
                            <option><?php echo $row_1['id']; ?></option>
                            <?php }} ?>
                        </select>
                    </div>
                    <div id="showNameError" class="has-text-danger"></div>
            </div>
            
            <div class="field">
                    <label for="" class="label">Số lượng:</label>
                    <div class="control">
                        <input type="text" class="input" name="sl" id="sl">
                    </div>
                    <div id="showNameError" class="has-text-danger"></div>
            </div>
            <div class="field">
                <label for="" class="label">Đơn gíá:</label>
                <div class="control">
                    <input type="text" class="input" name="dg" Value="2000">
                </div>
                <div id="showNameError" class="has-text-danger"></div>
            </div>
            <input type="submit" class="button is-danger" value="thêm">
            </form>
            </section>
            <footer class="modal-card-foot">
           
            <button class="button" type="button" onclick="myFunction('sp<?php echo $row['id'];?>')">Đóng</button>
            </footer>
        </div>
        </div>
        <?php } 



        if($row['status']==1) {?>
        <td><button class="button is-primary" onclick="myFunction('<?php echo $row['id']; ?>')">Đã duyệt</button></td>
        <?php } ?>
        <div class="modal" id="<?php echo $row['id']; ?>">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
            <p class="modal-card-title">Đổi trạng thái</p>
            <button class="delete" aria-label="close" onclick="myFunction('<?php echo $row['id']; ?>')"></button>
            </header>
            <section class="modal-card-body">
                <a class="button is-primary" href="<?php echo 'xulyphieunhap.php?st=1&idpn='.$row['id']?>">Duyệt phiếu nhập</a>
                <a class="button is-danger" href="<?php echo 'xulyphieunhap.php?st=0&idpn='.$row['id']?>">Chưa duyệt phiếu nhập</a>
            </section>
            <footer class="modal-card-foot">
            <button class="button" onclick="myFunction('<?php echo $row['id']; ?>')">Đóng</button>
            </footer>
        </div>
        </div>
        
    </tr>
  </tbody>
<?php }}?>
</table>