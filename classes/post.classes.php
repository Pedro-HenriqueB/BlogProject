<?php

class Post extends Dbh {
    protected function CreatePost($uid, $title, $post): void
    {
        $stmt = $this->connect()->prepare('INSERT INTO posts (post_user_id, post_title, post) VALUES (?, ?, ?)');
        if(!$stmt->execute(array($uid, $title, $post))){
            $stmt = null;
            header('Location: ../post.php?error=stmtfailed');
            exit();
        }
    }

    protected function GetPosts(): array
    {
        $stmt = $this->connect()->prepare('SELECT * FROM posts');
        if(!$stmt->execute()){
            $stmt = null;
            header('location: ../post.php/error=stmtfailed');
            exit();
        } else {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}