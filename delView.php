<html>
	<head>
		<title>Delete a Subject</title>
	</head>
	<body>

	<?php
		function __autoload($class_name)        {
		        include $class_name . '.php';
		}

		$obj = new footer();
		$obj->text();
	
	?>	
	<p><b>Delete a category.</b></p>
	<form action="delSub.php" method="post">
		<p>Select a subject:  <select name="name">
			<?php
			$con = mysql_connect("localhost", "sunny_studies", "darkowlzz");
			mysql_select_db("sunny_studies", $con);

			$result = mysql_query("select name from subList;");

			while($row = mysql_fetch_array($result))	{
				echo "<option value=$row[name]>$row[name]</option>";
			}
			?>
					</select>
		</p>
		<p>PassPhrase: <input type="password" name="key"/>
		<input type="submit" value="Delete the subject"/>
	</form>
	<hr>
	<p><b>Delete a material.</b></p>
	<form action="delTitle.php" method="post">
		<p>Select a Material: <select name="title" >
			<?php

			$result = mysql_query("select title from matList;");
			
			while($row = mysql_fetch_array($result))	{
				echo "<option value='$row[title]'>$row[title]</option>";
			}

			mysql_close();
			?>
					
					</select>
		</p>
		<p>PassPhrase: <input type="password" name="key"/>
		<input type="submit" value = "Delete the Material"/>
	</form>
	<?php
		$obj->bottom();
	?>
	</body>
</html>

