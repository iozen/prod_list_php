<?php 
include_once('../init.php');

part('header');

$id = $_GET['id'];

$q = "select * from prods where id=$id;";
$prod = $db->put_query($q);
$pr = $prod[0];

include_once('../view/pages/prod.php');

part('footer');
