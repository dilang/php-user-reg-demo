<?php
/*MySQL Connection*/
$conn = @mysql_connect("localhost","root","db123");
if (!$conn){
	die("Can't connet to mysql". mysql_error());
}
mysql_select_db("test", $conn);
?>
