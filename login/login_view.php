<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="icon" href="../assets/images/logo_32.png">
        <title>Login - CMS</title>
    </head>

    <body>
        <form id="login" name="login" action="../action/login_user_action.php" method="post">
            <div id="form-content">
                <div id="logo">
                    <img src="../assets/images/logo_256.png" height="80px" alt="Website logo">
                </div>
                <div id="inputs">
                    <div id="email-input">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="login-input" name="email" placeholder="Email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" required inputmode="email">
                    </div>
                    <div id="pwd-input">
                        <label for="pwd">Password</label>
                        <input type="password" id="pwd" class="login-input" name="pwd" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" placeholder="Password" required>
                    </div>
                </div>

                <div id="submit-button"> <input type="submit" id="login-submit" name="login-submit" value="Sign In"></div>
                <div id="register-link"> <a href="../login/register_view.php">Don't have an account? Create one!</a> </div>
            </div>
        </form>
    </body>
`

</html>