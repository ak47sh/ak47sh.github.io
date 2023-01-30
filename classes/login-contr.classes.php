<?php

class LoginContr extends Login{

    private $user;
    private $pwd; 

    public function __construct($user, $pwd, $email) {
        $this->user = $user;
        $this->pwd = $pwd;
    }

    public function loginUser() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=poopoo");
            exit();
        }

        $this->getUser($this->user, $this->pwd);
    }


    private function emptyInput() {
        $result; 
        if(empty($this->user) || empty($this->pwd) ) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

}