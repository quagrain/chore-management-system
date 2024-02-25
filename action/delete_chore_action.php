<?php

include '../settings/connection.php';

if(isset($_GET['id'])) { // Checking if the id has been set. The id is the one that was passed in the URL
    $chore_id = $_GET['id']; // get the id from the URL
    $sql = "DELETE FROM chores WHERE cid = $chore_id"; // the query to delete the chore from the table
    $c_name = "SELECT chorename FROM chores WHERE cid = $chore_id"; // a query get the name of the chore that was deleted
    // we weren't asked to get the name. More of a design choice because of how I wanted to output my success message

    if ($con->query($c_name) === TRUE) { // checking if the query to get the name was successful
        $result = $con->query($c_name); // get the result of the query
        $row = $result->fetch_assoc(); // get the row from the result
        $chore_name = $row['chorename']; // get the chore name from the row
        $con->query($sql); // run the query to delete the chore
        echo '<script>alert("Deleted chore: ' . $chore_name . '!");</script>'; // send an alert to the user that the chore was deleted
        // If you're not getting the chore name from the database then your message can be like "Chore deleted successfully"
        echo '<script>window.location.href="../admin/chore_control_view.php";</script>'; // redirect the user back to the chore control view
    }
} else {
    echo '<script>alert("Error: ' . $sql . '<br>' . $con->error . '");</script>'; // if there's an error, send an alert to the user
exit(); // exit to terminate the script
}


