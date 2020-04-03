<?php 

if (isset($_POST['signup-submit'])) {
	require 'dbh.inc.php';
    
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($empty) || empty($password)||empty($passwordRepeat))
    {
    	header('location:../signup.php?error=emptyfields&uid='.$username.'&mail='.$email);
    	exit();

    }
    else if(!filter_var($empty,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username){
          header('location:../signup.php?error=invalidmailuid');
    }

    else if(!filter_var($empty,FILTER_VALIDATE_EMAIL)){
    	header('location:../signup.php?error=invalidmail&uid='.$username);
    	exit();
    }
     else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))){
    	header('location:../signup.php?error=invaliduid&mail='.$email);
    	exit();
    }



}

