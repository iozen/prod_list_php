<div class="container" align="center">
<h2>panel</h2>
</div>


<div class="container">
<h3>Замовлення</h3>
<?php 
echo '
ID: '.$order['order_id'].'
Час: '.$order['time'].'
Ім'."'".'я: '.$order['name'].' 
Фамілія: '.$order['last_name'].'
E-mail: '.$order['email'].'<br>';


?>
<h3>Замовленні товари</h3>
<table>
<tr><td>назва</td><td>зображення</td><td>переглянути деталі товару</td></td>
<?php 
foreach($prods as $v){

	echo "<tr><td>".$v['title']."</td><td><img src='".$data['baseurl'].$v['img']."' height='40px'></td><td><a href='".$data['baseurl']."panel/product/edit/?id=".$v['id']."'>переглянути деталі товару</a></td></td>";

}
?>
</table>
</div>
