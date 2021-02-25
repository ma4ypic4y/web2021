<?php

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $pass = md5($pass."sol123");

    $mysql = new mysqli('localhost','root','','register-bd');

    $result = $mysql->query("SELECT * FROM `users` where `login` = '$login' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();

    if(count ($user)==0){
        echo "User is not found";
        exit();
    }
    
 
    
    setcookie('user', $user['name'], time() + 3600, "/");
    
    

    $mysql->close();
    header('Location: /php_form/');




?>