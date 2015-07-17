<header class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Меню</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a id="logo" href="<?php echo HTTP_SERVER;?>" class="navbar-brand">
				<img class="img-responsive" width="120" src="<?php echo HTTP_SERVER;?>img/logo.png" alt="<?php echo COMPANY;?>"/>
			</a>
		</div>
	
		<div class="navbar-collapse collapse">
			<div class="navbar-left hidden-sm hidden-xs" style="width:40px"><p> </p></div>
	
<?php include($root.'blocks/menu');?>

			<div class="fone navbar-right hidden-sm hidden-xs">
				<p><?php echo PHONE;?></p>
				<a href="mailto:info@gazoblok37.ru" id="E-mail">E-mail: <?php echo EMAIL; ?></a>
			</div>
		</div>
	</div>
</header>