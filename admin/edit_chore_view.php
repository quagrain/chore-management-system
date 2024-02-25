<?php

include '../settings/core.php';
include '../action/get_a_chore_action.php';
check_login();

if (isset($_GET['id'])) {
    $chore_id = $_GET['id'];
    $var_data = get_chore($chore_id);
    $row = $var_data->fetch_assoc();
    $chore_name = $row['chorename'];
    $chore_id = $row['cid'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Chore</title>
</head>
<body>
<form name="edit_chore" method="get" action="../action/edit_a_chore_action.php">
    <label for="chore_name">
        <input type="text" placeholder="Chore Name" name="chore_name">
    </label>
    <input type="submit" name="edit_chore_submit" value="Edit">
</form>

</body>


</html>