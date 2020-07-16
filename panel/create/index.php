<?php 
include_once('../../init.php');
part('header_panel');

$table = $_GET['table'];

$q = "select * from fields where t_able=$table;";
$fields = $db->put_query($q);


$q = "show columns from $table;";
$cols = $db->put_query($q);
$cols_ready = array();
foreach($cols as $k => $v){
	if($k >= 1){
		array_push($cols_ready, $v['Field']);
	}
}
include_once('../../view/pages/create.php');

part('footer');
