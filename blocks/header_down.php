<!--header-->
<div class="grey"> 
<header class="hidden-xs"> 
  <div class="container-fluid back">
    <div class="row top-content">
		<div class="col-lg-4 col-md-4 col-sm-5 logo" id="logo"> 
		<a href="/">
<?php if (HTTP_ID == '/') { ?><img class="img-responsive center-block" src="img/logo.png" alt="" width="250">
<?php } else { ?><img class="img-responsive center-block" src="img/logo-black.png" alt="" width="250">
<?php } ?>
		</a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 logo adres">
			<span class="center-block"><i class="fa fa-map-marker fa-2x" style="margin-right:5px"></i>г. Владимир, ул. Мира, д. 15в, оф. 12</span>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 pull-right">
			<div class="phone"><span>+7 (4922) 37 73 90</span></div>
		</div>
	</div>
  </div>
</header> 
<!--navbar-->
<div class="container">
<nav class="navbar navbar-default navbar" id="navbar">
  <div class="nav-content">
    <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		<a class="visible-xs" href="/">
<?php if (HTTP_ID == '/') { ?><img class="img-responsive" width="120" src="<?php echo HTTP_SERVER;?>img/logo.png" alt="Агентство права и оценки" />
<?php } else { ?><img class="img-responsive" width="120" src="<?php echo HTTP_SERVER;?>img/logo-black.png" alt="Агентство права и оценки" />
<?php } ?>
		</a>
	</div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
<?php include($root.'blocks/menu');?>

    </div>
  </div>
</nav>
 </div> 
</div> 
