<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    if(!isset($_SESSION["userid"])) {
        header("Location: login.php");
    } 
    
    include_once('classes/dbh.classes.php');
    include_once('classes/post.classes.php');
    include_once('classes/post-contr.classes.php');
    $PostContr = new PostContr();
    ?>

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
    <div class="menu">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="post.php">New Blog</a>
            </li>
            <li>
                <a href="myposts.php">My Posts</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <div id="posts">
            <?php
            $myPosts = $PostContr->MyPosts($_SESSION['userid']);
            foreach($myPosts as $post) { ?>
                <a id="postLink" href="read.php?post_id=<?=$post['post_id']?>">
                <div id="postDiv">
                    <p><?=$post['post_title']?></p>
                    <p><?=$post['post']?></p>
                </div>
                </a>
            <?php } ?>
        </div>
    </div>
    
</body>
</html>