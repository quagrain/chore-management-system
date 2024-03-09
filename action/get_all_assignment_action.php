<?php
include '../settings/connection.php';

function get_records(){
    global $con;
    $sql = "SELECT * FROM Assignment";

    if (!$result = $con->query($sql)) {
        echo "Failed to get assignments!";
        exit();
    }
    return $result;
}

function get_inprogress_records(){
    global $con;
    $sql = "SELECT * FROM Assignment WHERE sid = 2";

    if (!$result = $con->query($sql)) {
        echo "Failed to get assignments in progress!";
        exit();
    }
    return $result;
}

function get_incomplete_records(){
    global $con;
    $sql = "SELECT * FROM Assignment WHERE sid = 4";

    if (!$result = $con->query($sql)) {
        echo "Failed to get incomplete assignments!";
        exit();
    }
    return $result;
}

function get_completed_records(){
    global $con;
    $sql = "SELECT * FROM Assignment WHERE sid = 3";

    if (!$result = $con->query($sql)) {
        echo "Failed to get completed assignments!";
        exit();
    }
    return $result;
}

function get_recent(){
    global $con;
    $sql = "SELECT * FROM Assignment WHERE sid = 2 ORDER BY date_assign DESC LIMIT 3";

    if (!$result = $con->query($sql)) {
        echo "Failed to get last 3 in progress assignments!";
        exit();
    }
    return $result;
}