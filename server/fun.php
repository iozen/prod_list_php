<?php 
function buy($id, $prod){
	$prod['quantity'] = 1;
	$prods_array = get_prods_array();
	$push_status = true;

	foreach($prods_array as $k => $v){
		if($prod['id'] == $v['id']){
			$prods_array[$k]['quantity']++;
			$push_status = false;
		}
	}

	if($push_status == true){
		array_push($prods_array, $prod);
	}
	$_SESSION['prods_array'] = $prods_array;
}
function get_prod($id){

	$q = "select * from prods where id=$id;";
	$pr = put_query($q);
	$prod = $pr[0];

	return $prod;
}
function get_prods_array(){

	$prods_array = array();

	if(!empty($_SESSION['prods_array'])){
		$prods_array = $_SESSION['prods_array'];
	}
	return $prods_array;
}
