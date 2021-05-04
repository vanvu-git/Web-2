<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <script src="myjs.js"></script>
</head>

<body>
<?php 
  include ('../template/mysqlconnection.php'); 
  $temp = 0;
    if(isset($_POST['submit'])){
        if(isset($_POST['username'])){
         

            $username = $_POST['username'];
            $password = $_POST['password'];

            $conn = new mysqlconnection("localhost", "root", "", "console-beta");

            $password = md5($password);
            if(!$conn){
                echo "Failed to connect to database";
                exit();
            }
            
            $sql = "select * from nhanvien where username = '$username' and password = '$password'";
            
            $result = $conn->executeQuery($sql);
            if(mysqli_num_rows($result) > 0){
                $account = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['account'] = $account;
                header("Location:admin.php");
            }
            else $temp++;
              
            
        }

    }

?>
<form action="index.php" method="POST" class="p-3 m-5 box" name="admin">
<div class="field">
  <label class="label">Tài khoản</label>
  <div class="control">
    <input class="input" type="text" name="username" placeholder="Tài khoản">
  </div>
</div>
<div class="field">
  <label class="label">Mật khẩu</label>
  <div class="control">
    <input class="input" type="password" name="password" placeholder="Mật khẩu">
  </div>
</div>
<div class="field">
        <div class="control">
            <input type="submit" class="button"  name="submit" value="Login">
        </div>
    </div>
</form>





<?php if($temp > 0)
{  ?>
<div class="modal is-active" id="tb">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Thông Báo!!!</p>
      <button class="delete" aria-label="close" onclick="myFunction('tb')"></button>
    </header>
    <section class="modal-card-body">
       sai tài khoản hoặc mật khẩu !!
    </section>
    <footer class="modal-card-foot">
      
      <button class="button" onclick="myFunction('tb')">Cancel</button>
    </footer>
  </div>
</div>
<?php } ?>
</div>
</body>
</html>

