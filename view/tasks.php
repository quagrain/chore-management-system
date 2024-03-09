<?php
include '../action/login_user_action.php';
include '../settings/core.php';
check_login();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width:device-width; initial-scale:1.0">
    <title>Incomplete Tasks</title>
    <link rel="stylesheet" href="../css/tasks.css">
    <link rel="icon" href="../assets/images/logo_32.png">
</head>
<body>
    <div id="main-content">
       <div id="header">
            <div id="header-items">
                <div id="logo">
                    <a href="dashboard.php"><img src="../assets/images/logo_256.png" height="50px"></a>
                </div>
            </div>
        </div>
        <div id="tabs">
            <a href="" class="task-link"><div class="tab-shape" id="incomplete-tab" style="margin-left: 3.5vw;margin-top: -0.4vh;">Incomplete</div></a>
            <a href="complete.php" class="task-link"><div class="tab-shape" id="complete-tab" style="margin-top:1.2vh;height:0.4vh;">Complete</div></a>
        </div>
        <div id="tasks">    
            <table id="task-table" name="task-table" style="margin-left: 3vw; margin-right: 3vw;">
                <thead id="table-head">
                    <tr>
                        <th>Chore Name</th>
                        <th>Assigned By</th>
                        <th>Date Assigned</th>
                        <th>Date Due</th>
                        <th>Chore Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Wash Dishes</td>
                        <td>Victor</td>
                        <td>2020-11-01</td>
                        <td>2020-11-02</td>
                        <td>In Progress</td>
                        <td>
                            <div class="action-button check-button">
                                <a href=""><img src="../assets/images/incomplete.svg"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Wash Dishes</td>
                        <td>Victor</td>
                        <td>2020-11-01</td>
                        <td>2020-11-02</td>
                        <td>In Progress</td>
                        <td>
                            <div class="action-button check-button">
                                <a href=""><img src="../assets/images/incomplete.svg"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Wash Dishes</td>
                        <td>Victor</td>
                        <td>2020-11-01</td>
                        <td>2020-11-02</td>
                        <td>In Progress</td>
                        <td>
                            <div class="action-button check-button">
                                <a href=""><img src="../assets/images/incomplete.svg"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Wash Dishes</td>
                        <td>Victor</td>
                        <td>2020-11-01</td>
                        <td>2020-11-02</td>
                        <td>In Progress</td>
                        <td>
                            <div class="action-button check-button">
                                <a href=""><img src="../assets/images/incomplete.svg"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Wash Dishes</td>
                        <td>Victor</td>
                        <td>2020-11-01</td>
                        <td>2020-11-02</td>
                        <td>In Progress</td>
                        <td>
                            <div class="action-button check-button">
                                <a href=""><img src="../assets/images/incomplete.svg"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Wash Dishes</td>
                        <td>Victor</td>
                        <td>2020-11-01</td>
                        <td>2020-11-02</td>
                        <td>In Progress</td>
                        <td>
                            <div class="action-button" id="check-button">
                                <a href=""><img src="../assets/images/incomplete.svg"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Wash Dishes</td>
                        <td>Victor</td>
                        <td>2020-11-01</td>
                        <td>2020-11-02</td>
                        <td>In Progress</td>
                        <td>
                            <div class="action-button check-button">
                                <a href=""><img src="../assets/images/incomplete.svg"></a>
                            </div>
                        </td>
                    </tr>
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
                <a href=""><img src="../assets/images/task.svg"></a>
            </div>
            <div class="bar-button" id="home-button" title="Dashboard">
                <a href="dashboard.php"><img src="../assets/images/home.svg"></a>
            </div>
            <div class="bar-button" id="assignment-button" title="Chore Assignments">
                <a href="../admin/assign_chore_view.php"><img src="../assets/images/assign.svg"></a>
            </div>
            <div class="bar-button" id="logout-button" title="Logout">
                <a href="../login/logout_view.php"><img src="../assets/images/logout.svg"></a>
            </div>
        </div>

    </div>
</body>

<script>
    let rid = <?php echo check_roleID()?>;
    if(rid===3){
        const chore = document.getElementById('chore-control');
        const assign = document.getElementById('assignment-button');
        chore.style.display = 'none';
        assign.style.display = 'none';
    }
</script>
</html>