<?php

include '../settings/connection.php';

$query = "SELECT * FROM Chores";

if(!$result = $con->query($query)){
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    exit();
}

$row_value = '';
while($row = $result->fetch_assoc()) $row_value .='
<tr>
    <td>'.$row['chore_name'].'</td>
    <td>
        <div class="action-button" id="delete-button">
            <a href=""><img src="../assets/images/delete.svg"></a>
        </div>
    </td>
</tr>';

return $row_value;