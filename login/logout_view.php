<?php

session_start();
unset($_SESSION['pid']);
unset($_SESSION['rid']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
header('Location: login_view.php');
exit();
