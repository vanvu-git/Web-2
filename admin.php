<?php  
include ('../template/mysqlconnection.php'); 
    $account = null;
    session_start();
    if(isset($_SESSION['account']))
        $account = $_SESSION['account'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsoleShop/Admin</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
<script>
function myFunction(x) {
    var element = document.getElementById(x);

    if (element.classList) { 
      element.classList.toggle("is-active");
    } else {
      var classes = element.className.split(" ");
      var i = classes.indexOf("is-active");

      if (i >= 0) 
        classes.splice(i, 1);
      else 
        classes.push("is-active");
        element.className = classes.join(" "); 
    }
}  
</script>
</head>
<body>
      
    <?php if(isset($_SESSION['account'])) { ?> 
   <div id = "tn" >
     <?php require('topnav.php'); ?>
    </div>

   <div class="columns m-2">
    <div id = "lmn" class="column is-3">
     <?php require('left_menu.php'); ?>
    </div>
    
    <div class="column is-9">
      <?php include('content.php'); ?>
    </div>
    
    <?php } else header("location:index.php");?>

</body>
</html>