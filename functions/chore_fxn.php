<?php

include '../action/get_all_chores_action.php';

$var_data = list_chores();

$data = '';

while ($row = $var_data->fetch_assoc()) {
    $data .= "<tr>
                <td>".$row['chorename']."</td>
                <td>
                    <div class='action-button' id='check-button'>
                        <a href=''><img src='../assets/images/delete.svg'></a>
                    </div>
                    <div class='action-button' id='edit-button' style='margin-top: 10px'>
                        <a href=''><img src='../assets/images/edit.svg'></a>
                    </div>
                </td>
              </tr>";
}

