<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Product | Maison de Palmer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/shop.css'); ?>" type="text/css" media="screen" property="" />
	<link href="<?php echo base_url('assets/css/style7.css'); ?>" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui1.css'); ?>">
	<link href="<?php echo base_url('assets/css/style.php'); ?>" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<?php require_once('innerpage_header.php');?>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="<?php echo base_url('');?>">Home</a><i>|</i></li>
					<li>Product</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<h3 class="head" style="margin-bottom: 30px;">OUR PRODUCT</h3>

			<div class="left-ads-display col-md-12 ">

				<div class="wrapper_top_shop">
					<div class="col-md-6 shop_left">
						<img src="images/banner3.jpg" alt="">
						<h6>40% off</h6>
					</div>
					<div class="col-md-6 shop_right">
						<img src="images/banner2.jpg" alt="">
						<h6>50% off</h6>
					</div>
					<div class="clearfix"></div>
					<!-- product-sec1 -->
					<div class="product-sec1">
						<!--/mens-->
						<?php foreach ($produk as $p) { ?>
							<div class="col-md-4 product-men">
								<div class="product-shoe-info shoe">
									<div class="men-pro-item">
										<div class="men-thumb-item">
											<img src="<?php echo base_url('assets/images/product/' . $p->gambar); ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												<a href="<?php echo base_url("Home/detail_produk/".$p->nama_url); ?>" class="link-product-add-cart">View Detail</a>
												</div>
											</div>
										</div>
										<div class="item-info-product">
											<h4>
												<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><?php echo $p->nama; ?></a>
											</h4>
											<div class="info-product-price">
											
												<div class="grid_meta">
													<div class="product_price">
														<div class="grid-price ">
														</div>
													</div>
												</div>
												<div class="shoe single-item hvr-outline-out">
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
							
						<div class="clearfix"></div>

					</div>

					<!-- //product-sec1 -->
					<div class="col-md-6 shop_left shp">
						<img src="images/banner4.jpg" alt="">
						<h6>21% off</h6>
					</div>
					<div class="col-md-6 shop_right shp">
						<img src="images/banner1.jpg" alt="">
						<h6>31% off</h6>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php require_once('footer.php');?>
	<!-- //footer -->
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="<?php echo base_url('assets/js/minicart.js'); ?>"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function(evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/classie.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/demo1.js'); ?>"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="<?php echo base_url('assets/js/search.js'); ?>"></script>
	<!--//search-bar-->
	<!-- price range (top products) -->
	<script src="<?php echo base_url('assets/js/jquery-ui.js'); ?>"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function() {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function(event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js'); ?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-3.1.1.min.js'); ?>"></script>


</body>

</html>