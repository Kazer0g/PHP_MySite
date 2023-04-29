<?php
session_start();
require_once('connect_db.php');
$db=connect();
if (!array_key_exists('password', $_POST)){
    header('Location: /changepassword.php');
}
try{
    $email = $_SESSION['user']['email'];
    $password = md5($_POST['password']);
    $password1 = md5($_POST['newpassword1']);
    $password2 = md5($_POST['newpassword2']);
    if ($password == $_SESSION['user']['password']){
        if ($password1==$password2 and strlen($_POST['newpassword1'])>6){
            $_SESSION['user']['password'] = $password1;
            $changing = $db->query("UPDATE users SET password='$password1' WHERE email='$email'");
            $_SESSION['error'] = 'пароль успешно сменен';
            header('Location: /changepassword.php ');
        } else {
            $_SESSION['error'] = 'новые пароли не свопадают или не соответствуют требовниям';
            header('Location: /changepassword.php ');
        }
    }
    else {
        $_SESSION['error'] = 'вы не правильно ввели пароль';
        header('Location: /changepassword.php ');
    }
    
}
catch (Exception $e) {
    $_SESSION['error']=$e;
    header('Location: /changepassword.php');
}