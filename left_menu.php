<div class="menu">
  <ul class="menu-list">
  <?php if($account['ChucVu'] == "QL") {?>
    <li><a href='admin.php?id=home'><img src='../images/home.png'style='width: 20px;'><span style='padding-left: 10px;'>Home</span></a></li>
    <li><a href='admin.php?id=tkkh'><img src='../images/man-user.png'style='width: 20px;'><span style='padding-left: 10px;'>Tài khoản khách hàng</span></a></li>
    <li><a href='admin.php?id=tknv'><img src='../images/man-user.png'style='width: 20px;'><span style='padding-left: 10px;'>Tài khoản nhân viên</span></a></li>
    <li><a href='admin.php?id=sp'><img src='../images/shopping-cart.png'style='width: 20px;'><span style='padding-left: 10px;'>Sản phẩm</span></a></li>
    <li><a href='admin.php?id=dh'><img src='../images/invoices.png'style='width: 20px;'><span style='padding-left: 10px;'>Đơn hàng</span></a></li>
    <li><a href='admin.php?id=pnh'><img src='../images/to-do.png'style='width: 20px;'><span style='padding-left: 10px;'>Phiếu nhập hàng</span></a></li>
    <li><a href='admin.php?id=ycnh'><img src='../images/trolley.png'style='width: 20px;'><span style='padding-left: 10px;'>Yêu cầu nhập hàng</span></a></li>
    <div class="dropdown-father">
              <li>
                <a>
                  <i class="fas fa-chart-line"></i>
                  <span style='padding-left: 5px;'>Thống kê</span>
                </a>
              </li>
              <ul class="dropdown-thongke">
                <a href='admin.php?id=tk&act=tg'>
                  <li>
                      <i class="fas fa-clock"></i>
                      <span style='padding-left: 5px;'>Thong ke theo thoi gian</span>
                  </li>
                </a>
                <a href="admin.php?id=tk&act=cn">
                  <li style="margin-top:10px">
                      <i class="fas fa-dollar-sign"></i>
                      <span style='padding-left: 5px;'>San pham ban chay nhat</span>
                  </li>
                </a>
              </ul>
        </div>
    <?php } ?>

    <?php if($account['ChucVu'] == "NV") {?>
    <li><a href='admin.php?id=home'><img src='../images/home.png'style='width: 20px;'><span style='padding-left: 10px;'>Home</span></a></li>
      
    <li><a href='admin.php?id=sp'><img src='../images/shopping-cart.png'style='width: 20px;'><span style='padding-left: 10px;'>Sản phẩm</span></a></li>
    <li><a href='admin.php?id=dh'><img src='../images/invoices.png'style='width: 20px;'><span style='padding-left: 10px;'>Đơn hàng</span></a></li>
    <li><a href='admin.php?id=pnh'><img src='../images/to-do.png'style='width: 20px;'><span style='padding-left: 10px;'>Phiếu nhập hàng</span></a></li>
    <li><a href='admin.php?id=ycnh'><img src='../images/trolley.png'style='width: 20px;'><span style='padding-left: 10px;'>Yêu cầu nhập hàng</span></a></li>
    <div class="dropdown-father">
              <li>
                <a>
                  <i class="fas fa-chart-line"></i>
                  <span style='padding-left: 5px;'>Thống kê</span>
                </a>
              </li>
              <ul class="dropdown-thongke">
                <a href='admin.php?id=tk&act=tg'>
                  <li>
                      <i class="fas fa-clock"></i>
                      <span style='padding-left: 5px;'>Thong ke theo thoi gian</span>
                  </li>
                </a>
                <a href="admin.php?id=tk&act=cn">
                  <li style="margin-top:10px">
                      <i class="fas fa-dollar-sign"></i>
                      <span style='padding-left: 5px;'>San pham ban chay nhat</span>
                  </li>
                </a>
              </ul>
        </div>
    <?php } ?>
    <?php if($account['ChucVu'] == "Admin") {?>
      <li><a href='admin.php?id=tknv'><img src='../images/man-user.png'style='width: 20px;'><span style='padding-left: 10px;'>Tài khoản nhân viên</span></a></li>
      <li><a href='admin.php?id=tkkh'><img src='../images/man-user.png'style='width: 20px;'><span style='padding-left: 10px;'>Tài khoản khách hàng</span></a></li>
    <?php } ?>

    <li><a href='dangxuat.php'><img src='../images/logout.png'style='width: 20px;'><span style='padding-left: 10px;'>Đăng xuất</span></a></li>
  </ul> 
</div>
