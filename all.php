<button class="button is-danger"  onclick="myFunction('add')">Thêm</button></td>
  <div class="modal" id="add">
          <div class="modal-background"></div>
          <div class="modal-card">
              <header class="modal-card-head">
              <p class="modal-card-title">Thêm sản phẩm</p>
              <button class="delete" onclick="myFunction('add')" aria-label="close"></button>
              </header>
              <section class="modal-card-body">
              <form action="xulythem.php" method="POST" class="p-6 m-6 box" name="them_sp" enctype= "multipart/form-data">
                    <h3 class="is-size-3 has-text-center">Thêm</h3>
                    <div class="field">
                        <label for="" class="label">Id:</label>
                        <div class="control">
                            <input type="text" class="input" name="msp" value="" id="msp">
                        </div>
                        <div id="showUsernameError" class="has-text-danger"></div>
                    </div>

                    <div class="field">
                        <label for="" class="label">ID thể loại:</label>
                        <div class="control">
                            <input type="text" class="input" name="mtl" value="" id="mtl">
                        </div>    
                        <div id="showPasswordError" class="has-text-danger"></div>
                    </div>

                    <div class="field">
                        <label for="" class="label">Tên</label>
                        <div class="control">
                            <input type="text" class="input" name="ten">
                        </div>
                        <div id="showNameError" class="has-text-danger"></div>
                    </div>

                    <div class="field">
                        <label for="" class="label">Đơn giá:</label>
                        <div class="control">
                            <input type="text" class="input" name="dg">
                        </div>
                        <div id="showNameError" class="has-text-danger"></div>
                    </div>
                    <div class="field">
                        <label for="" class="label">Số lượng:</label>
                        <div class="control">
                            <input type="text" class="input" name="sl">
                        </div>
                        <div id="showNameError" class="has-text-danger"></div>
                    </div>

                    <div class="field">
                      <div class="file has-name">
                            <label class="file-label">
                            <input class="file-input" type="file" name="file">
                            <span class="file-cta">
                                  <span class="file-icon">
                                  <i class="fas fa-upload"></i>
                                  </span>
                                  <span class="file-label">
                                        Choose a file…
                                  </span>
                                  </span>
                                  <span class="file-name">
                                        Hình ảnh
                                  </span>
                                  </label>
                      </div>
                    </div>
              </section>
              <footer class="modal-card-foot">
              <input class="button is-primary" type="submit" class="button" name="submit" value="Thêm">
              <button class="button" onclick="myFunction('<?php echo $row['id'];?>')">Cancel</button>
              </footer>
              </form>
          </div>
  </div>
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
      while ($row = $result -> fetch_array())  { ?>
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
        <td><button class="button is-primary" onclick="myFunction('fix-<?php echo $row['id'];?>')">Sửa</button></td>
        <div class="modal" id="fix-<?php echo $row['id'];?>">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                    <p class="modal-card-title">Sửa sản phẩm</p>
                    <button class="delete" onclick="myFunction('fix-<?php echo $row['id'];?>')" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                    <form action="xulysua.php" method="POST" class="p-6 m-6 box" name="them_sp" enctype= "multipart/form-data">
                      <h3 class="is-size-3 has-text-center">Sửa</h3>
                      
                      

                       
                      <div class="field">
                          <label for="" class="label">Tên</label>
                          <div class="control">
                              <input type="text" class="input" name="ten">
                          </div>
                          <div id="showNameError" class="has-text-danger"></div>
                      </div>

                      <div class="field">
                          <label for="" class="label">Đơn giá:</label>
                          <div class="control">
                              <input type="text" class="input" name="dg">
                          </div>
                          <div id="showNameError" class="has-text-danger"></div>
                      </div>

                      <div class="field">
                        <label for="" class="label">Số lượng:</label>
                        <div class="control">
                            <input type="text" class="input" name="sl">
                        </div>
                        <div id="showNameError" class="has-text-danger"></div>
                    </div>

                      <div class="field">
                        <div class="file has-name">
                              <label class="file-label">
                                <input class="file-input" type="file" name="file">
                                <span class="file-cta">
                                      <span class="file-icon">
                                      <i class="fas fa-upload"></i>
                                      </span>
                                      <span class="file-label">
                                            Choose a file…
                                      </span>
                                      </span>
                                      <span class="file-name">
                                            Hình ảnh
                                </span>
                              </label>
                        </div>
                      </div>
                    </section>
                    <footer class="modal-card-foot">
                    <input class="button is-primary" type="submit" class="button" name="submit" value="Sửa">
                    <button class="button" onclick="myFunction('fix-<?php echo $row['id'];?>')">Cancel</button>
                    </footer>
                    </form>
                </div>
        </div>
    </tr>
     <tr></tr>
  </tbody>
<?php }}?>
</table>
    

