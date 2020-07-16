<?php 
include_once('../../init.php');
part('header_panel');

$table = $_GET['table'];
$id = $_GET['id'];

$q = "select * from $table where id=$id;";
$prods = $db->put_query($q);

include_once('../../view/pages/prod_list_panel.php');

part('footer');
