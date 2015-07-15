<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
include($root."/config.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="x-dns-prefetch-control" content="on" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<link rel="shortcut icon" href="<?php echo HTTP_SERVER;?>favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>"/>
<meta name="keywords" content="<?php echo $keywords; ?>" />

<link href="<?php echo HTTP_SERVER;?>css/kernel_main.css" type="text/css" rel="stylesheet">
<link href="<?php echo HTTP_SERVER;?>css/template_4b0f474ac1fe051a94efe7e1fcfb14c9_e7b63db696bd33bd1e.css" type="text/css" data-template-style="true" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo HTTP_SERVER;?>css/style.css">

</head>
<body>
<noindex>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-center">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <img class="img-responsive" src="" alt="">
    </div>
  </div>
</div>
</noindex>
<div class="container">

<!--HEADER-->
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
				<p><b>Газоблок 37</b></p>
				<hr>
				<small><b>Официальный дистрибьютор Ytong в Иваново и области</b></small>
				<hr>

			</a>
		</div>
	
		<div class="navbar-collapse collapse">
			<div class="navbar-left hidden-sm hidden-xs" style="width:40px"><p> </p></div>
	
<?php include($root.'blocks/menu');?>

			<div class="fone navbar-right hidden-sm hidden-xs">
				<p><span>+7 /4932/</span> 929-099</p>
				<a href="mailto:info@gazoblok37.ru" id="E-mail">E-mail: info@gazoblok37.ru</a>
			</div>
		</div>
	</div>

</header>
<!--/HEADER-->
<?php if (HTTP_ID=="/") {include("blocks/banner.php");}?>

<div class="row" style="margin: 10px 0px;">
<?php if (HTTP_ID=="calculator/") { ?>
	<div class="col-sm-12 col-md-12">
<?php } else { ?>
<!--LEFT COLUMN-->
	<div class="col-md-3 hidden-xs hidden-sm">
		<?php include($root."/blocks/sidebar.php");?>
	</div>
<!--RIGHT COLUMN-->
	<div class="col-sm-12 col-md-9">
<?php } ?>