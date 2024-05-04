<?php

if(isset($_POST["submit"]))
{
    // Grabbing data
    $uid = $_POST["user"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdrepeat = $_POST["confirmPassword"];

    // Istantiate SignupContr class
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // Runing error handlers and user signup

    // Going back to front page
}