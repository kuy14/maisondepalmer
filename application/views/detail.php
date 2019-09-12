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
	<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/shop.css');?>" type="text/css" media="screen" property="" />
	<link href="<?php echo base_url('assets/css/style7.css');?>" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css');?>" type="text/css" media="screen" />
	<link href="<?php echo base_url('assets/css/easy-responsive-tabs.css');?>" rel='stylesheet' type='text/css' />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui1.css');?>">
	<link href="<?php echo base_url('assets/css/style.php');?>" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
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
					<li><a href="<?php echo base_url('Home/produk');?>">Produk</a><i>|</i></li>
                    <li>Detail</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<?php foreach ($produk as $p) { ?>
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="">
								<div class="thumb-image"> <img src="<?php echo base_url('assets/images/product/'.$p->gambar); ?>" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3><?php echo $p->nama; ?></h3>
				<p><span class="item_price">Rp. <?php echo $p->price; ?></span>
					<del></del>
				</p>
			</div>
			<div class="color-quality">
				<div class="color-quality-right">
					<h5>Harga</h5> 
					<p><?php echo $p->price; ?></p>
					<h5>Gramasi</h5>
					<p><?php echo $p->gramasi; ?></p>
					<h5>Ukuran</h5>
					<p><?php echo $p->size; ?></p>
					<h5>Warna</h5>
					<p><?php echo $p->warna; ?></p><br>
				</div>
			</div>
				<ul class="social-nav model-3d-0 footer-social social single_page">
					<li class="share">Share On : </li>
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			
			<?php } ?>
			
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
	<!-- single -->
	<script src="<?php echo base_url('assets/js/imagezoom.js');?>"></script>
	<!-- single -->
	<!-- script for responsive tabs -->
	<script src="<?php echo base_url('assets/js/easy-responsive-tabs.js')?>"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- FlexSlider -->
	<script src="<?php echo base_url('assets/js/jquery.flexslider.js');?>"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!--search-bar-->
	<script src="<?php echo base_url('assets/js/search.js');?>"></script>
	<!--//search-bar-->
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
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-3.1.1.min.js')?>"></script>


</body>

</html>