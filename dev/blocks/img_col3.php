<div class="row img">
<?php $url='img/';
$images = scandir($url);
if (false !== $images) {
    $imgarray = preg_grep('/\.(?:jpe?g)$/', $images);
	$x=0;$y=[false,false,false];
	foreach($imgarray as $row) {
		$col[$x] =$col[$x].'<div class="col-xs-12 intro">
<a class="fancybox" rel="gallery1" href="'.$url.htmlspecialchars(urlencode($row)).'" title="'.$photo_alt.'">
	<img src="'.$url.htmlspecialchars(urlencode($row)).'" alt="'.$photo_alt.'" class="img-responsive">
</a></div>' ;
		list($width_l, $height_l, $type_l, $attr_l) = getimagesize($url.$row);
		if ($height_l/$width_l>1.4) {$y[$x]=true;}
		$x++;if($x==3){$x=0;}
		if ($y[$x]) {$y[$x]=false;$x++;if($x==3){$x=0;}}
}}
?>
<div class="col-sm-4"><div class="row"><?php echo $col[0];?></div></div>
<div class="col-sm-4"><div class="row"><?php echo $col[1];?></div></div>
<div class="col-sm-4"><div class="row"><?php echo $col[2];?></div></div>
</div>