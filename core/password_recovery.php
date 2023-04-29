<?php 
session_start();
require_once('connect_db.php');
$db=connect();
if (array_key_exists('error',$_SESSION)){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}

try{
    $email = $_POST['email'];


    $user = $db->query("SELECT * FROM users WHERE email='$email'")->fetchArray();
    if ($user){
        $usr = $user;
        $_SESSION['user']=$usr;
        mail('$email', 'Восстановления пароля', '$password');
        $password = $db->query("SELECT password FROM users WHERE email = '$email'")->fetchArray();
        $_SESSION['error']='пароль был выслан вам на почту';
        header('Location: /login.php');
    }
    else{
            $_SESSION['error']='пользователь c данной почтой не зарегестрирован';
            header('Location: /login.php');     
    }
}
catch (Exception $e) {
            $_SESSION['error']=$e;
            header('Location: /login.php');
}