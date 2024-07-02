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
        $stmt = $this->connect()->prepare('SELECT * FROM posts JOIN users WHERE posts.post_user_id = users.users_id');
        if(!$stmt->execute()){
            $stmt = null;
            header('location: ../post.php/error=stmtfailed');
            exit();
        } else {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    protected function GetMyPosts($user_id): array
    {
        $stmt = $this->connect()->prepare('SELECT * FROM posts WHERE post_user_id = ?');
        if(!$stmt->execute([$user_id]))
        {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        } else {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    protected function GetPost($post_id): array
    {
        $stmt = $this->connect()->prepare('SELECT * FROM posts WHERE post_id = ?');
        if(!$stmt->execute([$post_id]))
        {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        } else {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
}