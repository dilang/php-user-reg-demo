<?php
session_start();
if(!isset($_SESSION['userid'])){
	header("Location:login.html");
	exit();
}

include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where uid=$userid limit 1");
$row = mysql_fetch_array($user_query);
echo 'User infomation <br />';
echo 'User ID:',$userid,'<br />';
echo 'Username',$username,'<br />';
echo 'Email:',$row['email'],'<br />';
echo 'Register date:',date("Y-m-d", $row['regdate']),'<br />';
echo '<a href="login.php?action=logout">Logout</a> Login<br />';
?>
