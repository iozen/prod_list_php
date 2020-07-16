<?php 
include_once('../../init.php');
part('header_panel');

$q = "select orders.id as order_id, orders.usr_id, orders.time, users.name, users.last_name, users.email from orders, users where orders.usr_id = users.id and orders.id = ".$_GET['id'].";";
$ord = $db->put_query($q);
$order = $ord[0];

$q = "select prods.id, prods.title, prods.img from prods, orders, orders_connection where orders_connection.prod_id = prods.id and orders_connection.order_id = orders.id and orders.id = ".$_GET['id'].";";
$prods = $db->put_query($q);


include_once('../../view/pages/edit_order.php');

part('footer');
