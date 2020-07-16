
<div class="container">
<h3>Замовлення</h3>
<table>
<tr>
<td>ID</td>
<td>Час</td>
<td>Ім'я</td>
<td>Фамілія</td>
<td>E-mail</td>
<td>Деталі/Редагування</td>
</tr>
<?php 
foreach($orders as $v){

echo '

<tr>
<td>'.$v['order_id'].'</td>
<td>'.$v['time'].'</td>
<td>'.$v['name'].'</td>
<td>'.$v['last_name'].'</td>
<td>'.$v['email'].'</td>
<td><a href="'.$data['baseurl'].'panel/edit_order/?id='.$v['order_id'].'">Деталі</a></td>
</tr>

';

}

?>
</table>
</div>

