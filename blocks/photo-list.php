<div class="row">
<?php 
$images = scandir($root.$photo_dir);
if (false !== $images) {
    $imgarray = preg_grep('/s\.(?:jpe?g)$/', $images);
	foreach($imgarray as $row) { 
?>  
	<div class="<?php echo $photo_col;?>">
		<a href="<?php echo HTTP_SERVER,$photo_dir,str_replace('s','',htmlspecialchars(urlencode($row)));?>" class="fancybox-thumb" rel="group" title="<?php echo $photo_alt;?>">
			<img class="img-responsive" src="<?php echo HTTP_SERVER,$photo_dir,htmlspecialchars(urlencode($row));?>" alt="<?php echo $photo_alt;?>">
	</a></div>
<?php }} ?>
</div>