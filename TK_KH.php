
<nav class="columns has-text-centered">
    <div class="column is-12 has-text-weight-bold mt-4" style="background-color:#39d6db;">
        <div  style="color:white;">Tài khoản khách hàng</div>
    </div>
</nav>

<table class="table">
<thead>
    <tr>  
      <th><a href="admin.php?id=tkkh&sort=id">ID</a></th>
      <th><a href="admin.php?id=tkkh&sort=ho">Họ</a></th>
      <th><a href="admin.php?id=tkkh&sort=ten">Tên</a></th>
      <th><a href="admin.php?id=tkkh&sort=username">Username</a></th>
      
      <th><a href="admin.php?id=tkkh&sort=status">Trạng thái</a></th>
    </tr>
</thead>
<?php
    $conn = new  mysqlconnection("localhost", "root","","console-beta");
    $sql = "SELECT COUNT(id) AS 'tong' FROM khachhang";
    $result = $conn->executeQuery($sql);
    foreach($result as $rs)
    {
      $count = $rs;
    } 
    if(isset($_GET['trang']))
    {
      $trang = $_GET['trang'];
    }else $trang =0;
    $begin = $trang * 3;

    if(isset($_GET['sort']))
    {
      $sql = "SELECT `id`,`ho`,`ten`,`username`,`password`,`status` FROM khachhang ORDER BY $_GET[sort] ASC Limit $begin,3 ";
    }
    else $sql = "SELECT `id`,`ho`,`ten`,`username`,`password`,`status` FROM khachhang Limit $begin,3";
    if ($result = $conn -> executeQuery($sql)) {
        
  foreach ($result as $row) {
?>
<tbody>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['ho'];?></td>
      <td><?php echo $row['ten'];?></td>
      <td><?php echo $row['username'];?></td>
      
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
    </tr>
  </tbody>
<?php }}?>
</table>

<nav class="pagination" role="navigation" aria-label="pagination">
  <ul class="pagination-list">
  <?php for($i = 0; $i < ceil($count['tong']/ 3); $i++)
    {  ?>
    <li>
    
      <a class="pagination-link is-current" href="admin.php?id=tkkh&trang=<?php echo $i ; ?>" aria-label="Page 1"><?php echo $i+1  ;?></a>
    
    </li>
    <?php }?>
  </ul>
</nav>