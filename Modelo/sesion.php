<?php
    session_start();
    if (isset($_SESSION['nickname'])) {
        header("Location: ../Vista/home.php");
    }else{
        header("Location: ../index.php");
    }
?>