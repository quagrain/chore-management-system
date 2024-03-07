<?php

include '../settings/connection.php';
global $con;
session_start();
$results = $_GET;

if(isset($_GET['submit'])){
    $cid = $results['assign-chore'];
    $sid = 1;
    $date_assign = date("Y/m/d");
    $due_date = $results['due-date'];
    $img = null;
    $assigned_by = $_SESSION['pid'];
}

$query = "INSERT INTO Assignment (cid, sid, date_assign,date_due, who_assigned)
            VALUES($cid,  $sid, '$date_assign', '$due_date', $assigned_by)";

if($con->query($query)) {
    echo '<script>alert("Assigned!");</script>';
    echo '<script>window.location.href="../admin/assign_chore_view.php";</script>';
}else{
    echo 'Error: ' . $query . ': ' . $con->error;
}
