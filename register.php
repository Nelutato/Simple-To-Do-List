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
    <h1 align="center">
        Rejestracja 
    </h1>
    <div class="LoginForm">
        <form action="controllers/UserRegister.php" method="POST">
            email:  <br>
            <input type="email" name="email" required> <br>
            Login :  <br>
            <input type="text" name="login" required> <br>
            Hasło :  <br>
            <input type="password" name="password" required> <br>
            <button type="submit"> Zarejestruj Się</button> <br>
        </form>
        <?php
            if(isset($error))
            {
                echo $error;
            }
        ?>
    </div>
</body>
</html>