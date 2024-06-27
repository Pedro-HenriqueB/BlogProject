<?php
if(isset($_POST['submit']))
{
    session_start();

    // Grabbing data
    $user_id = $_SESSION["userid"];
    $post_title = $_POST['title'];
    $post_blog = $_POST['post'];

    // Instantiate PostContr Class
    include "../classes/dbh.classes.php";
    include "../classes/post.classes.php";
    include "../classes/post-contr.classes.php";
    $PostContr = new PostContr();

    // Running post verifications and creating Post
    $PostContr->AddPost($user_id, $post_title, $post_blog);

    // Going back to front page
    header("location: ../index.php?error=none");
}