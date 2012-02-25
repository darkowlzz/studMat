<?php

class header	{

	public $menu = array("Home", "Create Category", "Upload", "Delete", "About");
        public $links = array("Home"=>"/", "Create Category"=>"/insToSubView.php", "Upload"=>"/uploadView.php", "Delete"=>"/delView.php", "About"=>"/about.php");
	
	public function init()	{
		echo "<html><head>";
		echo "<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>";
		echo "<style type='text/css'> .body { $this->a;}</style>";
		echo "</head>";
		echo "<body>";
	}

	public $a = "font-family:'Tangerine', serif;";

	public function text()  {
		
                echo "<h2 style=" . $this->a . ">StudMat</h2>";
                //echo "<hr>";
                for($i=0; $i<5; $i++)   {
                        for($j=0; $j<20; $j++)
                                echo "&nbsp";
                        echo "<a href='" . $this->links[$this->menu[$i]] . "'>" . $this->menu[$i] . "</a>";
                }
                echo "<br><hr><br>";
	}
}
