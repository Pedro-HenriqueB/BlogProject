<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    if(!isset($_SESSION["userid"])) {
        header("Location: login.php");
    } ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index-style.css">
    <title>BlogProject</title>
</head>
<body>
    <div id="header">
        <div id="header-title">
            <h1>BLOG PROJECT</h1>
        </div>
        <a class="btn" id="logout-btn" href="includes/logout.inc.php">LOGOUT</a>
    </div>
    <h3>Welcome back <?= $_SESSION["useruid"] ?></h3>
    
</body>
</html>