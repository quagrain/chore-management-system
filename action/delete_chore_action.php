<?php

include '../settings/connection.php';

global $con, $sql;

if(isset($_GET['id'])) {
    $chore_id = $_GET['id'];
    $sql = "DELETE FROM chores WHERE cid = $chore_id";
    $c_name = "SELECT chorename FROM chores WHERE cid = $chore_id";

    if ($con->query($c_name)) {
        $result = $con->query($c_name);
        $row = $result->fetch_assoc();
        $chore_name = $row['chorename'];
        $con->query($sql);
        echo '<script>alert("Deleted chore: ' . $chore_name . '!");</script>';
        echo '<script>window.location.href="../admin/chore_control_view.php";</script>';
    }
} else {
    echo "Error: ' . $sql . $con->error' ";
}
exit();


