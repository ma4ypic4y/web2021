<?php

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    
   if( mb_strlen($login)< 5 || mb_strlen($login) > 90) { 
       echo "Login length exceeded!";
       exit();
    } else if(mb_strlen($name)<3 || mb_strlen($name) > 50){
       echo "Name length exceeded!";
       exit();
    } else if(mb_strlen($pass)<=6 || mb_strlen($pass) > 50){
       echo "Password should be 6 to 32 characters!";
       exit();
    }

    $pass = md5($pass."sol123");

    $mysql = new mysqli('localhost','root','','register-bd');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login', '$pass','$name')");

    $mysql->close();
    header('Location: /php_form/');
?>