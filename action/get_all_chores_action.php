<?php

include '../settings/connection.php';

function list_chores()
{
    global $con;
    $query = "SELECT * FROM Chores";
    if ($con->query($query)) {
        echo "Failed";
        exit();
    }
    return $con->query($query);
}
