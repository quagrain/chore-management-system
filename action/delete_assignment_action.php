<?php

include '../settings/connection.php';
include '../functions/dialog_box.php';
global $con;

if(!isset($_GET['assignment_id'])){
    header('../admin/assign_chore_view.php');
    exit();
}

$assignment_id = $_GET['assignment_id'];

if($del_row = $con->query("DELETE FROM Assignment WHERE assignmentid= $assignment_id")){
    echo dialogBox('Deleted Assignment','../admin/assign_chore_view.php');
}else {
    echo "Error: ' . $con->error' ";
}
exit();