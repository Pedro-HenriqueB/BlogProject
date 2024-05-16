<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <title>Blog Project</title>
</head>
<body>
    <div id="background">

        <div class="container">
            <div id="formContainer">
                <form action="includes/login.inc.php" method="POST">
                <div id="inputs">
                    <div id="loginTitle">
                        <p id="loginText">Blog Project</p>
                    </div>
                    <div>
                        <input type="text" class="formFields" name="uid" id="user" placeholder="USER">
                    </div>
                    <div>
                        <input type="password" class="formFields" name="pwd" id="password" placeholder="PASSWORD">
                    </div>
                    <div>
                        <div id="btnField">
                            <button class="loginBtn btnFieldLogin" role="button">Login</button>
                        </div>

                        <div id="registerLink">
                            <a href="register.php">Click here to sign up!</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>