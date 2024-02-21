<?php

include '../settings/connection.php';
    
    $form_results = $_POST;

    if(isset($_POST['submit'])){
        $fname = $form_results["f-name"];
        $lname = $form_results["surname"];
        $gender = $form_results["gender"];
        $dob = $form_results["dob"];
        $fid = $form_results["role"];
        $tel = $form_results["phone"];
        $email = $form_results["email"];
        $passwd = $form_results["pwd"];
        $confirm_pwd = $form_results["pwd-confirm"];

    }

    if($passwd != $confirm_pwd){
        echo "<script>alert('Passwords must match');</script>";
        header("Location: ../login/register_view.php");
        exit();
    }


    $hash_pwd = password_hash($passwd, PASSWORD_DEFAULT);

    $query = "INSERT INTO People (rid, fid, fname, lname, gender, dob, tel, email, passwd)
        VALUES (3, $fid, '$fname', '$lname', $gender, '$dob', $tel, '$email', '$hash_pwd')";



     if($con->query($query) === TRUE) {
         header("Location: ../login/login_view.php");
     }
     else {
         echo '<script>alert("Encountered an error. Try again.");</script>';
         header("Location: ../login/register_view.php");
     }
     $con-> close();




