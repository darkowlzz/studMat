<?php

function __autoload($classname) {
	include $classname . '.php';
}
$obj = new footer();
$obj->text();
require_once('Gpaclass.php');
$sem = $_GET['sem'];
$dep = $_GET['dep'];

$tab = new Gpa;
$tab->table($sem,$dep);
$obj->bottom();
?>
