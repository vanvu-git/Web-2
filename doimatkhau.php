<?php 

    
    $conn = new mysqlconnection("localhost","root","","console-beta");
    $error = 0;
    if(!$conn)
    {
        echo "Không thể kết nối database";
    }
    else 
    {
        if(isset($_POST['mkc']))
        {
            if(md5($_POST['mkc']) != $account['password'])
            {
                $error = 1;
               
            }
            else if(isset($_POST['mkm']))
            {
                $mk = md5($_POST['mkm']);
                $sql = "Update nhanvien SET `password` = '$mk' WHERE `id` = '$account[id]'";
                $conn->executeUpdate($sql);
                $conn->Close();
                $error = 2;
            }

        }
        $conn->Close();
    }

?>


<form action="admin.php?id=dmk" method="POST"  name="doimk">
    <h3 class="is-size-3 has-text-center">Đổi mật khẩu</h3>
  
    <div class="field">
        <label for="" class="label">Mật khẩu cũ:</label>
        <div class="control">
            <input type="text" class="input" name="mkc">
        </div>    
    </div>

    <div class="field">
        <label for="" class="label">Mật khẩu mới:</label>
        <div class="control">
            <input type="text" class="input" name="mkm">
        </div>
       
    </div>
    

    <input class="button is-primary" type="submit" class="button" name="submit" value="Đổi mật khẩu">

</form> 



<?php if($error > 0)
{  ?>
<div class="modal is-active" id="tb">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Thông Báo!!!</p>
      <button class="delete" aria-label="close" onclick="myFunction('tb')"></button>
    </header>
    <section class="modal-card-body">
    <?php if($error == 1) echo "Mật khẩu cũ không chính xác!!!";
          if($error == 2) echo "Đổi mật khẩu thành công!!";
    ?>
    </section>
    <footer class="modal-card-foot">
      
      <button class="button" onclick="myFunction('tb')">Cancel</button>
    </footer>
  </div>
</div>
<?php } ?>

