<?php

include '../settings/connection.php';


function get_records(){
    global $con;
    $sql = "SELECT * FROM Assignment";

    if (!$con->query($sql)) {
        echo "Failed to get assignments!";
        exit();
    }
    return $con->query($sql);
}

