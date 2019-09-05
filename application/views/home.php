<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Maison de Palmer</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="<?php echo base_url("assets/css/bootstrap.css") ?>" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/shop.css') ?>" type="text/css" media="screen" property="" />
	<link href="<?php echo base_url('assets/css/style7.css') ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url('assets/css/style.php') ?>" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="banner_top" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo">
					<a class="navbar-brand" href="index.html"><img src="<?php echo base_url('assets/images/logo_putih.png');?>" width="324" height="52" alt=""></a>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
					<nav>
						<ul>
							<li><a href="index.html" class="active">Home</a></li>
							<li><a href="<?php echo base_url('Home/about');?>">About</a></li>
							<li><a href="404.html">Team</a></li>
							<li><a href="<?php echo base_url('Home/product');?>">Shop Now</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							
						</form>
					</div>

				</div>
				<!-- //cart details -->
				<!-- search -->
				<div class="search_w3ls_agileinfo">
					<div class="cd-main-header">
						<ul class="cd-header-buttons">
							<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
						</ul>
					</div>
					<div id="cd-search" class="cd-search">
						<form action="#" method="post">
							<input name="Search" type="search" placeholder="Click enter after typing...">
						</form>
					</div>
				</div>
				<!-- //search -->

				<div class="clearfix"></div>
			</div>
			<!-- /slider -->
			<?php foreach ($slider as $s) { ?>
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">

						<li>
							<div style="background: url(<?php echo base_url('assets/images/'.$s->gambar3) ?>) no-repeat 0px 0px;background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; -moz-background-size: cover; min-height: 750px;" class="banner-top2">
								<div class="banner-info-wthree">
									<h3><?php echo $s->title3 ?></h3>
									<p><?php echo $s->sub3 ?></p>

								</div>

							</div>
						</li>
						<li>
							<div style="background: url(<?php echo base_url('assets/images/'.$s->gambar4) ?>) no-repeat 0px 0px;background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; -moz-background-size: cover; min-height: 750px;" class="banner-top3">
								<div class="banner-info-wthree">
									<h3><?php echo $s->title4 ?></h3>
									<p><?php echo $s->sub4 ?></p>

								</div>

							</div>
						</li>
						<li>
							<div style="background: url(<?php echo base_url('assets/images/'.$s->gambar1) ?>) no-repeat 0px 0px;background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; -moz-background-size: cover; min-height: 750px;" class="banner-top">
								<div class="banner-info-wthree">
									<h3><?php echo $s->title1 ?></h3>
									<p><?php echo $s->sub1 ?></p>

								</div>

							</div>
						</li>
						<li>
							<div style="background: url(<?php echo base_url('assets/images/'.$s->gambar2) ?>) no-repeat 0px 0px;background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; -moz-background-size: cover; min-height: 750px;" class="banner-top1">
								<div class="banner-info-wthree">
									<h3><?php echo $s->title2 ?></h3>
									<p><?php echo $s->sub2 ?></p>

								</div>

							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php } ?>
			<!-- //slider -->
			<ul class="top_icons">
				<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

			</ul>
		</div>
	</div>
	<!-- //banner -->
	<!-- /girds_bottom-->
	<div class="grids_bottom">
		<div class="style-grids">
			<div class="col-md-6 style-grid style-grid-1">
				<img src="<?php echo base_url('assets/images/img1.png');?>" alt="shoe">
			</div>
		</div>
		<div class="col-md-6 style-grid style-grid-2">
			<div class="style-image-1_info">
				<div class="style-grid-2-text_info">
					<h3>Terry Palmer Eternal</h3>
					<p>Cari handuk tanpa motif dari Terry Palmer? Maison de Palmer juga menyediakan handuk Terry Palmer Eternal! Tersedia dalam enam pilihan warna; purple, maroon, brown, green, yellow, dan mocca, serta hadir dalam tiga ukuran.</p>
					<div class="shop-button">
						<a href="shop.html">Lihat Detail</a>
					</div>
				</div>
			</div>
			<div class="style-image-2">
				<img src="<?php echo base_url('assets/images/img2.png');?>" alt="shoe">
				<div class="style-grid-2-text">
					<h3>Tery Palmer Eternal</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
	<!-- //grids_bottom-->
	<!-- /girds_bottom2-->
	<div class="grids_sec_2">
		<div class="style-grids_main">
			<div class="col-md-6 grids_sec_2_left">
				<div class="grid_sec_info">
					<div class="style-grid-2-text_info">
						<h3>Terry Palmer Batik</h3>
						<p>Handuk Terry Palmer Batik yang cocok untuk Seserahan <br><br><br><br></p>
						<div class="shop-button">
							<a href="shop.html">Lihat Detail</a>
						</div>
					</div>
				</div>
				<div class="style-image-2">
					<img src="<?php echo base_url('assets/images/img3.png');?>" alt="shoe">
					<div class="style-grid-2-text">
						<h3>Terry Palmer Batik</h3>
					</div>
				</div>
			</div>
			<div class="col-md-6 grids_sec_2_left">

				<div class="style-image-2">
					<img src="<?php echo base_url('assets/images/img4.png');?>" alt="shoe">
					<div class="style-grid-2-text">
						<h3>Terry Palmer Premium</h3>
					</div>
				</div>
				<div class="grid_sec_info last">
					<div class="style-grid-2-text_info">
						<h3>Terry Palmer Premium</h3>
						<p>Dirancang dengan material yang premium, desain eksklusif, dan anti-bakteri, handuk Terry Palmer Premium menjadi produk paling dicari oleh masyarakat Indonesia. Kebanyakan customer kami sudah mulai kesulitan mencari produk ini di pasaran.</p>
						<div class="shop-button two">
							<a href="shop.html">Lihat Detail</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //grids_bottom2-->
	<!-- /Properties -->
	<?php require_once('footer.php');?>
	<!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
	<!-- //js -->
	<!-- /nav -->
	<script src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/classie.js');?>"></script>
	<script src="<?php echo base_url('assets/js/demo1.js');?>"></script>
	<!-- //nav -->
	<!-- cart-js -->
	<script src="<?php echo base_url('assets/js/minicart.js');?>"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!--search-bar-->
	<script src="<?php echo base_url('assets/js/search.js');?>"></script>
	<!--//search-bar-->
	<script src="<?php echo base_url('assets/js/responsiveslides.min.js');?>"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- js for portfolio lightbox -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js');?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->

	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-3.1.1.min.js');?>"></script>


</body>

</html>