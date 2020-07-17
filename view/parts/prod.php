<div class="prod">
<?php 
echo '
<a href="'.$data['baseurl'].'product/?id='.$v['id'].'"> '.$v['title'].'<br>
<img src=' .$data['baseurl'].$v['img'].' width="100"></a><br>
<span class="pr_price"> ціна '.$v['price'].'</span><br>
<span class="pr_buy" pr_id="'.$v['id'].'" id="buy_it">купити</span>
';
?>
</div>
