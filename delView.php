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
	<form class="form-horizontal" action="delSub.php" method="post">
		<div class="control-group">
			<label class="control-label" for="name">Select a Category</label>
			<div class="controls">
				<select name="name">
			<?php
			$con = mysql_connect("localhost", "sunny_studies", "darkowlzz");
			mysql_select_db("sunny_studies", $con);

			$result = mysql_query("select name from subList;");

			while($row = mysql_fetch_array($result))	{
				echo "<option value=$row[name]>$row[name]</option>";
			}
			?>
				</select>
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
				<button type="submit" class="btn btn-primary pull-center">Delete the subject</button>
			</div>
		</div>
	</form>
	<hr>
	<p><b>Delete a material.</b></p>
	<form class="form-horizontal" action="delTitle.php" method="post">
		<div class="control-group">
			<label class="control-label" for="title">Select a Material</label>
			<div class="controls">
				<select name="title" >
			<?php

			$result = mysql_query("select title from matList;");
			
			while($row = mysql_fetch_array($result))	{
				echo "<option value='$row[title]'>$row[title]</option>";
			}

			mysql_close();
			?>
					
				</select>
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
				<button type="submit" class="btn btn-primary pull-center">Delete the Material</button>
			</div>
		</div>
	</form>
	<?php
		$obj->bottom();
	?>
	</body>
</html>

