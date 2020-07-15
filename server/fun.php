<?php 
function buy($id, $prod){
	if(empty($prod['quantity'])){$prod['quantity'] = 1;}
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
	
	set_coo('prods_array', $prods_array);
	return $prods_array;
}
function get_prod($id){

	$q = "select * from prods where id=$id;";
	$pr = put_query($q);
	$prod = $pr[0];

	return $prod;
}
function get_prods_array(){

	$prods_array = array();

	if(!empty(get_coo('prods_array'))){
		$prods_array = get_coo('prods_array');
	}

	return $prods_array;
}
