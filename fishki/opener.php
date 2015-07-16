<section id="opener">
		<div class="part p1">
			<div class="bg" style="background-image: url(<?php echo HTTP_URL_IMG;?>wohnen-5.jpg)"></div>
			<img class="seo-hidden" src="<?php echo HTTP_URL_IMG;?>wohnen-5.jpg" alt="">
			<div class="inner">
				<h1><span>Welcome to your</span><br><span>new home</span></h1>
				<a href="#">Step inside now</a>
			</div>
		</div>
		<div class="part p2">
			<div class="bg" style="background-image: url(<?php echo HTTP_URL_IMG;?>region-10.jpg)"></div>
			<img class="seo-hidden" src="<?php echo HTTP_URL_IMG;?>region-10.jpg" alt="">
			<div class="inner">
				<h1><span>Succumb to the charms of</span><br><span>Ticino's sunny side</span></h1>
				<a href="#">Soak up the atmosphere now</a>
			</div>
		</div>
</section>

<style>
section {
    position: relative;
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	vertical-align: baseline;
	background: transparent;
	overflow: hidden;
}
#opener {
  position: relative;
  overflow: hidden;
  margin: 0 0 68px;
  height: 60vh;
  background-color: #444;
}
#opener img {
  display: inline-block;
  vertical-align: middle;
  max-width: 100%;
  width: 100%;
  border: 0;
  -ms-interpolation-mode: bicubic;
}
#opener .part {
  position: absolute;
  top: 0;
  bottom: 0;
  overflow: hidden;
}
#opener .p1 {
  left: 0;
  right: 50%;
  -webkit-transition: right 2s ease, opacity 300ms linear;
  transition: right 2s ease, opacity 300ms linear;
}
#opener .p1 .inner {
  top: 36%;
  right: 15%;
  -webkit-transition: right 3s ease,margin-right 3s ease;
  transition: right 3s ease,margin-right 3s ease;
}
#opener .p2 {
  left: 50%;
  right: 0;
  -webkit-transition: left 2s ease, opacity 300ms linear;
  transition: left 2s ease, opacity 300ms linear;
}
#opener .p2 .inner {
  left: 15%;
  bottom: 21%;
  -webkit-transition: left 3s ease,margin-left 3s ease;
  transition: left 3s ease,margin-left 3s ease;
}

#opener .part .bg {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  -webkit-backface-visibility: hidden;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  position: absolute;
  top: -10px;
  left: -10px;
  right: -10px;
  bottom: -10px;
  -webkit-transition: all 3s ease;
  transition: all 3s ease;
}
.seo-hidden, .hide {display: none!important;}
#opener .part .inner {position: absolute; z-index: 1;}
#opener h1 {
  font-family: 'Foundry Sterling W01 Lt';
  font-size: 45px;
  line-height: 54px;
  margin: 0 0 9px;
  white-space: nowrap;
}
#opener h1 span {
  display: inline-block;
  background: rgba(255,255,255,.7);
  padding: 0 10px;
}
#opener a {
  background-color: rgba(0,0,0,.65);
  color: #fff;
  font-size: 20px;
  font-family: 'Foundry Sterling W02SC Lt';
  display: inline-block;
  height: 37px;
  line-height: 37px;
  padding: 0 20px;
  -webkit-transition: background-color .2s ease;
  transition: background-color .2s ease;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  border: none;
  margin: 0 0 0 10px;
}
</style>

<script>
$('#opener .p1').hover(function(){
	$(this).css('right', '30%');
	$('#opener .p2').css('left', '70%');
},function(){
	$(this).css('right', '50%');
	$('#opener .p2').css('left', '50%');
});
$('#opener .p2').hover(function(){
	$(this).css('left', '30%');
	$('#opener .p1').css('right', '70%');
},function(){
	$(this).css('left', '50%');
	$('#opener .p1').css('right', '50%');
});
$('#opener .p1 a').hover(function(){
	$('#opener .p2').css('opacity', '0.3');
},function(){
	$('#opener .p2').css('opacity', '1');
});
$('#opener .p2 a').hover(function(){
	$('#opener .p1').css('opacity', '0.3');
},function(){
	$('#opener .p1').css('opacity', '1');
});
</script>