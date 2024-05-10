<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogProject</title>
</head>
<body>
    <h1>BLOG PROJECT</h1>
    <h3>Welcome back <?= $_SESSION["useruid"] ?></h3>
    <a href="includes/logout.inc.php">LOGOUT!</a>
</body>
</html>