<html>
	<head>
		<title>Create a new category</title>
	</head>
	<body>

	<?php
		function __autoload($class_name)        {
        		include $class_name . '.php';
		}

		$obj = new footer();
		$obj->text();

	?>
	<p><b>Enter name of a Category you want to create and enter the passphrase for authentication.</b></p>
	<form class="form-horizontal" action="insToSub.php" method="post">
		<div class="control-group">
			<label class="control-label" for="subName">Name of Category</label>
			<div class="controls">
				<input type="text" name="subName"/>
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
				<button type="submit" class="btn btn-primary pull-center">Create Category</button>
			</div>
		</div>
	</form>
	<?php
		$obj->bottom();
	?>
	</body>
</html>
