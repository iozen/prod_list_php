<?php


	function put_query($qu) {
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
function put_user($us){

	try {
		$conn = new PDO('mysql:host=' . SERVER_DB . ';dbname=' . NAME_DB, DB_LOGIN, DB_PASS);
		$conn->exec("set names utf8");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$query = $conn->prepare("insert into users (name, last_name, solr, pass, email, mobile,  time)
			values (:name, :last_name, :solr, :pass, :email, :mobile,  :time)");

		$query->execute(
			array(
				'name'=>$us['name'],      
				'last_name'=>$us['last_name'], 
				'solr'=>$us['solr'],      
				'pass'=>$us['pass'],      
				'email'=>$us['email'],     
				'mobile'=>$us['mobile'],     
				'time'=>$us['time'] 
			));
	}
	catch (PDOException $e)
	{
		error_log($e->getMessage());
		die($e->getMessage());
	}

}
?>
