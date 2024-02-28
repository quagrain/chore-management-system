<?php

session_start();
include '../settings/connection.php';
global $con;

if (isset($_POST['login-submit'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "SELECT * FROM People WHERE email = '$email'";

    $result = $con->query($query);

    if($result->num_rows < 1){
        echo '<script>alert("Incorrect email!");</script>';
        echo '<script>window.location.href="../login/login_view.php";</script>';
        exit();
    } else{
        $row = $result->fetch_assoc();
        $hash_pwd = $row['passwd'];
        $hash = password_verify($pwd, $hash_pwd);
        if(!$hash){
            echo '<script>alert("Incorrect Password!");</script>';
            echo '<script>window.location.href="../login/login_view.php";</script>';
            exit();
        }
        else{
            $_SESSION['pid'] = $row['pid'];
            $_SESSION['rid'] = $row['rid'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            header("Location: ../view/dashboard.php");
        }
    }

}
    echo $_SESSION['pid'];
