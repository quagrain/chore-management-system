<?php

include '../settings/connection.php';


function get_records(){
    global $con;
    $sql = "SELECT * FROM Assignment";

    if (!$con->query($sql)) {
        echo "Failed";
        exit();
    }
    return $con->query($sql);
}

