<html>
	<head>
		<title>Upload a file</title>
	</head>
	<body>
	<?php
		function __autoload($class_name)        {
		        include $class_name . '.php';
		}

		$obj = new footer();
		$obj->text();

	?>

	<form enctype="multipart/form-data" action="upload.php" method="post">
		<p>Select the subject:  <select name="name">
			<?php
			$con = mysql_connect("localhost", "sunny_studies", "darkowlzz");
			mysql_select_db("sunny_studies", $con);
			
			$result = mysql_query("select name from subList;");
			
			while($row = mysql_fetch_array($result))	{
				echo "<option value=$row[name]>$row[name]</option>";
			}
			
			mysql_close();
			?>
					
					</select>
		</p>
		<p>Title: <input type="text" name="title"/><br/></p>
		<input type="hidden" name="MAX_FILE_SIZE" value="100000000"/>
		Choose a file to upload: <input name="uploadedfile" type="file"/><br/>
		<p>PassPhrase: <input type="password" name='key'/></p>
		<input type="submit" value = "Upload File"/>
	</form>
	</body>
</html>

