<?php

session_start();
function check_login(){
    if(!isset($_SESSION['pid'])){
        header('Location: ../login/login_view.php');
        exit();
    }
}


function check_roleID(){
    if(isset($_SESSION['rid'])){
        return $_SESSION['rid'];
    } else {
        return false;
    }
}