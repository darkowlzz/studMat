<?php

class footer	{
	public $menu = array("Home", "Create Category", "Upload", "Delete", "About");	
	public $links = array("Home"=>"/", "Create Category"=>"/insToSubView.php", "Upload"=>"/uploadView.php", "Delete"=>"/delView.php", "About"=>"/about.php");
	public function text()	{
		echo "<head><link href='http://fonts.googleapis.com/css?family=Share:400,700' rel='stylesheet' type='text/css'/><link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'/><link rel='stylesheet' type='text/css' media='all' href='css/my.css'/>";
		echo "<script type='text/javascript' src='https://apis.google.com/js/plusone.js'></script>";
		echo "</head>";
		echo "<h2 style='color:blue;'>StudMat</h2>";
		echo "<g:plusone></g:plusone>";
		//echo "<hr>";
		for($i=0; $i<5; $i++)	{
			for($j=0; $j<20; $j++)
				echo "&nbsp";
			echo "<a href='" . $this->links[$this->menu[$i]] . "'>" . $this->menu[$i] . "</a>";
		}		
		echo "<br><hr><br>";
	}
	
	public function bottom()	{
	echo "<hr>Source codes available at <a href='https://github.com/indiasuny000/studMat'>github</a>";
	echo "<br><a href='http://apps24.in'><img src='/images/apps24logo.jpg'/></a>";
	}
}
