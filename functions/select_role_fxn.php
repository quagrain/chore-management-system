<?php

include '../settings/connection.php';
global $con;

$query = "SELECT * FROM Family_name";

if(!$result = $con->query($query)){
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    exit();
}

$row_value = '<option value="select">Select</option>';
while($row = $result->fetch_assoc()) $row_value .= "<option value='".$row['fid']."'>".$row['fam_name']."</option>";

$con->close();