<?php 
include_once('../../init.php');

$table = $_GET['table'];
$id = $_GET['id'];

$q = "delete from $table where id=$id;";
$db->put_query($q);


$loc = $data['baseurl'] . "panel/";	
if($table == "prods"){
	$loc = $data['baseurl'] . "panel/product/";	
}
header('Location: '.$loc);
