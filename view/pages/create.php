<div class="container" align="center">
</div>


<div class="container">
<h3>Створення елемента </h3>
<form method="post" action="<?php echo $data['baseurl']; ?>panel/create/action.php">
<input type="hidden" name="table" value="<?php echo $table;?>">
<table>
<?php foreach($cols_ready as $v){
$ech = "<tr><td>$v</td><td><input name='$v'></td></tr>";

if($v == "status"){
	$ech = "<input name='$v' value='1' type='hidden'>";
}
if($v == "img"){
	$ech = "<tr><td></td><td><input name='$v' value='pub/img/pr.svg'></td></tr>";
}
if($v == "about"){
	$ech = "<tr><td></td><td><textarea name='$v'></textarea></td></tr>";
}
echo $ech;
}

?>
<tr><td colspan="2" align="center"><input type="submit" value="зберегти"></td></tr>
</table>
</form>
</div>
