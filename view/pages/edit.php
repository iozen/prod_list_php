<div class="container" align="center">
</div>


<div class="container form_blok_ec">
<div class="form">
<h3>Редагування </h3>
<form method="post" action="<?php echo $data['baseurl']; ?>panel/edit/action.php">
<input type="hidden" name="table" value="<?php echo $table;?>">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table>
<?php foreach($cols_ready as $v){
$ech = "<tr><td>$v</td><td><input name='$v' value='".$obj[$v]."'></td></tr>";
if($v == "status"){
	$ech = "<input type='hidden' name='$v' value='1'>";
}
if($v == "about"){
	$ech = "<tr><td>$v</td><td><textarea name='$v'>".$obj[$v]."</textarea></td></tr>";
}
if($v == "img"){
$ech = "<tr><td>$v</td><td><input name='$v' value='".$obj[$v]."' class='img_act'></td></tr>";
}
echo $ech;
}

?>
<tr><td colspan="2" align="center"><input type="submit" value="зберегти"></td></tr>
</table>
</form>
</div>
<div class="img"><h3>Картинки</h3>
<?php 
$dir = "../../pub/img";
$list = scandir($dir);

foreach($list as $k => $v){
	if($k != 0 && $k != 1){
	echo "<span style='padding:5px;'><img class='for_toch' src='".$data['baseurl']."pub/img/$v' route='pub/img/$v' width='100'></span>";
	}
}

?>
</div>
</div>
