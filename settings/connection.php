<?php

$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'chores_mgt';


$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE) 
or die("Could not connect to database");

if($con->connect_error){
    die("Connection failed: " . $conn->connect_error);
}