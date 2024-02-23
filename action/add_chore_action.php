<?php
include '../settings/connection.php';

$form_results = $_GET;

if(isset($_GET['chore_submit']) && !empty($form_results["chore-name"])){
    $chore_name = $form_results["chore-name"];
}else{
    echo '<script>alert("Try again.");</script>';
    echo '<script>window.location.href="../admin/chore_control_view.php";</script>';
    exit();
}

$query = "INSERT INTO Chores (chorename) VALUES ('$chore_name')";

if($con->query($query) === TRUE) {
    echo '<script>alert("Added chore!");</script>';
} else {
    echo '<script>alert("Encountered an error. Try again.");</script>';
}
echo '<script>window.location.href="../admin/chore_control_view.php";</script>';
exit();