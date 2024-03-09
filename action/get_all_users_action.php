<?php

include '../settings/connection.php';

function get_users(){
    global $con;
    $sql = "SELECT * FROM People";

    if (!$con->query($sql)) {
        echo "Failed to get users!";
        exit();
    }
    return $con->query($sql);
}