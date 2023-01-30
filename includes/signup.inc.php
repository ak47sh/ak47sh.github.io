<?php

if(isset($_POST["submit"]))
{

    // getting data from website
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    //instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($user, $pwd, $email);

    //running error handlers and user signup
    $signup->signupUser();

    // going back home
    header("location: ../index.php?error=none");



}