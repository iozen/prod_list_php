<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Store sketch</title>
	<link rel="stylesheet" href="<?php echo $data['baseurl']; ?>pub/css/s.css" />
	<script type="text/javascript" src="<?php echo  $data['baseurl'];?>pub/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
var params = {
 baseurl: "<?php echo $data['baseurl'];?>"
      }
</script>
</head>
<body onload="init(params);">
<header>
<div class="container">
<a href="<?php echo $GLOBALS['data']['baseurl'];?>panel/">Замовлення</a>
 <a href="<?php echo $GLOBALS['data']['baseurl'];?>panel/product/">Товари</a>
</div>
</header>
