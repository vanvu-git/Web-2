


<nav class="navbar" role="navigation" aria-label="main navigation" style=" background-color: #020203;"> 
  <div class="navbar-brand">
   <h1 class="title  is-2"><p class="has-text-primary">ConsoleShop<span class="has-text-white">/Admin</span></p></h1>
    
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
    
  </div>     
  <div class="navbar-end">
      <div class="navbar-item">
      
      <div class="dropdown is-right is-hoverable">
        <div class="dropdown-trigger">
          <button class="button"  style="background-color: #020203;">
          <a  class="has-text-primary-dark is-size-5"><?php if($account != null) echo htmlspecialchars($account['username']);?></a>
            <span class="icon is-small">
              <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
          <div class="dropdown-content">
            <div class="dropdown-item">
              <a href='admin.php?id=dmk'><img src='../images/logout.png'style='width: 20px;'><span style='padding-left: 10px;'>Đổi mật khẩu</span></a>
            </div>
            <div class="dropdown-item">
              <a href='dangxuat.php'><img src='../images/logout.png'style='width: 20px;'><span style='padding-left: 10px;'>Đăng xuất</span></a>
            </div>
          </div>
        </div>
      </div>












      </div>
    </div>
</nav>