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
	<form action="insToSub.php" method="post">
		<p>Name of Category: <input type="text" name="subName"/></p>
		<p>Passphrase: <input type="password" name="key"/></p>
		<p><input type="submit" value="Create Category"/></p>
	</form>
	<?php
		$obj->bottom();
	?>
	</body>
</html>
