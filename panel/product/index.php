<?php 
include_once('../../init.php');
part('header_panel');


$q = "select * from prods;";
$prods = $db->put_query($q);


include_once('../../view/pages/prod_list_panel.php');

part('footer');
