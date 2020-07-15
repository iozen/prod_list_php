<?php 
header('Content-Type: application/json');

include_once('../init.php');
include_once('../app/mod/tools.php');
include_once('../app/mod/cookies.php');
include_once('fun.php');

$res = array(
	'status'=>0,
	'data'=>null,
	'html'=>""
);


if(!empty($_GET['buy'])) {

	$id = $_GET['buy'];
	$prod = get_prod($id);

	$prods_array = buy($id,$prod);

	$res['data'] = $prods_array; 
	$res['status'] = "ok";
	echo_json($res);
}
