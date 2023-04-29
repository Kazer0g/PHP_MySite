<div class='regist'>
авторизация
<?php
session_start();
// echo require_once('header.php');
if (array_key_exists('error',$_SESSION))
    echo $_SESSION['error'];
    echo '<br>';
    unset($_SESSION['error']);
    ?>
<form action='/core/chek_login.php' method='POST'>
    <lable for = 'login'>login</lable>
    <input type='text' id=login name='login' placeholder="введите логин">
    <br>

    <lable for = 'password'>pass </lable>
    <input type='password' id='password' name='password' placeholder='введите пароль'>
    <br>
    <input type='submit'>
</form>
<br>    
<a href = "/registration.php">зарегистрируйтесь</a>
<br>
<a href = "/forgotpassword.php">забыли пароль?</a>