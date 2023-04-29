<div class='regist'>
смена пароля
<?php
session_start();
// echo require_once('header.php');
if (array_key_exists('error',$_SESSION))
    echo $_SESSION['error'];
    echo '<br>';
    unset($_SESSION['error']);
    ?>
<form action='/core/change_password.php' method='POST'>
    <lable for = 'password'>старый пароль</lable>
    <input type='password' id=password name='password' placeholder="введите старый пароль">
    <br>

    <lable for = 'newpassword1'>новый пароль</lable>
    <input type='newpassword' id='newpassword1' name='newpassword1' placeholder='введите новый пароль'>
    <br>
    <lable for = 'newpassword2'>новый пароль еще раз</lable>
    <input type='newpassword' id='newpassword2' name='newpassword2' placeholder='введите новый пароль'>
    <br>
    <input type='submit'>
</form>
<br>    
<a href = "/personalarea.php">личный кабинет</a>
