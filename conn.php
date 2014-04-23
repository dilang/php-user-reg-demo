<?php
/*MySQL Connection*/
$conn = @mysql_connect("localhost","root","mjz1990");
if (!$conn){
	die("Can't connet to mysql". mysql_error());
}
mysql_select_db("test", $conn);
?>
