<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
<!--//Custom Theme files -->
<!--js-->

<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="<?php echo base_url();?>assets/js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href="<?php echo base_url();?>assets/css/fontx.css" rel="stylesheet">
<!--web-fonts-->
<!--animation-effect-->
<link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-nav navbar navbar-default">
			<div class="container">
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h4 style="padding-top:10px"><a href="index.html">DNS <b>MUSLIM</b><span class="tag">YOUR MUSLIM WEAR</span> </a></h4>
				</div>

				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info navbar-left">
							<li><a href="<?=base_url()?>home" <?=$tab?> >Beranda</a></li>
							<li><a href="<?=base_url()?>products" <?=$tab1?>>Produk</a></li>
							<li><a href="<?=base_url()?>business" <?=$tab2?>>Peluang Bisnis</a></li>
							<li><a href="<?=base_url()?>about" <?=$tab3?>>D&S Muslim</a></li>
						</ul>
						<ul class="nav navbar-nav top-nav-info2 navbar-right">
							<li><a href="login.html" class="active2">Masuk</a></li>
							<li><a href="register.html" class="active3">Daftar</a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
					<!--//navbar-header-->
				</nav>

			</div>
		</div>
	</div>
	<!--//header-->
