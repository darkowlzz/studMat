<?php

function __autoload($clsnm) {
	include $clsnm . '.php';
}
$obj = new footer();
$obj->text();
$crlst = unserialize($_GET['crlst']);
function fina() {
	$grlst = array('s'=>10,'a'=>9,'b'=>8,'c'=>7,'d'=>6,'e'=>5,'u'=>0);
	$i = 0;
	$c = 0;
	global $crlst, $_GET;
	array_pop($_GET);
	foreach($crlst as $sub=>$credit) {
		foreach($_GET as $gsub=>$grade) {
		if ($sub == $gsub) {
		foreach($grlst as $key=>$value) {
		if($grade == $key) {
			
			$p = $credit*$value;
			$i = $i+$p;
			$c = $c+$credit;
			}
}}}}
	$f = $i/$c;
	$gpa = round($f,2);
	echo "<center>$gpa</center>";
}
fina();
$obj->bottom();
?>
