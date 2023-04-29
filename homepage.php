<?php
session_start();
// print_r($_SESSION);
if (array_key_exists('error', $_SESSION))
    echo $_SESSION['error'];
if (array_key_exists('user', $_SESSION)) {
    echo "Добро пожаловать";
    echo "<br>";
    echo "<a href = '/personalarea.php'>личный кабинет</a>";
    echo "<br>";
    echo "<a href = '/logout.php'>разлогиниться</a>";
    // var_dump($_SESSION['user']);
    }
else{
    echo "<div class='regisr'> <h1>Добро пожаловать на сайт</h1>";
?>
    <br>
    <a href = "/registration.php">зарегистрируйтесь</a> или <a href = "/login.php">авторизуйтесь</a></div>

<?php }?>


