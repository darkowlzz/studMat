<?php

function __autoload($class_name)        {
        include $class_name . '.php';
}

$obj = new footer();
$obj->text();


if(md5($_POST['key']) != "f711b1b7a09153e6ded8772b2b7c4fa5")
	die("Wrong Authentication failed");

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
