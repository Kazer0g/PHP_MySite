<?php
session_start();
require_once('connect_db.php');
$db=connect();
    if (array_key_exists('password',$_POST)){
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        try {
            $age = intval($_POST['age']);
            $grade = intval($_POST['grade']);
        } catch (Exception $e){
            $_SESSION['error'] = $e;
            header('Location: /validation.php');
        }

        if ($_POST['password']===$_POST['password2'] and strlen($_POST['password'])>6 and (preg_match('/([a-z][A-Z])|([A-Z][a-z])/',$_POST['password']))){
            echo 'password good<br>';
            $user = $db->query("SELECT * FROM users WHERE email='$email'")->fetchArray();
            if ($user){
                $_SESSION['error'] = "Такой пользовтатель уже существует";
                header('Location: /registration.php');
            }
            if (gettype($grade) != 'integer' or gettype($age) != 'integer'){
                $_SESSION['error'] = "некорректно введен класс или возраст";
                header('Location: /registration.php');
            }
            $insert = $db->query("INSERT INTO users(login, email, password, first_name, last_name, age, grade) VALUES('$login','$email','$password', '$name', '$surname', '$age', '$grade')");
            echo 'email good<br>';
            $user = $db->query("SELECT * FROM users WHERE login='$login' AND password='$password'")->fetchArray();
            if ($user!= NULL){
                $_SESSION['user']=$user;
                header('Location: /homepage.php');
                }

            }
        else {
            $_SESSION['error'] = 'вы не правильно ввели пароль';
            header('Location: /registration.php ');
                }
        }
    else{
        unset($_SESSION['error']);
        header('Location: /registration.php ');
    }

?>