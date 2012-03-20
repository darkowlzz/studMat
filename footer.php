<?php

class footer	{
	public $menu = array("Home", "Create Category", "Upload", "Delete", "About");	
	public $links = array("Home"=>"/", "Create Category"=>"/insToSubView.php", "Upload"=>"/uploadView.php", "Delete"=>"/delView.php", "About"=>"/about.php");
	public function text()	{
		echo "<head><link rel='stylesheet' type='text/css' media='all' href='bootstrap/css/bootstrap.css'/><link href='bootstrap/css/bootstrap-responsive.css' rel='stylesheet'/>";
		echo "<script type='text/javascript' src='https://apis.google.com/js/plusone.js'></script>";
		echo "</head>";
		echo "<div class='hero-unit'>";
		echo "<h1><a href='http://studies.darkowlzz.in' style='text-decoration:none'>Stud-Mat</a></h1><p>Open Sharing, no more email dependencies</p>";
		echo "</div>";
		echo "<div class='navbar navbar-fixed-top'>";
		echo "<div class='navbar-inner'><div class='container'>";
		echo "<div class='nav-collapse'><ul class='nav'>";
		for($i=0; $i<5; $i++)	{
			echo "<li><a href='" . $this->links[$this->menu[$i]] . "'>" . $this->menu[$i] . "</a></li>";
		}		
		echo "</ul></div></div></div></div>";
		echo "<body style='margin-left:1cm; margin-right:1cm;'>";
	}
	
	public function bottom()	{
	echo "<hr/><footer class='footer'><p>Source codes available at <a href='https://github.com/indiasuny000/studMat'>github</a></p>";
	echo "<a href='http://apps24.in'><img src='/images/apps24logo.jpg'/></a>";
	echo "</footer>";
	}
}
