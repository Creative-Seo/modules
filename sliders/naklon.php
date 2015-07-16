<section id="pixroll">
	<div class="pixroll-wrapper">
		<ul class="pixroll-images">
			<li><div><img src="img/slide1.jpg" alt=""></div></li>
			<li><div><img src="img/slide2.jpg" alt=""></div></li>
			<li><div><img src="img/slide3.jpg" alt=""></div></li>
		</ul>
		<div class="fader fader-left"></div>
		<div class="fader fader-right"></div>
	</div>
	<noindex>
    <div class="pixroll-text">
		<ul class="promo-slider">
			<li><div class="content" style="display:none">
					<div class="header">1956</div>
					<div class="text">год начала работы предприятия</div>
					<div class="boat">
						<div class="wrapper">
							<div class="boat_header">.</div>
							<div class="boat_prop">.</div>
						</div>
						<a href="javascript: void(0);"><span>Подробнее</span></a>
					</div>
			</div></li>
			<li><div class="content" style="display:none">
					<div class="header">29</div>
					<div class="text">единиц спецтехники</div>
					<div class="boat">
						<div class="wrapper">
							<div class="boat_header">.</div>
							<div class="boat_prop">.</div>
						</div>
						<a href="javascript: void(0);" class="boat_more"><span>Подробнее</span></a>
					</div>
			</div></li>
			<li><div class="content" style="display:none">
					<div class="header">150</div>
					<div class="text">сотрудников</div>
					<div class="boat">
						<div class="wrapper">
							<div class="boat_header">.</div>
							<div class="boat_prop">.</div>
						</div>
						<a href="/fleet/northernsearoute/" class="boat_more"><span>Подробнее</span></a>
					</div>
			</div></li>
		</ul>
	</div>
	</noindex>
</section>
<div class="asd">
<div class="container clearfix" id="bottom-slide">
	<div class="col-sm-4 col-lg-3 col-lg-offset-1 numbr" style="background-color:#060F18" ><span>1956</span> <div>год начала работы предприятия</div></div>
	<div class="col-sm-4 col-lg-3 numbr" style="background-color:#071321"><span>29</span> <div>единиц спецтехники</div></div>
	<div class="col-sm-4 col-lg-3 numbr" style="background-color:#0B1829"><span>150</span> <div>сотрудников</div></div>
</div>
</div>

<style>
.sl-slider-wrapper {
	width: 800px;
	height: 400px;
	margin: 0 auto;
	position: relative;
	overflow: hidden;
}
.sl-slider {position: absolute;top: 0;left: 0;}
.sl-slide, .sl-slides-wrapper, .sl-slide-inner {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
} 
.sl-slide {z-index: 1;}
.sl-content-slice {
	overflow: hidden;
	position: absolute;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	background: #fff;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-o-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	backface-visibility: hidden;
	opacity : 1;
}
.sl-slide-horizontal .sl-content-slice {
	width: 100%;
	height: 50%;
	left: -200px;
	-webkit-transform: translateY(0%) scale(1);
	-moz-transform: translateY(0%) scale(1);
	-o-transform: translateY(0%) scale(1);
	-ms-transform: translateY(0%) scale(1);
	transform: translateY(0%) scale(1);
}
.sl-slide-horizontal .sl-content-slice:first-child {
	top: -200px;
	padding: 200px 200px 0px 200px;
}
.sl-slide-horizontal .sl-content-slice:nth-child(2) {
	top: 50%;
	padding: 0px 200px 200px 200px;
}
.sl-slide-vertical .sl-content-slice {
	width: 50%;
	height: 100%;
	top: -200px;
	-webkit-transform: translateX(0%) scale(1);
	-moz-transform: translateX(0%) scale(1);
	-o-transform: translateX(0%) scale(1);
	-ms-transform: translateX(0%) scale(1);
	transform: translateX(0%) scale(1);
}
.sl-slide-vertical .sl-content-slice:first-child {
	left: -200px;
	padding: 200px 0px 200px 200px;
}
.sl-slide-vertical .sl-content-slice:nth-child(2) {
	left: 50%;
	padding: 200px 200px 200px 0px;
}
.sl-content-wrapper {position: absolute;}
.sl-content {
	width: 100%;
	height: 100%;
	background: #fff;
}
.sl-slide-horizontal .sl-slide-inner {background: #ddd;}
.sl-slide-vertical .sl-slide-inner {background: #ccc;}
</style>

<script src="js/jquery.bxslider.min.js"></script>
<script>
$(function () {
    var pixSlider = $('.pixroll-images').bxSlider({
        useCSS: false,
        pager: false,
        auto: true,
        pause: 8000,
        controls: false,
        slideWidth: 830,
        autoHover: true,
        minSlides: 3,
        maxSlides: 3,
        moveSlides: 1,
        onSlideNext: function ($slideElement, oldIndex, newIndex) {
            $('.parallax-container').removeClass('pulse_2').removeClass('css-animate');
            $slideElement.find('.parallax-container').addClass('pulse_2').addClass('css-animate');
            $('.bx-next').trigger('click');

        },
        onSlidePrev: function ($slideElement, oldIndex, newIndex) {
            $('.parallax-container').removeClass('pulse_2').removeClass('css-animate');
            $slideElement.find('.parallax-container').addClass('pulse_2').addClass('css-animate'); 
            $('.bx-prev').trigger('click');            
        },
        onSliderLoad: function(){
            $('.parallax-container').removeClass('pulse_2').removeClass('css-animate');
            $('.pixroll-images li').eq(3).find('.parallax-container').addClass('pulse_2').addClass('css-animate');
        }
    });

    $('.promo-slider').bxSlider({
        useCSS: false,
        pager: false,
        touchEnabled: false,
        onSlideNext: function ($slideElement, oldIndex, newIndex) {
            pixSlider.goToNextSlide();
        },
        onSlidePrev: function ($slideElement, oldIndex, newIndex) {
            pixSlider.goToPrevSlide();
        }
    });

});
</script>