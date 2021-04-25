<nav class="columns has-text-centered">
    <div class="column is-12 has-text-weight-bold mt-4" style="background-color:#39d6db;">
        <div  style="color:white;">Tạo phiếu nhập hàng</div>
    </div>
</nav>
<form action="xulysua.php" method="POST">
                
    <input type="text" class="is-hidden" name="msp" value="<?php echo $row['id'] ;?>">
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

        <button class="button is-link" type="button" onclick="myFunction('sp')">Chọn sản phẩm</button>
        <div class="modal" id="sp">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
            <p class="modal-card-title">Thêm sản phẩm</p>
            <button class="delete" type="button" onclick="myFunction('sp')" aria-label="close"></button>
            </header>
            <section class="modal-card-body">


            <div class="field">
                    <label for="" class="label">ID sản phẩm:</label>
                    <div class="select">
                        <select id="idsp">
                            <?php  
                                $conn = new mysqli("localhost","root","","console-beta");
                                if(!$conn)
                                {
                                    echo"ket noi that bai";
                                }
                                else
                                $sql = "SELECT `id` FROM  sanpham";
                                if ($result = $conn -> query($sql)) {
        
                                    while ($row = $result -> fetch_array()) {
                            ?>
                            <option><?php echo $row['id']; ?></option>
                            <?php }} ?>
                        </select>
                    </div>
                    <div id="showNameError" class="has-text-danger"></div>
            </div>
            
            <div class="field">
                    <label for="" class="label">Số lượng:</label>
                    <div class="control">
                        <input type="text" class="input" name="sl" id="sl">
                    </div>
                    <div id="showNameError" class="has-text-danger"></div>
            </div>
            <div class="field">
                <label for="" class="label">Đơn gíá:</label>
                <div class="control">
                    <input type="text" class="input" name="dg" Value="2000">
                </div>
                <div id="showNameError" class="has-text-danger"></div>
            </div>
            <button type="button" class="button is-danger" onclick="add_ctsp('x')">Thêm</button>

            </section>
            <footer class="modal-card-foot">
            <button class="button" type="button" onclick="myFunction('sp')">Đóng</button>
            </footer>
        </div>
        </div>
       
</form>