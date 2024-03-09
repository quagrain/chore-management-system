<?php
global $in_progress_count, $complete_count, $incomplete_count, $recent_stats, $all_count;
include '../action/login_user_action.php';
include '../functions/home_fxn.php';
include '../settings/core.php';
check_login();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width:device-width; initial-scale:1.0;">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="icon" href="../assets/images/logo_256.png">
</head>


<body>
    <div id="main-content">
       <div id="header">
            <div id="header-items">
                <div id="logo">
                    <a href=""><img src="../assets/images/logo_128.png" height="50px"></a>
                </div>
            </div>
            <div id="stats">
                <div id="stats-items">
                    <div style="font-size: 40px; font-weight: bolder; padding-left: 10%;">Dashboard</div>
                    <div style="font-size: 20px; font-weight: 300; padding-left: 10%;">Welcome, <?php echo $_SESSION['fname']. " ". $_SESSION['lname'];?></div>
                    <div id="top-half">
                            <div class="task-box" id="all-tasks">
                        <a href="tasks.php">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="task-title">All Tasks</span>
                                </div>
                                <div class="task-count">
                                    <span class="task-count-text"><?php echo $all_count;?></span>
                                </div>
                        </a>
                            </div>
                            <div class="task-box" id="completed-tasks">
                        <a href="tasks.php">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="task-title">Completed Tasks</span>
                                </div>
                                <div class="task-count">
                                    <span class="task-count-text"><?php echo $complete_count;?></span>
                                </div>
                        </a>
                            </div>
                            <div class="task-box" id="inprogress-tasks">
                        <a href="tasks.php">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="task-title">Inprogress Tasks</span>
                                </div>
                                <div class="task-count" id="inprogress-list">
                                    <span class="task-count-text"><?php echo $in_progress_count;?></span>
                                </div>
                            </div>
                        </a>
                            <div class="task-box" id="incomplete-tasks">
                        <a href="tasks.php">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="task-title">Incomplete Tasks</span>
                                </div>
                                <div class="task-count" id="incomplete-list">
                                    <span class="task-count-text"><?php echo $incomplete_count;?></span>
                                </div>
                        </a>
                            </div>
                    </div>
                    <div id="bottom-half">
                            <div class="info-box" id="recent-tasks">
                                <div style="font-size: 24px; margin-top: 3%; margin-left:3%">
                                    <span class="info-title">Recent Tasks</span>
                                </div>
                                <div id="table_box">
                                    <table id="recent_table">
                                    <tbody>
                                        <?php echo $recent_stats;?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
       </div>
            

    </div>
    <div id="bar">
        <div id="buttons">
            <div class="bar-button" id="chore-control" title="Chore Control">
                <a href="../admin/chore_control_view.php"><img src="../assets/images/create.svg"></a>
            </div>
            <div class="bar-button" id="task-button" title="Tasks">
                <a href="tasks.php"><img src="../assets/images/task.svg"></a>
            </div>
            <div class="bar-button" id="home-button" title="Dashboard">
                <a href=""><img src="../assets/images/home.svg"></a>
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