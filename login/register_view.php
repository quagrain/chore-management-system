<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width; initial-scale:1.0;">
        <title>Register - CMS</title>
        <link rel="stylesheet" href="../css/register.css">
        <link rel="icon" href="../assets/images/logo_32.png">
    </head>
    
    <body>
        <form id="register" name="register" action="../action/register_user_action.php" method="post">
            <div id="form-content">
                <div id="logo" style="padding-left:45%">
                    <img src="../assets/images/logo_256.png" height="80px">
                </div>
                <div id="names">
                    <label for="f-name">First Name</label>
                    <input id="f-name" name="f-name" type="text" placeholder="Sam" pattern="\w{3,}" required style="margin-right: 20px;">

                    <label for="surname">Surname</label>
                    <input id="surname" name="surname" type="text" placeholder="Altman" pattern="\w{3,}" required>
                </div>

                <div id="gender">
                    <input type="radio" id="male" name="gender" value="0" required>
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="1" required>
                    <label for="female">Female</label>
                </div>

                <div id="family-roles">
                    <label for="role">Role</label>
                    <select id="role" name="role" required style="margin-right: 50px; width:120px">
                        <option value="select">Select</option>
                        <option value="1">Father</option>
                        <option value="2">Mother</option>
                        <option value="3">Son</option>
                        <option value="4">Daughter</option>
                    </select>

                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob">
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@email.com" style="margin-right: 20px;width: 180px">

                    <span id="tel" style="padding: 0 0 0 0;">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="123-456-7890">
                    </span>
                </div>

                <div id="password">
                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" required>
                </div>
                <div id="confirm">
                    <label for="pwd-confirm">Confirm Password</label>
                    <input type="password" id="pwd-confirm" name="pwd-confirm" placeholder="Confirm Password" required>
                </div>

                <div id="register-button">
                    <a href="../view/dashboard.html"><input type="submit" id="submit" name="submit" value="Register"></a>
                    <!--Make function to collect all the user input field values when the user submits-->
                </div>  
                <div id="login-link" style="text-align: center;padding-left: 10vw;"><a href="login_view.php">Already have an account? Login here!</a></div>
            </div>
        </form>
    </body>

</html>