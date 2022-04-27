<?php
require_once 'controllers/connect.php';
require 'controllers/TaskController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    
<?php 
    require 'Components/nav.php'; 
?>

    <div>
        <div class="TaskForm" >
        
            <h1>Dodaj Zadanie : </h1>
            
            <form action="controllers/AddTask.php" method="POST">
                Title <br>
                <input type="text" name="title" id="title"> <br>
                Body <br>
                <input type="text" name="body" id="body"> <br>

                <button type="submit"> Ok</button>
            </form>
        </div>

        <div id ="ListTask">
            <div id="ListTaskTitle">
                <h1>  Lista Zadań do wykonania :</h1> 
            </div>

            <div class="BrakeLine"> </div>

            <?php 
                if(isset($user))
                {
                    ShowTasks($conn,$user); 
                }else
                {
                    echo '<h1> musisz się zalogować </h1>';
                }
            ?>
        </div>
    </div>
</body>
</html>