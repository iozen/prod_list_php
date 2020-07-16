<div class="container" align="center">
<h2>panel</h2>
</div>


<div class="container">
<h3>всі товари</h3>
<table>
<tr>
<td>заголовок</td>
<td>деталі</td>
<td>зображення</td>
<td>ціна</td>
</tr>
<?php 
foreach($prods as $v){

echo '

<tr>
<td>'.$v['title'].'</td>
<td>'.$v['about'].'</td>
<td><img src="'.$data['baseurl'].$v['img'].'" height="40px"></td>
<td>'.$v['price'].'</td>
</tr>

';

}

?>
</table>
</div>

