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

    
    <div class="field">
        <div class="control">
            <input type="submit" class="button" name="submit" value="Thêm">
        </div>
    </div>
</form>
