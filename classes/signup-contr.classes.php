<?php

class SignupContr extends Signup{

    private $user;
    private $pwd; 
    private $email; 

    public function __construct($user, $pwd, $email) {
        $this->user = $user;
        $this->pwd = $pwd;
        $this->email = $email;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=poopoo");
            exit();
        }

        $this->setUser($this->user, $this->pwd, $this->email);
    }


    private function emptyInput() {
        $result; 
        if(empty($this->user) || empty($this->pwd) || empty($this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

}