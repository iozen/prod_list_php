<?php 

function set_coo($name, $data){
	$data = json_encode($data);
	if(!empty($_COOKIE[$name])){
		setcookie($name, $data);
	}else{

		$_COOKIE[$name] = $data;
	}

}

function get_coo($name){
	if(!empty($_COOKIE[$name])){
		$data =	$_COOKIE[$name];
		$data = json_decode($data, true);
		return $data;
	}else{
		return null;	
	}
}
