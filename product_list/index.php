<?php 
include_once('../init.php');

part('header');

$cur_page = 1;

$q = "select count(*) as count from prods;";
$prods_c = $db->put_query($q);
$pages = ceil($prods_c[0]['count'] / $data['prod_per_page']);
$limit = $data['prod_per_page'];

$q = "select * from prods limit $limit;";

if(!empty($_GET['page'])) {
	if($_GET['page'] != 1) {
		$cur_page = $_GET['page'];
		$offset = ($_GET['page'] - 1) * $data['prod_per_page'];
		$q = "select * from prods limit $limit offset $offset;";
	}
}

$prods = $db->put_query($q);

include_once('../view/pages/prod_list.php');

part('footer');
