<?php
//global $con;

$SERVER   = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'chores_mgt';

$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE) or die("Could not connect to database");

if($con->connect_error) die("Connection failed: " . $con->connect_error);
