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
        }else{
            header("Location: ../view/login_view.php");
            echo '<script>alert("Enter your name and password");</script>';
        }
    }else{
        header('Location: ../view/login_view.php');
        echo '<script>alert("Enter your name and password");</script>';
    }
exit();



// Start session using php session method
// Include the connection file
// Check if login button was clicked
//      If the above fails, stop processing and provide appropriate message or redirection.
//•     Else continue processing from the next step below
//• Collect form data and store in variables
//• Write a query to select a record from the people table using the email
//Execute the query using the connection from the connection file
//• Check if any row was return
//    • If no record found provide appropriate response (user not registered, incorrect username or password, etc.)
//    o If a record is found continue with the processing below
// Fetch the record
// Verify password
//      If verification fails provide appropriate response(incorrect username or password)
//      If it's a match, continue with the processing below.
//Create a session for user id and role id
//• Redirect to home page