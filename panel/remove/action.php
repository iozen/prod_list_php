<?php 
include_once('../../init.php');

$table = $_POST['table'];


$q = "show columns from $table;";
$cols = $db->put_query($q);
$cols_ready = array();
foreach($cols as $k => $v){
	if($k >= 1){
		array_push($cols_ready, $v['Field']);
	}
}
$part = "";
$val = "";
foreach($cols_ready as $v){
	$part .= "$v, ";
	$val .= "'".$_POST[$v]."', ";
}
$part = substr($part, 0, -2);
$val = substr($val, 0, -2);
$q = "insert into $table ($part) values($val);";
$st = $db->put_query($q);

$loc = $data['baseurl'] . "panel/";	
if($table == "prods"){
	$loc = $data['baseurl'] . "panel/product/";	
}
header('Location: '.$loc);
