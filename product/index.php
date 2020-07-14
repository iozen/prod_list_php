<?php 
include_once('../init.php');
include_once('../templ/parts/header.php');
$id = $_GET['id'];

$q = "select * from prods where id=$id;";
$prod = put_query($q);
$pr = $prod[0];

include_once('../templ/pages/prod.php');

include_once('../templ/parts/footer.php');
