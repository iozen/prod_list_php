<?php 

session_cache_expire(1440);
session_start();

include_once('../init.php');
include_once('../app/tools.php');
include_once('../app/server.php');

$res = array(
	'status'=>0,
	'data'=>null,
	'html'=>""
);



	$error = array();
	$error['error'] = NULL;
	$error['field'] = array();

	$post = array(
		'name' => $_POST['name'],
		'last_name' => $_POST['last_name'],
		'pass' => $_POST['pass'],
		'pass2' => $_POST['pass2'],
		'email' => $_POST['email'],
		'mobile' => $_POST['mobile']

	);
	foreach($post as $k =>  $v){
		$post[$k] = $server->test_input($post[$k]);	

	}
	$error = $server->check_fields_data($post);



	if($error['error'] != NULL){
		$str = "";	
		foreach($error['field'] as $v){

			$str .= " $v <br>";	
		}	
		$loc = $data['baseurl'] . "checkout/?error=".$str;	
		header('Location: '.$loc);
	}else{

		$solr = $tools->make_rand(5);
		$pass = $post['pass'] . $solr; 
	        $post['pass'] = $tools->make_hash($pass);;
	        $post['solr'] = $solr;	
		
		$usr_id = $db->put_user($post);
		$prods_array = $server->get_prods_array();

                $q = "insert into orders (usr_id, ip) values('$usr_id', '255.255.255.255');";
	        $ord_id = $db->insert_order($q);

		foreach($prods_array as $v){
			$pr_id = $v['id'];
                $q = "insert into orders_connection (prod_id, order_id) values('$pr_id', '$ord_id');";
         	$db->put_query($q);	
		
		}

		$loc = $data['baseurl'] . "panel/";	
		header('Location: '.$loc);

	}

