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

	<p><b>Select a Category to which you want to add the new material</b></p>
	<form class="form-horizontal" enctype="multipart/form-data" action="upload.php" method="post">
		<div class="control-group">
			<label class="control-label" for="name">Select a category</label>
			<div class="controls">
				<select name="name">
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
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="title">Title</label>
			<div class="controls">
				<input type="text" name="title"/><br/></p>
			</div>
		</div>
				<input type="hidden" name="MAX_FILE_SIZE" value="100000000"/>

		<div class="control-group">
			<label class="control-label" for="uploadedfile">Choose a file to upload</label>
			<div class="controls">
				<input name="uploadedfile" type="file"/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="key">Passphrase</label>
			<div class="controls">
				<input type="password" name="key"/>
			</div>
		</div>
		
		<div class="control-group">
			<div class="form-actions">
				<button type="submit" class="btn btn-primary pull-center">Upload</button>
			</div>
		</div>
	</form>
	<?php
		$obj->bottom();
	?>
	</body>
</html>

