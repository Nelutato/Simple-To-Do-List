<?php
   require_once 'connect.php';

    if( isset($_POST['body']) && isset($_POST['title']) && isset($_COOKIE['user'])) 
    {
        $body =  filter_var($_POST['body'],FILTER_SANITIZE_STRING);
        $title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
         
        $putTask = $conn->prepare("INSERT INTO `Tasks` (`id`, `user_id`, `title`, `content`) VALUES (NULL, '".$_COOKIE['user']."', '".$title."', '".$body."')");
        try{
            $putTask->execute();
        }catch(PDOException $e){
            echo $e;
        }
        header('Location: ../index.php');
    }else
    {
        header('Location: ../login.php');
    }