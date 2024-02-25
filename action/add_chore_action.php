<?php
include '../settings/connection.php';

$form_results = $_GET; // get the form results from the form

if(isset($_GET['chore_submit']) && !empty($form_results["chore-name"])){ // check if the form was submitted and if the chore name is not empty
    $chore_name = $form_results["chore-name"]; //get the chore name entered by the user
}else{
    echo '<script>alert("Try again.");</script>'; // send an alert asking the user to try again
    echo '<script>window.location.href="../admin/chore_control_view.php";</script>'; // redirect the user back to the chore control
    exit(); // exit so the code below does not run. Could result in an error if it runs
}

$query = "INSERT INTO Chores (chorename) VALUES ('$chore_name')"; // the query to add the new chore to the table

if($con->query($query) === TRUE) { // checking if the query is successful
    echo '<script>alert("Added chore!");</script>'; // send an alert to the user that the chore was added
} else {
    echo '<script>alert("Encountered an error. Try again.");</script>'; // if there's an error, send an alert to the user
}
echo '<script>window.location.href="../admin/chore_control_view.php";</script>'; // redirect the user back to the chore control view
exit();