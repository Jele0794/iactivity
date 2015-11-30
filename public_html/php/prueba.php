<?php
$hostname = "localhost";
$dbname = "jjjsyste_iActivityDB";
$user = "jjjsyste_jele";
$password = "jjjsyst3.2015";

$con = mysql_connect($hostname, $user, $password) or die("Cannot connect to DB");
mysql_select_db($dbname) or die ("Cannot connect to DB2");

if (!$con) {
    die('No pudo conectarse: ' . mysql_error());
}
mysql_close($con);

 ?>
