<?php

session_start();
function check_login(){
    if(!isset($_SESSION['uid'])){
        header('Location: ../login/login_view.php');
        die();
    }
}


function check_roleID(){
    if(isset($_SESSION['rid'])){
        return $_SESSION['rid'];
    } else {
        return false;
    }
}