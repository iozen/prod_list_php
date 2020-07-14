<?php 
include_once('../init.php');
include_once('../templ/parts/header.php');

$q = "select count(*) as count from prods;";
$prods_c = put_query($q);
$pages = ceil($prods_c[0]['count'] / $data['prod_per_page']);
$limit = $data['prod_per_page'];
$q = "select * from prods limit $limit;";

if(!empty($_GET['page'])) {
if($_GET['page'] != 1) {
$offset = ($_GET['page'] - 1) * $data['prod_per_page'];
$q = "select * from prods limit 5 offset $offset;";
}
}

$prods = put_query($q);

include_once('../templ/pages/prod_list.php');

include_once('../templ/parts/footer.php');
