<html>
	<head>
		<title>Studymaterial Downloads</title>
	</head>
<body>

<?php

function __autoload($class_name)	{
	include $class_name . '.php';
}

$obj = new footer();
$obj->text();

$con = mysql_connect("localhost", "sunny_studies", "darkowlzz");
if (!$con)	{
	die("Couldn't connect: " . mysql_error());
}
//else echo "connected da!";
/*if(mysql_query("use studies;", $con))	{
	echo "database selected.";
}
else echo "error: " . mysql_error();
*/
mysql_select_db("sunny_studies", $con);

$result = mysql_query("select name from subList;");

while($row = mysql_fetch_array($result))	{
	echo "<h3>" . $row[name] . "</h3>";
	
	$titles = mysql_query("select title, link from matList where sub_name='$row[name]';");
	echo "<ul>";
	while($r = mysql_fetch_array($titles))	{
		echo "<li><a href='uploads/" . $r['link'] . "'>" . $r['title'] . "</a></li>";
	}
	echo "</ul>";
	
	echo "<br/><hr>";
}

echo "<br><br>";
/*
$result = mysql_query("select * from subList;");

while($row = mysql_fetch_array($result))  {
	echo $row['name'] . " " . $row['entries'] . "<br/>";
}
*/
	
mysql_close();

date_default_timezone_set("Asia/Calcutta");
$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
$referred = $_SERVER['HTTP_REFERER']; // a quirky spelling mistake that stuck in php
$time = date("Y-m-d H:i:s");

$myfile = "visit_log.txt" or die("can't open file");
$fh = fopen($myfile, 'a');
$stringData = "$time $ip $hostaddress $browser $referred\n";

fseek($fh, 0);
fwrite($fh, $stringData);
fclose($fh);
?>
