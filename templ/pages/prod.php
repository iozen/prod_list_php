<div class="container">
<h2> <?php echo $pr['title'];?></h2>
<img src="<?php echo $data['baseurl'] . $pr['img'];?>"><br>
<?php echo  $pr['about'];?><br>
<span class="pr_price"> ціна <?php echo $pr['price'];?></span><br>
<span class="pr_buy" pr_id="<?php echo $pr['id'];?>">купити</span>
</div>

