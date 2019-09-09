<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
				<a class="navbar-brand" href="index.html"><img src="<?php echo base_url('assets/images/logo_putih.png');?>" width="324" height="52" alt=""></a>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
                        <ul>
							<li><a href="<?php echo base_url('Home');?>" class="active">Home</a></li>
							<li><a href="<?php echo base_url('Home/about');?>">About US</a></li>
							<li><a href="<?php echo base_url('Home/produk');?>">Our Product</a></li>
							<li><a href="<?php echo base_url('Home/contact');?>">Contact US</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->

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
				<form action="<?php echo base_url('Home/search'); ?>" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>