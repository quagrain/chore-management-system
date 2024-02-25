<?php
include '../settings/core.php';
include '../functions/chore_fxn.php';
check_login();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width:device-width; initial-scale:1.0">
    <title>Completed Tasks</title>
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
                        <form action="../action/add_chore_action.php" method="get" name="add_chore" id="add_chore">
                            <input type="text" id="chore-name" name="chore-name" placeholder="Sweeping" pattern="^[A-Z]{1}\w{2,}">
                            <input type="submit" name="chore_submit" value="Add">
                        </form>
                    </div>
                    <div id="popup-buttons">
                        <button onclick="hidePopup()">Close</button>
                    </div>
                </div>  
                
                <table id="task-table" name="task-table" style="margin-left: 20vw; margin-right: 20vw;margin-top: 0.5vh;">
                    <div id="add-button">
                        <button onclick="showPopup()">Add Chore</button>
                    </div>
                <thead id="table-head">
                    <tr>
                        <th>Chore Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $data;?>
                </tbody>
                </table>

        </div>
    </div>
            
    <div id="bar">
        <div id="buttons">
            <div class="bar-button" id="settings-button">
                <a href=""><img src="../assets/images/create.svg"></a>
            </div>
            <div class="bar-button" id="task-button">
                <a href="../view/tasks.html"><img src="../assets/images/task.svg"></a>
            </div>
            <div class="bar-button" id="home-button">
                <a href="../view/dashboard.php"><img src="../assets/images/home.svg"></a>
            </div>
            <div class="bar-button" id="profile-button">
                <a href="../view/assign-chore.html"><img src="../assets/images/assign.svg"></a>
            </div>
            <div class="bar-button" id="logout-button">
                <a href="../login/logout_view.php"><img src="../assets/images/logout.svg"></a>
            </div>
        </div>

    </div>
</body>
</html>