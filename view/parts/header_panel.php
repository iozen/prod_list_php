<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Store sketch</title>
	<link rel="stylesheet" href="<?php echo $GLOBALS['data']['baseurl']; ?>pub/css/s.css" />
	<script type="text/javascript" src="<?php echo  $GLOBALS['data']['baseurl'];?>pub/jquery/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo  $GLOBALS['data']['baseurl'];?>pub/app_panel.js"></script>
</head>
<body class="panel" onload="changing_img();">
<header>
<div class="container">
<a class="panel_tlink" href="<?php echo $GLOBALS['data']['baseurl'];?>panel/">Замовлення</a>
<a class="panel_tlink" href="<?php echo $GLOBALS['data']['baseurl'];?>panel/product/">Товари</a>
<a class="panel_tlink" href="<?php echo $GLOBALS['data']['baseurl'];?>panel/create/?table=prods">+Створити товар</a>
<a class="panel_tlink" href="<?php echo $GLOBALS['data']['baseurl'];?>">+Створити замовленя</a>
</div>
</header>
