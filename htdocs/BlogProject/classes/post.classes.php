<?php

class Post extends Dbh {
    protected function CreatePost($uid, $title, $post){
        $stmt = $this->connect()->prepare('INSERT INTO posts (user_id, title, post) VALUES (?, ?, ?)');
        if(!$stmt->execute($uid, $title, $post)){
            $stmt = null;
            header('Location: ../post.php?error=stmtfailed');
            exit();
        }
    }

    protected function GetPosts(){
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