<?php

include '../settings/core.php';
check_login();
if (check_roleID() == 3) header('Location: ../view/dashboard.php');
include '../action/get_a_chore_action.php';


if (!isset($_GET['id'])) {
    echo '<script>window.location.href="chore_control_view.php";</script>';
    exit();
}
$chore_id = $_GET['id'];
$var_data = get_chore($chore_id);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Chore</title>
</head>
<body>
<h2>Edit Chore</h2>
<form action="../action/edit_a_chore_action.php" method="get" name="login-form" id="login-form">
    <input type="text" placeholder="Chore" name="chore_name" id="chore_name" required/>
    <input type="hidden" class="hidden" name="chore_id" value=<?php echo $chore_id; ?> />
    <input type="submit" name="edit_chore_submit" id="edit_chore_submit" value="Edit"/>
</form>


</html>