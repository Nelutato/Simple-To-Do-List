<nav >
    <?php
        if(isset($_COOKIE['user']))
        {
            $user = $_COOKIE['user'];
            echo '<a href="Database/logout.php"> Wyloguj się </a>';
        }else{
            echo '<a href="login.php"> Zaloguj się </a>';
            echo '<a href="register.php"> Zalrejestruj się </a>';
        }
    ?>

    <a href="index.php"> Strona główna </a>
</nav>