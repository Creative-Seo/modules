<section id="wrapper">
	<div id="setka"></div>
	<div style="z-index:-2; opacity:1; background-color:#779" class="fons"></div>

	<div style="z-index:-2; opacity:0; background-image: url(../img/Stroitelstvo_Slayd.jpg)" class="fons prodazha-domov"></div>
	<div style="z-index:-2; opacity:0; background-image: url(../img/Dizayn_interyera_Slayd.jpg)" class="fons dizayn-interyera"></div>
	<div style="z-index:-2; opacity:0; background-image: url(../img/Gazobloki_Slayd.jpg)" class="fons gazobloki"></div>
	<div style="z-index:-2; opacity:0; background-image: url(../img/Proekty_domov_Slayd.jpg)" class="fons proekty-domov"></div>
	<div style="z-index:-1; opacity:1; background-image: url(../img/Prodazha_domov_Slayd.jpg)" class="fons stroitelstvo"></div>
<div class="footer_shadow" style="bottom: 0px;"></div>
</section>
<div class="shadow"></div>

<?php include($root."/blocks/header.php"); ?>

<div class="container child hidden-sm hidden-xs">
	<div class="jumbotron"><p><span>Более 100</span> построенных <br> домов</p></div>
</div>
<div class="container center-block" id="icons">
    <ul class="nav nav-pills nav-justified">
		<li class="action">
			<a href="/stroitelstvo/" data-pointer="stroitelstvo">
				<img src="img/Stroitelstvo_Ikonka.png" alt="">
				<p class="text">Cтроительство</p>
			</a>
		</li>
		<li>
			<a href="/proekty-domov/" data-pointer="proekty-domov">
				<img src="img/Proekty_domov_Ikonka.png" alt="">
				<p class="text">Проекты домов</p>
			</a>
		</li>
		<li>
			<a href="/kupit-dom/" data-pointer="prodazha-domov">
				<img src="img/Prodazha_domov_Ikonka.png" alt="">
				<p class="text">Продажа домов</p>
			</a>
		</li>
		<li>
			<a href="/dizayn-interera/" data-pointer="dizayn-interyera">
				<img src="img/Dizayn_interyera_Ikonka.png" alt="">
				<p class="text">Дизайн интерьера</p>
			</a>
		</li>
		<li>
			<a href="/gazobloki/" data-pointer="gazobloki">
				<img src="img/Gazobloki_Ikonka.png" alt="">
				<p class="text">Газоблоки</p>
			</a>
		</li>
	</ul>
</div>

<link href="css/work.css" rel="stylesheet">
<?php include("blocks/footer.php");?>
<script>
var img='#wrapper .stroitelstvo';
var a = {'stroitelstvo' : '<p><span>Более 100</span> построенных<br> домов</p>',
		'proekty-domov' : '<p><span>Наши проекты</span> всегда высокого<br> качества</p>',
		'prodazha-domov' : '<p><span>Огромный выбор</span><br> самых разных<br> построек</p>',
		'dizayn-interyera' : '<p><span>Мы</span><br> осуществим<br> вашу мечту</p>',
		'gazobloki' : '<p><span>Сопутствующие товары</span><br> и многое другое</p>'};
$(document).ready(function (){
	$('#icons a').mouseenter(function () {
		var pointer = '#wrapper .'+$(this).attr('data-pointer');
		if (img!=pointer) {
			$('#icons li').removeClass('action');
			$(this).parent().addClass('action');
			$('.child .jumbotron').html(a[$(this).attr('data-pointer')]);
			$(pointer).css('z-index', 0).css('opacity', 1);
			$(img).css('z-index', -2).css('opacity', 0);
			$(pointer).css('z-index', -1);
			img=pointer;
		}
	});
});
</script>