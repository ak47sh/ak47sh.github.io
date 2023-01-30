<?php

class Signup extends Dbh {

    protected function setUser($user, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_user, users_pwd, users_email) VALUES (?, ?, ?)');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($user, $hashedPwd, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }


    protected function checkUser($user, $email) {
        $stmt = $this->connect()->prepare('SELECT users_user FROM users WHERE users_user = ? OR users_email = ?;');

        if(!$stmt->execute(array($user, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
        
}