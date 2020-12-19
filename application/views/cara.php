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
					<div class="style-grid-2-text_info" style="padding-right: 500px;">
					<h3>Cara Mencuci Handuk</h3>
					<p>
					Agar handuk Anda tetap awet, lakukan beberapa kiat berikut ini :
<ul>
<li>
	Pertama, cuci handuk sebelum digunakan pertama kali.
</li>
<li>
	Tambahkan setengah cangkir cuka pada air cucian untuk mencuci handuk baru.
</li>
<li>
	Cara itu membantu menjaga warnanya agar tidak mudah pudar.
</li>
<li>
	Kedua, jemurlah handuk di bawah sinar matahari langsung setiap hari agar handuk senantiasa kering dan terbebas dari jamur dan penyakit kulit.
</li>
<li>
	Usahakan tidak menggantung handuk terlalu lama di dalam kamar mandi karena akan membuat handuk menjadi lembap, bau, dan berjamur.
</li>
<li>
	Kiat ketiga, untuk noda yang sulit bersih, cobalah direndam ulang dengan air yang dicampur air cuka dapur.
</li>
<li>
	Setelah handuk dicuci bersih, jemurlah sampai kering kemudian simpan di lemari.
</li>
<li>
	Sebaiknya, handuk yang telah dijemur jangan disetrika karena akan membuat serat kain menjadi tipis.
</li>
</ul>
					</p>
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