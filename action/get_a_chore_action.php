<?php

include '../settings/connection.php';


function get_chore($id) {
    global $con;
    $sql = "SELECT * FROM chores WHERE cid = $id";
    if($result = $con->query($sql)){
        if ($result->num_rows > 0) return $result;
    }
    return $result;
}

