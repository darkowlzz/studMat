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
	while($r = mysql_fetch_array($titles))	{
		echo "<a href='uploads/" . $r['link'] . "'>" . $r['title'] . "</a><br>";
	}
	
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

?>
