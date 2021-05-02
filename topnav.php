


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
      <a  class="has-text-primary-dark is-size-5"><?php if($account != null) echo htmlspecialchars($account['username']);?></a>
     
      </div>
    </div>
</nav>