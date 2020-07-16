<?php
class Db {

	public function put_query($qu) {
		try {
			$conn = new PDO('mysql:host=' . SERVER_DB . ';dbname=' . NAME_DB, DB_LOGIN, DB_PASS);
			$conn->exec("set names utf8");
			//  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$data = $conn->query($qu);
			if(!empty($data)){
				$result = array();
				foreach ($data as $key => $row) {
					$result[$key] = $row;
				}

			}else{
				$result = NULL;

			}

		} catch (PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
		if(!isset($result)){$result = array();}
		return $result;

	}
	public function insert_order($qu) {
		try {
			$conn = new PDO('mysql:host=' . SERVER_DB . ';dbname=' . NAME_DB, DB_LOGIN, DB_PASS);
			$conn->exec("set names utf8");
			//  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$data = $conn->query($qu);
		} catch (PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	//	$result = $conn->insert_id;
	//	return $result;

		return $conn->lastInsertId();

	}

	public function put_user($us){

		try {
			$conn = new PDO('mysql:host=' . SERVER_DB . ';dbname=' . NAME_DB, DB_LOGIN, DB_PASS);
			$conn->exec("set names utf8");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$query = $conn->prepare("insert into users (name, last_name, solr, pass, email, mobile)
				values (:name, :last_name, :solr, :pass, :email, :mobile)");

			$result = $query->execute(
				array(
					'name'=>$us['name'],      
					'last_name'=>$us['last_name'], 
					'solr'=>$us['solr'],      
					'pass'=>$us['pass'],      
					'email'=>$us['email'],     
					'mobile'=>$us['mobile']     
				));
		}
		catch (PDOException $e)
		{
			error_log($e->getMessage());
			die($e->getMessage());
		}

	//	return $conn->insert_id;
		return $conn->lastInsertId();
	}
}
?>
