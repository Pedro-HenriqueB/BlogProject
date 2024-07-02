<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/post-style.css" type="text/css" media="screen">
    <title>BlogProject</title>
</head>
<body>
<div id="header">
        <div id="header-title">
            <h1>BLOG PROJECT</h1>
        </div>
        <a class="btn" id="logout-btn" href="includes/logout.inc.php">LOGOUT</a>
    </div>
    <div class="menu">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="post.php">New Blog</a>
            </li>
            <li>
                <a href="myposts.php">MyBlogs</a>
            </li>
        </ul>
    </div>
    <div class="container">
        <form action="includes/post.inc.php" method="post">
            <label for="title" id="titleLabel">Title</label>
            <input type="text" name="title" id="title">
            <label for="post" id="postLabel">Post</label>
            <textarea name="post" id="post"></textarea>
            <button name="submit" id="submit" role="button">POST</button>
        </form>
    </div>
</body>
</html>