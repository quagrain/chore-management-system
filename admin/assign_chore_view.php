<?php
include '../settings/core.php';
include '../functions/dropdown_list_fxn.php';
include '../functions/get_all_assignment_fxn.php';

global $row, $user_drop, $chores_drop;
check_login();

if (check_roleID() == 3) header('Location: ../view/dashboard.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width:device-width; initial-scale:1.0">
    <title>Assign Chore</title>
    <link rel="stylesheet" href="../css/manage.css">
    <link rel="icon" href="../assets/images/logo_32.png">
    <script src="../js/popup.js" defer></script>
</head>
<body>
    <div id="main-content">
       <div id="header">
            <div id="header-items">
                <div id="logo">
                    <a href="../view/dashboard.php"><img src="../assets/images/logo_256.png" height="50px"></a>
                </div>
            </div>
        </div>
        <div id="tasks">
                <div class="overlay" id="overlay" onclick="hidePopup()"></div>
                <div class="popup" id="popup">
                    <div style="padding-top: 0;">
                        <span style="font-weight: bold; font-size: 24px; margin-bottom: 1vh;">Add Chore</span>
                    </div>
                    <div>
                        <form action="../action/assign_a_chore_action.php" method="get" name="chore-assign" id="chore-assign">
                            <select id="assign-person" name="assign-person">
                                <?php echo $user_drop; ?>
                            </select>
                            <select id="assign-chore" name="assign-chore" required>
                                <?php echo $chores_drop; ?>
                            </select>
                            <input type="date" id="due-date" name="due-date" required>
                            <input type="submit" value="Add" name="submit">
                            <input type="button" value="Close" onclick="hidePopup()">
                        </form>
                    </div>
                </div>  
                
                <table id="task-table" name="task-table" style="margin-left: 20vw; margin-right: 20vw;margin-top: 0.5vh;">
                    <div id="add-button">
                        <button onclick="showPopup()">Assign Chore</button>
                    </div>
                <thead id="table-head">
                    <tr>
                        <th>Chore Name</th>
                        <th>Assigned By</th>
                        <th>Date Assigned</th>
                        <th>Due Date</th>
                        <th>Chore Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $row; ?>
                </tbody>
                </table>

        </div>
    </div>
            
    <div id="bar">
        <div id="buttons">
            <div class="bar-button" id="chore-control" title="Chore Control">
                <a href="../admin/chore_control_view.php"><img src="../assets/images/create.svg"></a>
            </div>
            <div class="bar-button" id="task-button" title="Tasks">
                <a href="../view/tasks.php"><img src="../assets/images/task.svg"></a>
            </div>
            <div class="bar-button" id="home-button" title="Dashboard">
                <a href="../view/dashboard.php"><img src="../assets/images/home.svg"></a>
            </div>
            <div class="bar-button" id="assignment-button" title="Chore Assignments">
                <a href=""><img src="../assets/images/assign.svg"></a>
            </div>
            <div class="bar-button" id="logout-button" title="Logout">
                <a href="../login/logout_view.php"><img src="../assets/images/logout.svg"></a>
            </div>
        </div>

    </div>

</body>
</html>