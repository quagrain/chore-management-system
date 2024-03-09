<?php

include '../action/get_all_chores_action.php';


$var_data = list_chores();

$data = '';
$row = $var_data->fetch_assoc();

while ($row = $var_data->fetch_assoc()) {
    $chore_id = $row['cid'];
    $data .= "<tr>   
                <td>".$row['chorename']."</td>
                <td>
                    <div class='action-button delete' id='''delete-button'>
                        <a href='../action/delete_chore_action.php?id=$chore_id'><img src='../assets/images/delete.svg'></a>
                    </div>
                    <div class='action-button' id='edit-button' style='margin-top: 10px'>
                        <a href='../admin/edit_chore_view.php?id=$chore_id'><img src='../assets/images/edit.svg'></a>
                    </div>
                </td>";
}