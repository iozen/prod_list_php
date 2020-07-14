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
?>
