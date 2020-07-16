<div class="container">
<h2>Список товарів</h2>
<div class="prods_block">
<?php
foreach($prods as $v){
	include('../view/parts/prod.php');
}
?>

</div>
<div class="pan">
<?php 
$cl = "";

if($cur_page != 1){
	$last = $cur_page-1;
	echo "<a href='".$data['baseurl']."product_list/?page=$last' class='pan_item'> попередня </a>";
}

for($i = 1; $i <= $pages; $i++){
	if($i == $cur_page){ $cl = "pan_active";}
	if(($i != $cur_page) && (!empty($cl))){ $cl = "";}
	echo "<a href='".$data['baseurl']."product_list/?page=$i' class='pan_item $cl'>$i</a>";
}
if($cur_page < $pages){
	$next = $cur_page+1;
	echo "<a href='".$data['baseurl']."product_list/?page=$next' class='pan_item'> наступна</a>";
}

?>
</div>
</div>
