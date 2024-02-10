<?php

    #session_start();
    #include '../settings/connection.php';


    

    if(isset($_POST['login-submit'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        if(!empty($email) && !empty($pwd)){
            echo $email;
            echo $pwd;  
            echo '<script>alert("Logged in");</script>';
            exit(); 
        }else{
            header("Location: ../view/index.html");
            echo '<script>alert("Enter your name and password");</script>';
            exit();
        }
    }else{
        header('Location: ../view/index.html');
        echo '<script>alert("Enter your name and password");</script>';
        exit();
    }
