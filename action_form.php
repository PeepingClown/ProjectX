<?php
$mysqli = new mysqli("localhost","root","");
if($mysqli -> connect_errno)
{
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
}
$mysqli -> select_db("rupayan");
if(!$mysqli -> query("INSERT INTO userdata (fname, lname, degree, exp) VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[degree]', '$_POST[exp]')"))
	echo "Query error: " . $mysqli -> error;
$mysqli -> close();
?>
