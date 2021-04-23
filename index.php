<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
</head>

<body>
<?php 
    $loi = '';
    if(isset($_POST['submit'])){
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $conn = mysqli_connect('localhost', 'root', '', 'console-beta');

        
            if(!$conn){
                echo "Failed to connect to database";
                exit();
            }
            
            $sql = "select * from nhanvien where username = '$username' and password = '$password'";
            
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $user = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['user'] = $user;
                header("Location:admin.php");
            }
            else 
               echo "Sai mật khẩu hoặc sai username";
            mysqli_close($conn);
        }

    }

?>
<form action="login-admin.php" method="POST" class="p-3 m-5 box" name="admin">
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

</div>
</body>
</html>