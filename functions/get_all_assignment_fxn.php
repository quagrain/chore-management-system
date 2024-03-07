<?php
include '../action/get_all_assignment_action.php';
include '../settings/connection.php';
global $con;

$assignments = get_records();
$row = '';


while ($data = $assignments->fetch_assoc()) {
    if($chore_name = $con->query("SELECT chorename FROM Chores WHERE cid =".$data['cid'])){
        $chore_name = $chore_name->fetch_assoc()['chorename'];
    }
    if($status = $con->query("SELECT sname FROM Status WHERE sid =".$data['sid'])){
        $status = $status->fetch_assoc()['sname'];
    }
    if($assigned_by = $con->query("SELECT fname FROM People WHERE pid =".$data['who_assigned'])){
        $assigned_by = $assigned_by->fetch_assoc()['fname'];
    }

    $row .= "<tr>   
                <td>".$chore_name."</td>
                <td>".$assigned_by."</td>
                <td>".$data['date_assign']."</td>
                <td>".$data['date_due']."</td>
                <td>".$status."</td>
                <td>
                    <div class='action-button'>
                        <a href=''><img src='../assets/images/delete.svg'></a>
                    </div>
                    <div class='action-button'>
                        <a href=''><img src='../assets/images/delete.svg'></a>
                    </div>
                    <div class='action-button'>
                        <a href=''><img src='../assets/images/delete.svg'></a>
                    </div>
                </td>
                </tr>"
    ;
}

