<?php 
include_once('../../init.php');

$table = $_POST['table'];
$id = $_POST['id'];


$q = "show columns from $table;";
$cols = $db->put_query($q);
$cols_ready = array();
foreach($cols as $k => $v){
	if($k >= 1){
		array_push($cols_ready, $v['Field']);
	}
}
$part = "";
foreach($cols_ready as $v){
	$part .= "$v = '".$_POST[$v]."', ";
}
$part = substr($part, 0, -2);
$q = "update $table set $part where id=$id;";
$db->put_query($q);

$loc = $data['baseurl'] . "panel/";	
if($table == "prods"){
	$loc = $data['baseurl'] . "panel/product/";	
}
header('Location: '.$loc);
