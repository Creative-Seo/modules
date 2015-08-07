<?php $clearfix ='';
	if (($key+1) % 2 == 0) {$clearfix=' visible-sm';}
	if (($key+1) % 3 == 0) {$clearfix=$clearfix.' visible-md';}
	if (($key+1) % 4 == 0) {$clearfix=$clearfix.' visible-lg';}
	if (strlen($clearfix)>0) {
?>
	<div class="clearfix<?php echo $clearfix; ?>"></div>
<?php } ?>