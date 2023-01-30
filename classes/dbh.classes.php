<?php

class Dbh {

    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=websitetest', $username, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $dbh;
    }

}
