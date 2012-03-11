<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>StudMat</title>
	</head>

<?php

function __autoload($class_name)	{
	include $class_name . '.php';
}

$obj = new footer();

$obj->text();

echo "<p><b>Welcome to StudMat, your study material download hub. You can get all the materials below separated into various categories.</b></p><br>";
$con = mysql_connect("localhost", "sunny_studies", "darkowlzz");
if (!$con)	{
	die("Couldn't connect: " . mysql_error());
}

mysql_select_db("sunny_studies", $con);

$result = mysql_query("select name from subList;");

while($row = mysql_fetch_array($result))	{
	echo "<h3>" . $row[name] . "</h3>";
	
	$titles = mysql_query("select title, link from matList where sub_name='$row[name]';");

	echo "<ul>";
	$x = mysql_fetch_array($titles);
	if(!$x)
		echo "<p>Nothing here yet</p>";
	$titles = mysql_query("select title, link from matList where sub_name='$row[name]';");


	while($r = mysql_fetch_array($titles))	{
		echo "<li><a href='uploads/" . $r['link'] . "'>" . $r['title'] . "</a></li>";
	}
	echo "</ul>";
	
	echo "<br/>";
}

$obj->bottom();
mysql_close();

date_default_timezone_set("Asia/Calcutta");
$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
$referred = $_SERVER['HTTP_REFERER'];
$time = date("H:i:s");
$date = date("Y-m-d");

$myfile = "visit_log.txt" or die("can't open file");
$fh = fopen($myfile, 'a');
$stringData = "$date $time $ip $hostaddress $browser $referred\n";

fseek($fh, 0);
fwrite($fh, $stringData);
fclose($fh);
?>
