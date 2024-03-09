<?php

include '../action/get_all_assignment_action.php';
include '../settings/connection.php';
global $con, $row, $assignment_count;

$all = get_records();
$recent = get_recent();
$complete = get_completed_records();
$incomplete = get_incomplete_records();
$in_progress = get_inprogress_records();

$all_count = $complete_count = $incomplete_count = $in_progress_count = 0;


$all_stats = "";
$recent_stats = "";
$complete_stats = "";
$incomplete_stats = "";
$in_progress_stats = "";




while($data = $recent->fetch_assoc()){
    $chore_name = $assigned_by = "";

    if($result= $con->query("SELECT chorename FROM Chores WHERE cid =".$data['cid']))
        $chore_name = $result->fetch_assoc()['chorename'];

    if($result = $con->query("SELECT * FROM People WHERE pid =".$data['who_assigned']))
        $assigned_by = $result->fetch_assoc()['fname']. " ". $result->fetch_assoc()['lname'];

    $date_assigned = $data['date_assign'];
    $date_completed = ($data['date_completed']===null) ? " " : $data['date_completed'];

    $recent_stats .=  "<tr>
                    <td>
                    <div>"
                        .$chore_name.
                    "</div>
                    <div>"
                        .$assigned_by.
                    "</div>
                    </td>
                    <td>Date assigned: ".$date_assigned."</td>
                    <td>Date completed: ".$date_completed. "</td>
                    <td>
                        <div>
                            <a href='../view/tasks.php' id='detail-link'>Chore details</a>
                        </div>
                    </td>
                </tr>";
}

while($data = $complete->fetch_assoc()){
    $complete_stats .=  "<li>".$data['cid']."</li>";
    $complete_count += 1;
}

while($data = $incomplete->fetch_assoc()){
    $incomplete_stats .=  "<li>".$data['cid']."</li>";
    $incomplete_count += 1;
}

while($data = $in_progress->fetch_assoc()){
    $in_progress_stats .=  "<li>".$data['cid']."</li>";
    $in_progress_count += 1;
}

while($data = $all->fetch_assoc()){
    $all_stats .=  "<li>".$data['cid']."</li>";
    $all_count += 1;
}