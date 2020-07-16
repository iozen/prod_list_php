<?php

// loading base

include_once('app/config.php');
include_once('app/defaults.php');

include_once('app/db.php');
include_once('app/tools.php');
include_once('app/server.php');

$db = new Db();
$tools = new Tools();
$server = new Serv_utils();

function part($name){
	include_once('view/parts/'.$name.'.php');
}
function page($name){
	include_once('view/pages/'.$name.'.php');
}

