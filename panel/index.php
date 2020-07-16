<?php 
include_once('../init.php');
part('header_panel');

$q = "select orders.id as order_id, orders.usr_id, orders.time, users.name, users.last_name, users.email from orders, users where orders.usr_id = users.id;";
$orders = $db->put_query($q);





include_once('../view/pages/panel.php');

part('footer');
