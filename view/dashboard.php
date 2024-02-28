<?php include '../action/login_user_action.php'; ?>
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
                    <a href=""><img src="../assets/images/logo_256.png" height="50px"></a>
                </div>
            </div>
            <div id="stats">
                <div id="stats-items">
                    <div style="font-size: 40px; font-weight: bolder; padding-left: 10%;">Dashboard</div>
                    <div style="font-size: 20px; font-weight: 300; padding-left: 10%;">Welcome, <?php echo $_SESSION['fname']. " ". $_SESSION['lname'];?></div>
                    <div id="top-half">
                        <a href="tasks.html">
                            <div class="task-box" id="all-tasks">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="task-title">All Tasks</span>
                                </div>
                                <div class="task-count">
                                    <span class="task-count-text">10</span>
                                </div>
                            </div>
                        </a>
                        <a href="tasks.html">
                            <div class="task-box" id="completed-tasks">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="task-title">Completed Tasks</span>
                                </div>
                                <div class="task-count">
                                    <span class="task-count-text">5</span>
                                </div>
                            </div>
                        </a>
                        <a href="tasks.html">
                            <div class="task-box" id="inprogress-tasks">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="task-title">Inprogress Tasks</span>
                                </div>
                                <div class="task-count" id="inprogress-list">
                                    <span class="task-count-text">7</span>
                                </div>
                            </div>
                        </a>
                        <a href="tasks.html">
                            <div class="task-box" id="incomplete-tasks">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="task-title">Incomplete Tasks</span>
                                </div>
                                <div class="task-count" id="incomplete-list">
                                    <span class="task-count-text">4</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="bottom-half">
                        <a href="tasks.html">
                            <div class="info-box" id="complete-tasks">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="info-title">All Tasks</span>
                                </div>
                                <div class="info-count" id="all-list">
                                    <span class="info-count-text">
                                        <ul>
                                            <li>Sweeping</li>
                                            <li>Cooking</li>
                                            <li>Laundry</li>
                                            <li>Sweeping</li>
                                            <li>Cooking</li>
                                            <li>Sweeping</li>
                                            <li>Laundry</li>
                                            <li>Cooking</li>
                                            <li>Laundry</li>
                                            <li>Sweeping</li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <a href="tasks.html">
                            <div class="info-box" id="pending-tasks">
                                <div style="font-size: 24px;text-align: center; padding-top: 5%;">
                                    <span class="info-title">Completed Tasks</span>
                                </div>
                                <div class="info-count" id="complete-list">
                                    <span class="info-count-text">
                                        <ul>
                                            <li>Sweeping</li>
                                            <li>Cooking</li>
                                            <li>Laundry</li>
                                            <li>Sweeping</li>
                                            <li>Cooking</li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            </a>
                    </div>
                    
                </div>
            </div>
        </div>
       </div>
            

    </div>
    <div id="bar">
        <div id="buttons">
            <div class="bar-button" id="settings-button">
                <a href="../admin/chore_control_view.php"><img src="../assets/images/create.svg"></a>
            </div>
            <div class="bar-button" id="task-button">
                <a href="tasks.html"><img src="../assets/images/task.svg"></a>
            </div>
            <div class="bar-button" id="home-button">
                <a href=""><img src="../assets/images/home.svg"></a>
            </div>
            <div class="bar-button" id="profile-button">
                <a href="../admin/assign_chore_view.php"><img src="../assets/images/assign.svg"></a>
            </div>
            <div class="bar-button" id="logout-button">
                <a href="../login/logout_view.php"><img src="../assets/images/logout.svg"></a>
            </div>
        </div>

    </div>
</body>


</html>