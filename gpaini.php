<?php

function __autoload($classname) {
	include $classname . '.php';
}
$obj = new footer();
$obj->text();

echo "<html><head><title>
GPA
</title>
<center>choose your semester <form action='table.php' method='get'>
   <input type='radio' name='sem' value='1' checked='checked'/>Semester1<br/>
   <input type='radio' name='sem' value='2'/>Semester2<br/>
   <input type='radio' name='sem' value='3'/>Semester3<br/>
<!--   <input type='radio' name='sem' value='4'/>Semester4<br/>
   <input type='radio' name='sem' value='5'/>Semester5<br/>
   <input type='radio' name='sem' value='6'/>Semester6<br/>
   <input type='radio' name='sem' value='7'/>Semester7<br/>
   <input type='radio' name='sem' value='8'/>Semester8<br/>-->&nbsp&nbsp
Choose your department<br/><input type='radio' name='dep' value='ece' checked='checked'/>ECE<br/>
<!--<input type='radio' name='dep' value='it'/>IT<br/>
<input type='radio' name='dep' value='cse'/>CSE<br/>
<input type='radio' name='dep' value='mech'/>MECH<br/>
<input type='radio' name='dep' value='eee'/>EEE<br/>
<input type='radio' name='dep' value='aero'/>AERO<br/>
<input type='radio' name='dep' value='civil'/>CIVIL<br/>
<input type='radio' name='dep' value='auto'/>AUTOMOBILE<br/>-->
  <input type='submit' value='GO!'/>
  </form></center>
  </body>
 </html>";

$obj->bottom();
 ?>
