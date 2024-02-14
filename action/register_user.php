<?php

include '../settings/connection.php';
    
    $form_results = $_POST;

    if(isset($_POST['submit'])){
        $rid = 3;
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
        header("Location: ../view/register.html");
        echo "<script>alert('Passwords must match');</script>";
        exit();
    }


    $hash_pwd = password_hash($passwd, PASSWORD_DEFAULT);

    $query = "INSERT INTO People (rid, fid, fname, lname, gender, dob, tel, email, passwd) VALUES ($rid, $fid, '$fname', '$lname', $gender, '$dob', $tel, '$email', '$hash_pwd')";


     if($con->query($query) === TRUE) {
         echo "New record created successfully";
         header("Location: ../view/login.html");
     }
     else {
         header("Location: ../view/register.html");
         echo '<style>alert("Encountered an error. Try again.")</style>';
     }
     $con-> close();

