<?php 

if (isset($_POST['login-submit'])) {
	# code...
	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    
    if (empty($mailuid)||empty($password)) {
    	
    	header('location:../index.php?error=emptyfields');
    }
    else{
    	$sql = 'SELECT * FROM user WHERE username=? OR email=?';
    	$stmt = mysqli_stmt_init($con);
    	if (!mysqli_stmt_prepare($stmt,$sql)) {
    		# code...
    		header('location:../index.php?error=sqlerror');
    		exit();
    	}
    	else{
    		mysqli_stmt_param($stmt,"ss",$mailuid,$mailuid);
    		mysqli_stmt_execute($stmt);
    		$result = mysqli_stmt_get_result($stmt);
    		if ($row = mysqli_fetch_assac()) {
    			# code...
    			$pwdCheck = password_verify($password,$row['password']);
    			if ($pwdCheck == false) {
    				# code...
    				header('location:../index.php?error=wrongpwd');
    				exit();
    			}
    			else if($pwdCheck == true){
                      session_start();
                      $_SESSION['id']=$row['id'];
                      $_SESSION['username']=$row['username'];
                      header('location:../index.php?login=success');
                      exit();
    			}
    			else{
    				header('location:../index.php?error=wrongpwd');
    			}
    		}
    		else{
    			header('location:../index.php?error=nouser');
    			exit();
    		}
    	}
    }

}


else{

	header('location:../index.php');
	exit();
}