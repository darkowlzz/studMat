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
	
	echo "<h3>About StudMat</h3>";
	echo "<p>StudMat is a php based web app, made at <a href='http://apps24.in'>apps24</a>. It is a sharing web app which can be used by educational institutions to share files without the need of any group, an open site on web for sharing.</p>";

	$obj->bottom();

