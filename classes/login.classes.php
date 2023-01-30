<?php

class Login extends Dbh {

    protected function getUser($user, $pwd) {
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_user = ? OR users_email = ?;');

        if(!$stmt->execute(array($user, $hashedPwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        if($checkPwd == false)
        {
            $stmt = null;
            header("location: ../index.php?error=wongpw");
            exit();
        }
        elseif($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_user = ? OR users_email = ?;');
            
            if(!$stmt->execute(array($user, $user, $ hashedPwd))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }    
        }

        $stmt = null;
    }

}