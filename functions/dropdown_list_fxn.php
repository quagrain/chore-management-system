<?php
include '../action/get_all_users_action.php';
include '../action/get_all_chores_action.php';
include '../settings/connection.php';
global $con;

$users = get_users();
$chores = list_chores();

$user_drop = '';
$chores_drop = '';

while ($user_data = $users->fetch_assoc()) {
    $user_drop .= "<option value=". $user_data['pid'] . ">". $user_data['fname'] ."</option>";
}
while ($chore_data = $chores->fetch_assoc()) {
    $chores_drop .= "<option value=" . $chore_data['cid'] . ">" . $chore_data['chorename'] . "</option>";
}

