<?php
session_start();
print_r($_SESSION);
require_once('core/connect_db.php');
$db=connect();
echo '<br>';
echo 'login: ', $_SESSION['user']['login'];
echo '<br>';
echo 'email: ', $_SESSION['user']['email'];
echo '<br>';
echo 'password: ', $_SESSION['user']['password'];
echo '<br>';
echo 'name: ', $_SESSION['user']['first_name'];
echo '<br>';
echo 'surname: ', $_SESSION['user']['last_name'];
echo '<br>';
echo 'age: ', $_SESSION['user']['age'];
echo '<br>';
echo 'grade: ', $_SESSION['user']['grade'];
echo '<br>';
echo "<a href = '/changepassword.php'>сменить пароль</a>";
echo '<br>';
echo "<a href = '/homepage.php'>домой</a>";

