
<nav class="columns has-text-centered">
<div class="column is-12 has-text-weight-bold" style="background-color:#ff0505;margin-top:3%;">
          <a href='admin.php?id=sp&tl=nt' style="color:white;" id='xb'><div>Nintendo</div></a>
        </div>
</nav>



<div class="box">
     <a href="admin.php?id=add&act=add"><img src="images/plus.png" alt="" class="image" style="width:100px;"></a>


<table class="table">
  <thead>
    <tr>
      <th><abbr title="Position">STT</abbr></th>
      <th>ID</th>
      <th><abbr title="idtl">ID thể loại</abbr></th>
      <th><abbr title="name">Tên</abbr></th>
      <th><abbr title="dongia">Đơn giá</abbr></th>
      <th><abbr title="source">image link</abbr></th>
      <th><abbr title="soluong">Số lượng</abbr></th>
      <th><abbr title="del">Xóa</abbr></th>
      <th><abbr title="update">Sửa</abbr></th>

    </tr>
    </thead>
   


<?php  if ($result = $conn -> query($sql)) {
            $stt = 1;
      while ($row = $result -> fetch_array())  { 
          if($row['id_theloai'] == "NTD") {?>


<tbody>
    <tr>
      <td><?php echo $stt; $stt++?></td>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['id_theloai'];?></td>
      <td><?php echo $row['ten'];?></td>
      <td><?php echo $row['dongia'];?></td>
      <td><?php echo $row['image_link'];?></td>
      <td><?php echo $row['Soluong'];?></td>
      <td><button class="button is-danger" onclick="myFunction('<?php echo $row['id'];?>')">Xóa</button></td>
        <div class="modal" id="<?php echo $row['id'];?>">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                    <p class="modal-card-title">Xóa</p>
                    <button class="delete" onclick="myFunction('<?php echo $row['id'];?>')" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <h1>Bạn có muốn xóa sản phẩm này</h1>
                    </section>
                    <footer class="modal-card-foot">
                    <a   class="button is-primary" href="<?php echo 'xulyxoa.php?idsp='.$row['id']?>">Xóa</a>
                    <button class="button" onclick="myFunction('<?php echo $row['id'];?>')">Cancel</button>
                    </footer>
                </div>
        </div>
      <td><a class="button is-primary" href="<?php echo 'admin.php?id=fix&idsp='.$row['id']?>"> Sửa</a></td>
      
    </tr>
  </tbody>



<?php }}}?>

</table>
</div>