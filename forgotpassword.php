
<?php
// echo require_once('header.php');

session_start(); //стартуем сессию

?>

<br>
<div class="forgot_password">
Восстановление пароля
<form action="core/password_recovery.php" method="POST">

	<label for="email">email</label>
    <input id='email' name = "email" type ="email">
    <button type="submit">Восстановить пароль</button>
</form>

<a href = "/login.php">авторизуйтесь</a>
</div>