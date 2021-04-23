
<div class="menu">
  <ul class="menu-list">
  <?php if($user['ChucVu'] == "QL") {?>
    <li><a href='admin.php?id=tc&act=tc'><img src='images/home.png'style='width: 20px;'><span style='padding-left: 10px;'>Home</span></a></li>
    <li><a href='admin.php?id=kh&act=kh'><img src='images/man-user.png'style='width: 20px;'><span style='padding-left: 10px;'>Khách hàng</span></a></li>
    <li><a href='admin.php?id=sp&act=sp'><img src='images/shopping-cart.png'style='width: 20px;'><span style='padding-left: 10px;'>Sản phẩm</span></a></li>
    <li><a href='admin.php?id=dh&act=dh'><img src='images/invoices.png'style='width: 20px;'><span style='padding-left: 10px;'>Đơn hàng</span></a></li>
    <li><a href='dangxuat.php'><img src='images/logout.png'style='width: 20px;'><span style='padding-left: 10px;'>Đăng xuất</span></a></li>
    <?php } ?>
  </ul> 
</div>
