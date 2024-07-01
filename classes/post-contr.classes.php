<?php

class PostContr extends Post {
    private int $user_id;
    private string $title;
    private string $post;

    public function AllPosts(): array
    {
        $users = $this->GetPosts();
        return $users;
    }

    public function AddPost($user_id, $title, $post): void
    {
        $this->user_id = $user_id;
        $this->title = $title;
        $this->post = $post;

        if($this->emptyInput($this->user_id, $this->title, $this->post) == false)
        {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        
        $this->CreatePost($this->user_id, $this->title, $this->post);
    }

    private function emptyInput($user_id, $title, $post): bool
    {
        if(empty($user_id) || empty($title) || empty($post))
        {
            return false;
        } else {
            return true;
        }
    }
}