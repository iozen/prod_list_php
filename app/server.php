<?php 
class Serv_utils {
	public function buy($id, $prod){
		$prod['quantity'] = 1;
		$prods_array = $this->get_prods_array();
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
	public function get_prod($id){
		$db = new Db();

		$q = "select * from prods where id=$id;";
		$pr = $db->put_query($q);
		$prod = $pr[0];

		return $prod;
	}
	public function get_prods_array(){

		$prods_array = array();

		if(!empty($_SESSION['prods_array'])){
			$prods_array = $_SESSION['prods_array'];
		}
		return $prods_array;
	}
	public function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	public function check_fields_data($post_data){


		$error['error'] = NULL;
		$error['code'] = [];
		if($post_data['pass'] != $post['pass2']){
			$error['error'] = 1;
			$error['field']['pass'] = "Паролі не співпадають";
			array_push($error['code'], "100");
		}

		if (strlen($post_data['name']) >= 60) {
			$error['error'] = 1;
			$error['field']['name'] = "Ім'я задовге";
			array_push($error['code'], "001");
		}

		if (strlen($post_data['name']) <= 2) {
			$error['error'] = 1;
			$error['field']['name'] = "Ім'я закоротке";
			array_push($error['code'], "002");
		}

		if (strlen($post_data['pass']) >= 60) {
			$error['error'] = 1;
			$error['field']['pass'] = "Значення пароля задовге";
			array_push($error['code'], "001");
		}

		if (strlen($post_data['pass']) <= 2) {
			$error['error'] = 1;
			$error['field']['pass'] = "Значення пароля закоротке";
			array_push($error['code'], "002");
		}

       /* if (!preg_match("/^[a-zA-Z]+[а-яА-Я ]*$/", $post_data['name'])) {
	    $error['error'] = 1;
	    $error['field']['last_name'] = "In Name only letters and white space allowed";
	    array_push($error['code'], "003");
       }*/
		if (strlen($post_data['last_name']) >= 60) {
			$error['error'] = 1;
			$error['field']['last_name'] = "Фамілія задовга!";
			array_push($error['code'], "004");
		}

		if (strlen($post_data['last_name']) <= 2) {
			$error['error'] = 1;
			$error['field']['last_name'] = "Фамілія закоротка!";
			array_push($error['code'], "005");
		}
       /* 
	if (!preg_match("/^[a-zA-Z]+[а-яА-Я ]*$/", $post_data['last_name'])) {
	    $error['error'] = 1;
	    $error['field']['last_name'] = "In Last Name only letters and white space allowed";
	    array_push($error['code'], "006");
	}
	*/
		if (!filter_var($post_data['email'], FILTER_VALIDATE_EMAIL)) {
			$error['error'] = 1;
			$error['field']['email'] = "Неправельний формат e-mail";
			array_push($error['code'], "007");

		}

		return $error;
	}


}
