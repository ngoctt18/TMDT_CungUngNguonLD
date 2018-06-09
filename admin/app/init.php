<?php
    session_start();
    include_once('../config.php');

    if (!isset($_SESSION['username'])){
        header('location: login.php');
    }

    include_once('func/posts.php');
    include_once('func/users.php');
?>