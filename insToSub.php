<?php
$con = mysql_connect("localhost", "sunny_studies", "darkowlzz");
if (!$con)	{
	die("Couldn't connect: " . mysql_error());
}
mysql_select_db("sunny_studies", $con);

$sql="INSERT INTO subList (name) values ('$_POST[subName]');";

if(!mysql_query($sql, $con))	{
	die('Error: ' . mysql_error());
}
	
mysql_close();
echo "Subject added!"
?>
