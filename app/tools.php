<?php 
class Tools {
	public function echo_json($data){

		$res = json_encode($data);
		echo $res;
	}
}
