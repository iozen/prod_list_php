<div class="container">
<h3>Замовлення</h3>
<table>
<?php 
echo '
<tr><td>ID:</td><td> '.$order['order_id'].'</td></tr>
<tr><td>Час:</td><td> '.$order['time'].'</td></tr>
<tr><td>Ім'."'".'я:</td><td> '.$order['name'].' </td></tr>
<tr><td>Фамілія:</td><td> '.$order['last_name'].'</td></tr>
<tr><td>E-mail:</td><td> '.$order['email'].'</td></tr>';


?>
<table>
<h3>Замовленні товари</h3>
<table>
<tr><td>Назва</td><td>Зображення</td><td>Редагувати товар</td></td>
<?php 
foreach($prods as $v){

	echo "<tr><td>".$v['title']."</td><td><img src='".$data['baseurl'].$v['img']."' height='40px'></td><td><a href='".$data['baseurl']."panel/edit/?id=".$v['id']."&table=prods'>Редагувати</a></td></td>";

}
?>
</table>
</div>
