<?php

include '../settings/connection.php';

$query = "SELECT * FROM Family_name";
$result = $con->query($query);

$row_value = '<option value="select">Select</option>';
while($row = $result->fetch_assoc()){
    $row_value .= "<option value='".$row['fid']."'>".$row['fam_name']."</option>";
}



$con->close();