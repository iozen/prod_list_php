<?php 
class Tools {
	public function echo_json($data){

		$res = json_encode($data);
		echo $res;
	}
	public function make_hash($data){
		return hash('sha256', $data);
	}
	public function make_rand($long){

		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$rand = array(); 
		$alphaLength = strlen($alphabet) - 1; 
		for ($i = 0; $i <= $long; $i++) {
			$n = rand(0, $alphaLength);
			$rand[] = $alphabet[$n];
		}
		return implode($rand); 	


	}
}
