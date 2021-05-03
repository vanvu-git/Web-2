<nav class="columns has-text-centered">
    <div class="column is-12 has-text-weight-bold mt-4" style="background-color:#39d6db;">
        <div  style="color:white;">Tài khoản nhân viên</div>
    </div>
</nav>

<button class="button is-info"  onclick="myFunction('add')">Thêm</button></td>
  <div class="modal" id="add">
          <div class="modal-background"></div>
          <div class="modal-card">
              <header class="modal-card-head">
              <p class="modal-card-title">Thêm nhân viên</p>
              <button class="delete" onclick="myFunction('add')" aria-label="close"></button>
              </header>
              <section class="modal-card-body">
              <form action="xuly/xulythemnv.php" method="POST"  name="them_nv">
                    <h3 class="is-size-3 has-text-center">Thêm</h3>
                    <div class="field">
                        <label for="" class="label">Id:</label>
                        <div class="control">
                            <input type="text" class="input" name="idnv" value="" id="idnv">
                        </div>
                        <div id="showUsernameError" class="has-text-danger"></div>
                    </div>

                    <div class="field">
                        <label for="" class="label">Họ:</label>
                        <div class="control">
                            <input type="text" class="input" name="ho" value="" id="ho">
                        </div>
                        <div id="showUsernameError" class="has-text-danger"></div>
                    </div>       

                    <div class="field">
                        <label for="" class="label">Tên</label>
                        <div class="control">
                            <input type="text" class="input" name="ten">
                        </div>
                        <div id="showNameError" class="has-text-danger"></div>
                    </div>

                    <div class="field">
                        <label for="" class="label">Tài khoản:</label>
                        <div class="control">
                            <input type="text" class="input" name="tk">
                        </div>
                        <div id="showNameError" class="has-text-danger"></div>
                    </div>
                    <div class="field">
                        <label for="" class="label">Mật khẩu:</label>
                        <div class="control">
                            <input type="password" class="input" name="mk">
                        </div>
                        <div id="showNameError" class="has-text-danger"></div>
                    </div>

                    <div class="field">
                    <label for="" class="label">Quyền:</label>
                    <div class="select">
                        <select id="quyen" name="quyen">
                            <option>NV</option>
                            <option>Admin</option>
                            <option>QL</option>
                        </select>
                    </div>
                    <div id="showNameError" class="has-text-danger"></div>
                    </div> 
              </section>
              <footer class="modal-card-foot">
              <input class="button is-primary" type="submit" class="button" name="submit" value="Thêm">
              </form>
              <button class="button" onclick="myFunction('add')">Cancel</button>
              </footer>
          </div>
  </div>



<table class="table">
<thead>
    <tr>  
      <th><a href="admin.php?id=tknv&sort=id">ID</a></th>
      <th><a href="admin.php?id=tknv&sort=ho">Họ</a></th>
      <th><a href="admin.php?id=tknv&sort=ten">Tên</a></th>
      <th><a href="admin.php?id=tknv&sort=username">Username</a></th>
      
      <th><a href="admin.php?id=tknv&sort=ChucVu">Chức vụ</a></th>
    </tr>
</thead>
<?php
    $conn = new  mysqlconnection("localhost", "root","","console-beta");
    $sql = "SELECT COUNT(id) AS 'tong' FROM nhanvien Where ChucVu = 'NV' OR ChucVu = 'AD'";
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
      $sql = "SELECT * FROM nhanvien WHERE ChucVu = 'NV' OR ChucVu = 'Admin' ORDER BY $_GET[sort] ASC Limit $begin,3 ";
    }
    else $sql = "SELECT * FROM nhanvien WHERE `ChucVu` != 'QL' AND id != '$account[id]' Limit $begin,3";
    
    if ($result = $conn -> executeQuery($sql)) {
        
  foreach ($result as $row) {
?>
<tbody>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['ho'];?></td>
      <td><?php echo $row['ten'];?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['ChucVu'];?></td>      
      <td><button class="button is-primary" onclick="myFunction('<?php echo $row['id']; ?>')">Sửa</td>
        <div class="modal" id="<?php echo $row['id']; ?>">
        <div class="modal-background"></div>
        <div class="modal-card">
            <form action = "xuly/xulycapquyen.php" method="post">
            <header class="modal-card-head">
            <p class="modal-card-title">Cấp quyền</p>
            <button class="delete" type="button" aria-label="close" onclick="myFunction('<?php echo $row['id']; ?>')"></button>
            </header>
            <section class="modal-card-body">
            
            <input type="text" class="is-hidden" name="idnv" value="<?php echo $row['id'] ;?>">

            <div class="field">         
                    <div class="select">
                        <select id="quyen" name="quyen">
                            <option>NV</option>
                            <option>Admin</option>
                            <option>QL</option>
                        </select>
                    </div>
                    <div id="showNameError" class="has-text-danger"></div>
                    </div> 
            </section>
            <footer class="modal-card-foot">
            <input class="button is-link" type="submit" name="submit" value="cấp quyền">
            <button class="button" type="button" onclick="myFunction('<?php echo $row['id']; ?>')">Đóng</button>
            </footer>
            </form>
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
    
      <a class="pagination-link is-current" href="admin.php?id=tknv&trang=<?php echo $i ; ?>" aria-label="Page 1"><?php echo $i+1  ;?></a>
    
    </li>
    <?php }?>
  </ul>
</nav>