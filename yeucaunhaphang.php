<nav class="columns has-text-centered">
    <div class="column is-12 has-text-weight-bold mt-4" style="background-color:#39d6db;">
        <div  style="color:white;">Tạo phiếu nhập hàng</div>
    </div>
</nav>
<form action="taophieunhap.php" method="POST">
                
        <div class="field">
            <label for="" class="label">ID:</label>
            <div class="control">
                <input type="text" class="input" name="ID" value="" id="ID">
            </div>    
            <div id="showPasswordError" class="has-text-danger"></div>
        </div>

        <div class="field">
            <label for="" class="label">ID nhà cung cấp:</label>
            <div class="control">
                <input type="text" class="input" name="ncc">
            </div>
            <div id="showNameError" class="has-text-danger"></div>
        </div>
        <div class="field">
            <div class="control">
                <input type="submit" class="button is-link" name="submit" value="Thêm">
            </div>
            <div id="showNameError" class="has-text-danger"></div>
        </div>
</form>