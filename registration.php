<?php
// echo require_once('header.php');

session_start(); //стартуем сессию

print_r($_SESSION);
 // для проверки 
if (array_key_exists('error',$_SESSION)){
echo 'вы не правильно ввели данные';
unset($_SESSION['error']);
}
?>
<br>
<div class="regist">
Регистрация
<form action="core/validation.php" method="POST">

    <label for="login">Логин</label>
    <input id='login' name = 'login' type ="text">
    <br>
	<label for="email">email</label>
    <input id='email' name = "email" type ="email">
    <br>
    <label for="password">password</label>
    <input id='password' name = 'password' type ="password"  placeholder="введите пароль">
    <br>
    <label for="password2">re passwd</label>
    <input id='password2' name = 'password2' type = "password" placeholder="повторите пароль">
    <br>

    <label for="name">name</label>
    <input id='name' name = "name" type ="name">
    <br>
    <label for="surname">surname</label>
    <input id='surname' name = "surname" type ="surname">
    <br>
    <label for="age">age</label>
    <input id='age' name = "age" type ="age">
    <br>
    <label for="grade">grade</label>
    <input id='grade' name = "grade" type ="grade">


    <button type="submit">Зарегистрироваться</button>
</form>

<a href = "/login.php">авторизуйтесь</a>
</div>