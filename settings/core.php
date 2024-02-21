<?php

session_start();
function check_login(){
    if(!isset($_SESSION['uid'])){
        header('Location: ../login/login_view.php');
        die();
    }
}