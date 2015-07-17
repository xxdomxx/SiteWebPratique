<?php
	$user=@$_REQUEST["username"];
	$password=@$_REQUEST["password"];
	
	if($user === 'admin' && $password === 'admin123*')
	{
		session_start();
		$_SESSION['user'] = $user;
	}
	header("Location:index.php");
?>