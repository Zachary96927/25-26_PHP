<?php



/*
*User: Milk
 * Password: M1lk!sG0od
 * Password hash: 946dff46343f5b8866ebd6b44dfd645f
 */
//Authenticate Variables
$username="Milk";
$passHash="946dff46343f5b8866ebd6b44dfd645f";
//Authenticate Username
if($username === $_POST["user"]){
    if($passHash === md5($_POST["pass"])){
        echo "Password Authenticated";
        session_start();
        $_SESSION["status"] = "loggedIn";
        $_SESSION["username"] = $_POST["user"];
    }
}
    ?>