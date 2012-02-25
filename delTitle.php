<?php

if(md5($_POST['key']) != "f711b1b7a09153e6ded8772b2b7c4fa5")
        die("Authentication failed!");

$con = mysql_connect("localhost", "sunny_studies", "darkowlzz");
if(!$con)       {
        die("Couldm't connect: " . mysql_error());
}
mysql_select_db("sunny_studies", $con);

$sql = "delete from matList where title='$_POST[title]';";

if(!mysql_query($sql, $con))    {
        die('Error: ' .  mysql_error());
}

mysql_close();
echo "Material deleted!";
?>
