<?php 
    session_start();
    $_SESSION['account'] = null;
    session_unset();
    header("Location: index.php");
?>