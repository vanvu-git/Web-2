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
                <input type="text" class="input" name="dg">
            </div>
            <div id="showNameError" class="has-text-danger"></div>
        </div>

        <div class="select">
        <select>
            <option>Select dropdown</option>
            <option>With options</option>
        </select>
        </div>

        
        <input class="button is-primary" type="submit" class="button" name="submit" value="Sửa">
</form>