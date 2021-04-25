
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
      <td><?php echo $row['tongtien'];?></td>
      <td><?php echo $row['password'];?></td>
        <?php if($row['status']==0) {?>
            <td><button class="button is-danger" onclick="myFunction('<?php echo $row['id']; ?>')">Đã bị khóa</td>
        <?php } 
        if($row['status']==1) {?>
        <td><button class="button is-primary" onclick="myFunction('<?php echo $row['id']; ?>')">Bình thường</td>
        <?php } ?>
        <div class="modal" id="<?php echo $row['id']; ?>">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
            <p class="modal-card-title">Đổi trạng thái</p>
            <button class="delete" aria-label="close" onclick="myFunction('<?php echo $row['id']; ?>')"></button>
            </header>
            <section class="modal-card-body">
                <a   class="button is-primary" href="<?php echo 'xulytrangthai.php?st=1&idtk='.$row['id']?>">Mở khóa tài khoản</a>
                <a   class="button is-danger" href="<?php echo 'xulytrangthai.php?st=0&idtk='.$row['id']?>">Khóa tài khoản</a>
            </section>
            <footer class="modal-card-foot">
            <button class="button" onclick="myFunction('<?php echo $row['id']; ?>')">Đóng</button>
            </footer>
        </div>
        </div>
        <td><?php echo $row['ngaynhap'];?></td>
    </tr>
  </tbody>
<?php }}?>
</table>