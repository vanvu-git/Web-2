<nav class="columns has-text-centered">
    <div class="column is-12 has-text-white " style="background-color:blue;margin-top:3%;">
      Đơn hàng
    </div>
</nav>

<div class="dropdown" id="db">
  <div class="dropdown-trigger">
    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3" onclick="myFunction('db')">
      <span>-- Thời gian --</span>
      <span class="icon is-small">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu3" role="menu">
    <div class="dropdown-content">
      <a href="admin.php?id=dh&act=dh&start=2021-03-01&end=2021-05-01" class="dropdown-item">
        01/03/2021 -> 01/05/2021
      </a>
      <a href="admin.php?id=dh&act=dh&start=2021-01-01&end=2021-03-01" class="dropdown-item">
        01/01/2021 -> 01/03/2021
      </a>
      <a href="admin.php?id=dh&act=dh&start=2020-11-01&end=2021-01-01" class="dropdown-item">
       01/11/2020 -> 01/01/2021
      </a>
      <a href="admin.php?id=dh&act=dh" class="dropdown-item">
        Toàn bộ
      </a>
     
    </div>
  </div>
</div>

<?php
    $conn = new mysqlconnection("localhost","root","","console-beta");

    if(isset($_GET['start']) && isset($_GET['end']))
    {
      $sql = "SELECT * FROM hoadon WHERE thoigian BETWEEN '$_GET[start]' AND '$_GET[end]'";
    }
   else $sql = "SELECT * FROM hoadon";
?>

<table class="table is-hoverable">
  <thead>
    <tr>
      <th><abbr title="Position">STT</abbr></th>
      <th>ID</th>
      <th><abbr title="idtl">ID khách hàng</abbr></th>
      <th><abbr title="name">Tên khách hàng</abbr></th>
      <th><abbr title="dongia">Tổng tiền</abbr></th>
      <th><abbr title="time">Thời gian</abbr></th>
      <th>Chi tiết</abbr></th>
      <th><abbr title="status">Trạng thái</abbr></th> 
    </tr>
  </thead>
   
<?php  
  $stt = 1;
  $result = $conn->executeQuery($sql);
  
  
  foreach($result as $row) { 
?>


<tbody>
    <tr>
      <td><?php echo $stt; $stt++?></td>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['id_khachhang'];?></td>
      <td><?php echo $row['username_khachhang'];?></td>
      <td style="color:#ff0505;font-family: Arial, Helvetica, sans-serif;font-weight:bold;"><?php echo number_format($row['tongtien']).'đ';?></td>
      
      <td><?php echo $row['thoigian'];?></td>
      <td><button class="button is-info" onclick="myFunction('<?php echo $row['id'];?>')">Chi tiết</button></td>
        <div class="modal" id="<?php echo $row['id'];?>">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head has-background-primary">
                    <p class="modal-card-title">Chi tiết đơn hàng</p>
                    <button class="delete" onclick="myFunction('<?php echo $row['id'];?>')" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                    <div class="columns is-multiline is-mobile">
                      <div class="column is-3-mobile is-3-desktop has-text-weight-bold">Tên sản phẩm</div>
                      <div class="column is-3-mobile is-3-desktop has-text-weight-bold">Số lượng</div>
                      <div class="column is-3-mobile is-3-desktop has-text-weight-bold">Đơn giá</div>
                      <div class="column is-3-mobile is-3-desktop has-text-weight-bold">Thành tiền</div>
                    </div>
                    <?php $sql_1 ="SELECT sanpham.ten,ct_hoadon.soluong,sanpham.dongia,ct_hoadon.dongia*ct_hoadon.soluong AS thanhtien FROM hoadon,ct_hoadon,sanpham WHERE hoadon.id=ct_hoadon.id_hoadon AND sanpham.id=ct_hoadon.id_sanpham AND ct_hoadon.id_hoadon=$row[id]";
                      if ($rs = $conn -> executeQuery($sql_1)) {                       
                      foreach ( $rs as $r)  {?>
                    <div class="columns is-multiline is-mobile">
                      <div class="column is-3-mobile is-3-desktop"><?php echo $r['ten'];?></div>
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
                    <button class="button" onclick="myFunction('<?php echo $row['id'];?>')">Đóng</button>
                    </footer>
                </div>
        </div>
        <?php if($row['status'] == 1) {?>
          <td><button class="button is-primary" onclick="myFunction('st<?php echo $row['id'];?>')">Đã xử lý</button></td>
          <?php } ?>
        <?php if($row['status'] == 0) {?>
          <td><button class="button is-danger" onclick="myFunction('st<?php echo $row['id'];?>')">Chưa xử lý</button></td>
          <?php } ?>
        <div class="modal" id="st<?php echo $row['id'];?>">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                    <p class="modal-card-title">Trạng thái</p>
                    <button class="delete" onclick="myFunction('st<?php echo $row['id'];?>')" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                    <a   class="button is-primary" href="<?php echo 'danhdau.php?st=1&idhd='.$row['id']?>">Đã xử lý</a>
                    <a   class="button is-danger" href="<?php echo 'danhdau.php?st=0&idhd='.$row['id']?>">Chưa xủ lý</a>
                    </section>
                    <footer class="modal-card-foot">
                   
                    <button class="button" onclick="myFunction('st<?php echo $row['id'];?>')">Cancel</button>
                    </footer>
                </div>
        </div>
          
    </tr>
    <tr></tr>
  </tbody>



<?php }?>

</table>
    
 
