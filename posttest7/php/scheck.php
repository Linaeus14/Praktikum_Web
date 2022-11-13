<?php 
    session_start();
    if(isset($_SESSION["sida"])){
        header("Location: dashboard/admin.php", TRUE, 301);
        die();
    }
    else if(isset($_SESSION["sidu"])){
        header("Location: dashboard/user.php", TRUE, 301);
        die();
    }
    else{}
?>