<?php 
header('Content-Type: application/json');

session_cache_expire(1440);
session_start();

include_once('../init.php');
include_once('../app/mod/tools.php');
include_once('fun.php');

$res = array(
	'status'=>0,
	'data'=>null,
	'html'=>""
);


if(!empty($_GET['buy'])) {

	$id = $_GET['buy'];
	$prod = get_prod($id);

	buy($id,$prod);
	$prods_array = $_SESSION['prods_array'];

	$res['data'] = $prods_array; 
	$res['status'] = "ok";
	echo_json($res);
}
if(!empty($_GET['add_quan'])){
	$id = $_GET['add_quan'];
	$prods_array = $_SESSION['prods_array'];
	foreach($prods_array as $k => $v){
		if($v['id'] == $id){
			$prods_array[$k]['quantity']++;
		}
	}
	$_SESSION['prods_array'] = $prods_array;
	$res['data'] = $prods_array; 
	$res['status'] = "ok";
	echo_json($res);

}

if(!empty($_GET['remove_quan'])){
	$id = $_GET['remove_quan'];

	$prods_array = $_SESSION['prods_array'];
	foreach($prods_array as $k => $v){
		if($v['id'] == $id){
			$prods_array[$k]['quantity']--;
		}
	}
	$_SESSION['prods_array'] = $prods_array;
	$res['data'] = $prods_array; 
	$res['status'] = "ok";
	echo_json($res);

}

if(!empty($_GET['r_card_item'])){
	$id = $_GET['r_card_item'];
	$prods_array = $_SESSION['prods_array'];
	foreach($prods_array as $k => $v){
		if($v['id'] == $id){
			unset($prods_array[$k]);
		}
	}
	$i = 0;
	$new_array = array();	
	foreach($prods_array as $v){
		$new_array[$i] = $v;	
		$i++;	
	}

	$_SESSION['prods_array'] = $new_array;
	$res['data'] = $new_array; 
	$res['status'] = "ok";
	echo_json($res);
}
if(!empty($_GET['update_card'])){
	$prods_array = $_SESSION['prods_array'];
	$res['data'] = $prods_array; 
	$res['status'] = "ok";
	echo_json($res);
}
