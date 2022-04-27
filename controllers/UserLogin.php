<?php
require_once 'connect.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login =  $_POST['login'];
    $password = $_POST['password'];

    $getUser = $conn->prepare("SELECT * FROM users WHERE username = '" . $login . " ' ");
    
    try {
        $getUser->execute();
    } catch (PDOException $e) {
        echo $e;
    }
    $user = $getUser->fetch(PDO::FETCH_ASSOC);

    if(password_verify($password,$user['password']))
    {
        setcookie('user', $user['id'], time() + (86400 * 30), '/');
        header('Location: ../index.php');
    }else
    {
        header('Location: ../login.php');
    }
    
} else {
    echo 'nie działa';
}
