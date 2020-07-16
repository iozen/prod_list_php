<div class="container" align="center"><h2>Оформлення замовлення</h2>
</div>


<div class="container checkout_cont">
<div class="left">
<h2>Реєстрація</h2>
<div class="error_block">

<?php 
if(!empty($_GET['error'])){
	echo $_GET['error'];
}


?>



</div>
<form method="POST" action="<?php echo $data['baseurl'];?>server/?checkout_registr=-">
<table>
<tr><td> Ім'я </td><td><input name="name" placeholder="Петро"></td></tr>
<tr><td> Фамілія </td><td><input name="last_name" placeholder="Петрович"></td></tr>
<tr><td> Мобільний </td><td><input name="mobile" type="mobile" placeholder="0637533373"></td></tr>
<tr><td colspan="2" align="center">--- </td></tr>

<tr><td> E-mail </td><td><input name="email" type="email" placeholder="myaddrs@gmail.com"></td></tr>
<tr><td> Пароль </td><td><input name="pass" type="password"></td></tr>
<tr><td> Підтвердження пароля </td><td><input name="pass2" type="password"></td></tr>

<tr><td colspan="2" align="center"><input type="submit" value="Оформити замовлення" class="pr_buy"></td></tr>

</table>

</form>

</div>
<div class="right"><h2>Корзина</h2>

<div class="card_inner">



</div>
<a href="<?php echo $data['baseurl'];?>product_list/">Продовжити купувати</a>
</div>
</div>

