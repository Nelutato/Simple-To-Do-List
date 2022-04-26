<?php
    //session
    session_start();
    session_destroy();
    // cookie
    setcookie("user", null, time() - 3600, '/');    
    unset($_COOKIE['user']);
    //conn
    $conn = null;

    header('Location: ../index.php');


