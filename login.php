<?php
session_start();

if($_GET['action'] == "logout"){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo 'Logout successed.Click here to  <a href="login.html">login again.</a>';
	exit;
}

if(!isset($_POST['submit'])){
	exit('Invalid access');
}
$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

include('conn.php');
$check_query = mysql_query("select uid from user where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
	$_SESSION['username'] = $username;
	$_SESSION['userid'] = $result['uid'];
	echo $username,' You are welcome to <a href="my.php">user centre</a><br />';
	echo 'Click here to <a href="login.php?action=logout">logout!</a><br />';
	exit;
} else {
	exit('Login failed.Click here <a href="javascript:history.back(-1);">back</a>try again');
}
?>
