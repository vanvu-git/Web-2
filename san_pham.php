<?php

$conn = new  mysqli("localhost", "root","","console-beta");

$sql = "SELECT * FROM sanpham";







{ ?>
  <nav class="columns has-text-centered">
        <div class="column is-3 has-background-black has-text-weight-bold">
          <a href='admin.php?id=sp&tl=all' style="color:white;" id='all'><div>Sản phẩm</div></a>
        </div>

        <div class="column is-3 has-text-weight-bold " style="background-color:blue;">
         <a href='admin.php?id=sp&tl=ps' style="color:white;" id='ps'><div>PlayStation</div></a>
        </div>

        <div class="column is-3 has-text-weight-bold " style="background-color:#00d123;">
          <a href='admin.php?id=sp&tl=xb' style="color:white;" id='xb'><div>Xbox</div></a>
        </div>
        <div class="column is-3 has-text-weight-bold" style="background-color:#ff0505;">
          <a href='admin.php?id=sp&tl=nd' style="color:white;" id='nd'><div>Nintendo</div></a>
        </div>
    </nav>
    <?php include('sp_side.php'); ?>




<?php  }?>