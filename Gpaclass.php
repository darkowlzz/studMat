<?php

class Gpa {
public $sem;
public $dep;
public $creditlist;
public $gradelist;
public $grade = array('s'=>10,'a'=>9,'b'=>8,'c'=>7,'d'=>6,'e'=>5);
public $list = array(array('sem'=>1,'dep'=>'ece','sub'=>array('english1'=>4,'maths1'=>4,'physics1'=>3,'chemistry1'=>3,'FOC'=>3,'EG'=>5)),
	       array('sem'=>2,'dep'=>'ece','sub'=>array('english2'=>4,'maths2'=>3,'physics2'=>3,'chemistry2'=>3,'EDC'=>4,'BCM'=>3)),
		array('sem'=>3,'dep'=>'ece','sub'=>array('Maths3'=>4,'SS'=>4,'EC1'=>3,'DE'=>3,'OOPS'=>3,'EE'=>4)));
public function table($sem, $dep) {
	foreach($this->list as $group) {
		if ($sem == $group['sem'] && $dep == $group['dep']) {
		echo "
<html><title>Table</title>
	<body><center>
		<table border='1' cellpadding='4'>
		<tr bgcolor='dddddd'><td>Subject</td>
		<td>Credit</td>
		<td>Grade</td>
			</tr><form action='gpa.php' method='get'>

";
		$this->creditlist = $group['sub'];
		foreach($group['sub'] as $subs=>$credit) {
			echo "<tr><td>{$subs}</td>
				<td>{$credit}</td>
				<td><input type='text' name='{$subs}' maxlength='1'></td></tr>";}
$seri = serialize($this->creditlist);
echo "<pre></table>

<input type='hidden' name='crlst' value='{$seri}'>
<input type='submit' value='Go'/></form></center></body></html><pre>
"; }}}

public function calc() {
	$this->gradelist = array_combine($this->creditlist, $_GET);
	print_r($this->gradelist);
}
}

?>
