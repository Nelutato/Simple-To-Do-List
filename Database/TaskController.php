<?php
    require_once 'connect.php';

    function ShowTasks($conn, $user)
    {
        $getTasks = $conn->prepare("SELECT title, content FROM Tasks WHERE user_id= ".$user);
        try {
            $getTasks->execute();
        } catch (PDOException $e) {
            echo $e;
        }
        $Tasks = $getTasks->fetchAll();

        foreach ($Tasks as $key => $value) {
            echo"<div class='card'>";
                echo $key.':';
                echo '<h1>';
                echo $value['title'];
                echo '</h1>';
                echo'</br>'.$value['content'].'<br/>';
            echo "</div>" ;
        }
    }

 