<div class="container" align="center">
</div>


<div class="container">
<h3>Редагування </h3>
<form method="post" action="<?php echo $data['baseurl']; ?>panel/edit/action.php">
<input type="hidden" name="table" value="<?php echo $table;?>">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table>
<?php foreach($cols_ready as $v){
echo "<tr><td>$v</td><td><input name='$v' value='".$obj[$v]."'></td></tr>";
}

?>
<tr><td colspan="2" align="center"><input type="submit" value="зберегти"></td></tr>
</table>
</form>
</div>
