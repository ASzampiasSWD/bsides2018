<?php
include 'functions.php';
session_start();
$username = $_POST['user'];
$password = $_POST['pass'];
$user_id = GetUser($username, $password);
if ($user_id == "DNE")
{
	echo "Username or Password Incorrect!";
	header('Refresh: 2; URL="login.php');
	exit();
}
else
{
   echo "Login Successful!";
   $_SESSION['user_id'] = $user_id;
   $_SESSION['is_admin'] = GetAdmin($user_id);
   header('Refresh: 1; URL="index.php');
}

?>