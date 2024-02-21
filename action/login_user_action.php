<?php

session_start();
include '../settings/connection.php';

if (isset($_POST['login-submit'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "SELECT * FROM People WHERE email = '$email'";

    $result = $con->query($query);

    if($result->num_rows < 1){
        header("Location: ../login/login_view.php");
        echo "<script>confirm('User not found')</script>";
        exit();
    }
    else{
        $row = $result->fetch_assoc();
        $hash_pwd = $row['passwd'];
        $hash = password_verify($pwd, $hash_pwd);
        if(!$hash){
            header("Location: ../login/login_view.php");
            echo "<script>alert('Incorrect password')</script>";
            exit();
        }
        else{
            $_SESSION['pid'] = $row['pid'];
            $_SESSION['rid'] = $row['rid'];
            header("Location: ../view/dashboard.html");
        }
    }

}