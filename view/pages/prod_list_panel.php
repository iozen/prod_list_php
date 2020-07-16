<div class="container">
<h3>всі товари</h3>
<table>
<tr>
<td>Заголовок</td>
<td>Деталі</td>
<td>Зображення</td>
<td>Ціна</td>
<td>Редагування</td>
<td>Видалення</td>
</tr>
<?php 
foreach($prods as $v){

echo '

<tr>
<td>'.$v['title'].'</td>
<td>'.$v['about'].'</td>
<td><img src="'.$data['baseurl'].$v['img'].'" height="20px"></td>
<td>'.$v['price'].'</td>
<td><a href="'.$data['baseurl'].'panel/edit/?id='.$v['id'].'&table=prods">Редагувати</a></td>
<td><a href="'.$data['baseurl'].'panel/remove/?id='.$v['id'].'&table=prods">Видалити</a></td>
</tr>

';

}

?>
</table>
</div>

