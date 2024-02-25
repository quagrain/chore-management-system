<?php

//include '../admin/edit_chore_view.php';
//include '../settings/connection.php';
//
//$cid = $chore_id;
//$chore_name = $_GET['chore_name'];
//
//$sql = "UPDATE Chores SET chorename = '$chore_name' WHERE cid = $cid";
//
//
//if ($con->query($sql) === TRUE) {
//    echo '<script>alert("Chore updated successfully!");</script>';
//    echo '<script>window.location.href="../admin/chore_control_view.php";</script>';
//    exit();
//} else {
////    echo '<script>alert("Error: ' . $sql . $con->error . '");</script>';
//    echo $cid;
//    echo $chore_name;
//}

include '../settings/connection.php';
include '../functions/chore_fxn.php';

$c_id = $chore_id;
$chore_name = $_GET['chore_name'];
$sql = "UPDATE Chores SET chorename = '$chore_name' WHERE cid = $cid";


if ($con->query($sql) === TRUE) {
    echo '<script>alert("Updated!");</script>';
    echo '<script>window.location.href="../admin/chore_control_view.php";</script>';
} else {
    echo '<script>alert("Error: ' . $sql . $con->error . '");</script>';
}