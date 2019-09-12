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
	<?php require_once('innerpage_header.php');?>

				<div class="clearfix"></div>
			</div>
	<!-- //banner -->
				<div class="grid_sec_info last">
					<div class="style-grid-2-text_info">
					<h3>Teknologi Handuk</h3>
					<p>Kelebihan : </p>
					<ul>
						<li>Antibacterial Protection</li>
						<li>Daya Serap Bagus</li>
						<li>Handuk Tebal, Tekstur Lembut</li><br>
					</ul>
					<p>Premium merupakan handuk terry palmer kualitas terbaik dengan motif yang terus update setiap bulannya.</p>
					<p>Bisa dibilang, premium jenis handuk Terry Palmer dengan angka penjualan tertinggi / paling laris.</p>
					<p>Gramasinya yang tinggi membuat handuk ini sangat lembut sekaligus memiliki daya serap yang sangat baik.</p>
					<p>Handuk ini juga sudah anti bakteri.</p>
					<p>Handuk Terry Palmer merupakan handuk berkualitas tinggi (High Quality Towel) dengan bahan 100% cotton yang dapat sangat cepat menyerap air dan cepat kering.</p>
					<p>Handuk Terry Palmer ini juga sudah sangat mendunia di kalangan banyak orang termasuk hotel - hotel berbintang dan kualitas dari handuk ini sudah tidak diragukan lagi.</p>
					<p>Banyak motif, warna dan berbagai type yang tersedia mulai dari bermotif abstrak, bunga, polos, dan masih banyak lagi.</p>
						<div class="shop-button two">
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