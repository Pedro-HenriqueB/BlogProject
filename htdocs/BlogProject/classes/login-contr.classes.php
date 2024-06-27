<?php

class LoginContr extends Login {
    private string $uid;
    private string $pwd;

    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser(): void
    {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUSer($this->uid, $this->pwd);
    }

    private function emptyInput(): bool
    {
        $result;
        if(empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}