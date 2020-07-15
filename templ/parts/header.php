<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Store sketch</title>
	<link rel="stylesheet" href="<?php echo $data['baseurl']; ?>pub/css/s.css" />
	<script type="text/javascript" src="<?php echo  $data['baseurl'];?>pub/jquery/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo  $data['baseurl'];?>pub/app.js"></script>
<script type="text/javascript">
var params = {
 baseurl: "<?php echo $data['baseurl'];?>"
      }
</script>
</head>
<body onload="init(params);">
<header>
<div class="container card_cont" style="display:none;">
<div class="card_inner">



</div>
<a href="#" class="close_card pr_buy">Продовжити купувати</a>
<a href="<?php $data['baseurl'];?>/checkout/" class="pr_buy">Оформити замовлення</a>
</div>
<div class="container">
<div class="header_inner">

<div class="ht_menu">
<a href="<?php echo $data['baseurl'];?>">Головна</a>
<a href="<?php echo $data['baseurl']."product_list/";?>">Товари</a>

</div>
<div class="th_card">
<img src="<?php echo $data['baseurl'];?>pub/img/card.svg"><br>
кошик
</div>
</div>
</div>
</header>
