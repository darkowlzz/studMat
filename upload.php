<?php
$target_path = "uploads/";

$target_path = $target_path . basename($_FILES['uploadedfile']['name']);

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	echo "The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded";
	
	$con = mysql_connect("localhost", "sunny_studies", "darkowlzz");
        mysql_select_db("sunny_studies", $con);
	
	$a = $_POST['name'];
	echo $a;
        $sql = "update subList set entries=entries+1 where name='$a';";

	if(!mysql_query($sql, $con))	{
		die("error: " . mysql_error());
	}

        mysql_close();

} 
else{
    echo "There was an error uploading the file, please try again!";
}
?>
