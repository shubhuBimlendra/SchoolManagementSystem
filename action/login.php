<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == 'admin@example.com' && $password == 'admin@sms'){
       session_start();
        $_SESSION['login'] = true;
        header('Location:../index.php');
    } else{
        echo "Invalid Credentials";
    }
}

?>