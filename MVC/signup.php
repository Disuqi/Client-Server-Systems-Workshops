<?php
$view = new stdClass();
$view->loggedIn= false;
$view->pageTitle = 'Sign up';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "admin" && $password = "admin") {
        setcookie('username', $username, time() + 2000);
        setcookie('password', $password, time() + 2000);
        $view->loggedIn = true;
    }
}
require_once('Views/signup.phtml');