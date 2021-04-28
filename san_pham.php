<?php

$conn = new  mysqlconnection("localhost", "root","","console-beta");

if(isset($_GET['tl']))
  {
      $tl = $_GET['tl'];
      $sql = "SELECT COUNT(id) AS 'tong' FROM sanpham WHERE `id_theloai`='$tl'";
  }

else $sql = "SELECT COUNT(id) AS 'tong' FROM sanpham";
$result = $conn->executeQuery($sql);
foreach($result as $rs)
{
  $count = $rs;
} ?>
  <nav class="columns has-text-centered">
        <div class="column is-3 has-background-black has-text-weight-bold">
          <a href='admin.php?id=sp' style="color:white;" id='all'><div>Sản phẩm</div></a>
        </div>

        <div class="column is-3 has-text-weight-bold " style="background-color:blue;">
         <a href='admin.php?id=sp&tl=PS' style="color:white;" id='ps'><div>PlayStation</div></a>
        </div>

        <div class="column is-3 has-text-weight-bold " style="background-color:#00d123;">
          <a href='admin.php?id=sp&tl=XB' style="color:white;" id='xb'><div>Xbox</div></a>
        </div>
        <div class="column is-3 has-text-weight-bold" style="background-color:#ff0505;">
          <a href='admin.php?id=sp&tl=NTD' style="color:white;" id='nd'><div>Nintendo</div></a>
        </div>
    </nav>


<?php
  if(isset($_GET['tl']))
  {
      $tl = $_GET['tl'];

      if($tl == "PS") include('ps.php');
      else if($tl == "XB") include('xb.php');
      else if($tl == "NTD") include('nd.php');

  }
  include('all.php');
?>

<nav class="pagination" role="navigation" aria-label="pagination">
  <ul class="pagination-list">
  <?php for($i = 0; $i < ceil($count['tong']/ 3); $i++)
    {  ?>
    <li>
    <?php if(isset($_GET['tl'])) { ?>
      <a class="pagination-link is-current" href="admin.php?id=sp&trang=<?php echo $i ; ?>&tl=<?php echo $tl;?>" aria-label="Page 1"><?php echo $i+1  ;?></a>
    <?php } 
      else { ?>
      <a class="pagination-link is-current" href="admin.php?id=sp&trang=<?php echo $i ; ?>" aria-label="Page 1"><?php echo $i+1  ;?></a>
    <?php } ?>
    </li>
    <?php }?>
  </ul>
</nav>