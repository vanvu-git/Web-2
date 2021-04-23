<?php 

    $user = null;
    session_start();
    if(isset($_SESSION['user']))
        $user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsoleShop</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <?php include 'style.php';?>
    
</head>
<body class="container is-fuild">
    <header class="content p-4">
        <h1 class="title is-1"><a href="index.php" class="has-text-danger">ConsoleShop</a></h1>
        <h2 class="subtitle is-4">Chúng tôi bán máy game xịn xò</h2>
        <form action="search.php" method="GET">
            <input type="search" class="input" placeholder="Tìm kiếm" name="search">
        </form>
        <a href="trangCaNhan.php" class="has-text-primary-dark is-size-5"><?php if($user != null) echo htmlspecialchars('Chào, ' . $user['username']);?></a>
        <a href="template/xulyDangXuat.php"><?php if($user != null) echo 'Đăng Xuất';?></a>
    </header>
    
    <hr>

    <nav class="columns has-text-centered">
        <div class="column is-3">
            <a href="index.php">Home</a>
        </div>

        <div class="column is-3">
            <a href="productPage.php">Product</a>
        </div>

        <div class="column is-3">
            <a href="more.php">More</a>
        </div>
        <?php if(!isset($user)): ?>
        <div class="column is-3">
            <a href="login.php">Login</a>
        </div>
        <?php endif; ?>
    </nav>