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
        Logowanie
    </h1>
    <div class="LoginForm">
        <form action="Database/UserLogin.php" method="POST">
            Login :  <br>
            <input type="text" name="login"> <br>
            Hasło :  <br>
            <input type="password" name="password" > <br>
            <button type="submit"> Zaloguj</button> <br>
        </form>
    </div>
</body>
</html>