<?php

class PostContr extends Post {
    public function AllPosts() {
        $users = $this->GetPosts();
        return $users;
    }
}