<?php

class footer	{
	public $menu = array("Home", "Create Category", "Upload", "Delete");	
	public $links = array("Home"=>"/", "Create Category"=>"/insToSubView.php", "Upload"=>"/uploadView.php", "Delete"=>"/delView.php");
	public function text()	{
		echo "<hr>";
		for($i=0; $i<4; $i++)	{
			for($j=0; $j<20; $j++)
				echo "&nbsp";
			echo "<a href='" . $this->links[$this->menu[$i]] . "'>" . $this->menu[$i] . "</a>";
		}		
		echo "<br><hr><br>";
	}
}
