<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


<!--===============================================================================================-->	
    <link href="<?php echo base_url() ?>assets/images/icons/logo1.png" rel="icon" type="text/css">
<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/fonts/iconic/css/material-design-iconic-font.min.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/fonts/linearicons-v1.0.0/icon-font.min.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/vendor/animate/animate.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->	
    <link href="<?php echo base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/vendor/animsition/css/animsition.min.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/vendor/select2/select2.min.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->	
    <link href="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/vendor/slick/slick.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/vendor/MagnificPopup/magnific-popup.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
    <link href="<?php echo base_url() ?>assets/css/util.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->

<body class="animsition">
	
	<!-- Header -->
	<header class="header-v3">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="<?php echo base_url('Home')?>" class="logo">
						<img src="upload/4EYES STORE.png" alt="IMG-LOGO" width="153" height="23">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
						<li>
                                <a href="<?php echo base_url('Home')?>">Home</a>
							</li>

							<li class="label1" data-label1="hot">
                                <a href="<?php echo base_url('katalog_product')?>">Shop</a>
							</li>

							<li>
                                <a href="<?php echo base_url('detail_keranjang')?>">Cart</a>
							</li>

							<li>
								<a href="<?php echo base_url('about')?>">About</a>
							</li>

							<li>
								<a href="<?php echo base_url('contact')?>">Contact</a>
							</li>
						</ul>
					</div>	

				

                    <!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">							
						<div class="flex-c-m h-full p-r-25 bor6">
                        <a href="<?php echo base_url('detail_keranjang')?>">
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="<?Php echo $this->cart->total_items();?>">
								
								<lord-icon
									src="https://cdn.lordicon.com/lpddubrl.json"
									trigger="loop-on-hover"
									delay="100"
									colors="primary:#4be1ec,secondary:#cb5eee"
									stroke="100"
									style="width:50px;height:50px">
								</lord-icon>
								</div>
							</a>
							</div>
						</div>
							
						<div class="flex-c-m h-full p-lr-19">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
								<i class="zmdi zmdi-menu"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
        <div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="<?php echo base_url('Home')?>"><img src="upload/4EYES STORE2.png" alt="IMG-LOGO" width="133" height="17"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-5">
				<a href="<?php echo base_url('detail_keranjang')?>">
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="<?Php echo $this->cart->total_items();?>">
								
								<lord-icon
									src="https://cdn.lordicon.com/lpddubrl.json"
									trigger="loop-on-hover"
									delay="100"
									colors="primary:#4be1ec,secondary:#cb5eee"
									stroke="100"
									style="width:40px;height:40px">
								</lord-icon>
								</div>
							</a>
				</div>
			</div>


		<!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


<!-- Menu Mobile -->
<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="<?php echo base_url('Home')?>">Home</a>
				</li>

				<li>
					<a href="<?php echo base_url('katalog_product')?>" class="label1 rs1" data-label1="hot">Shop</a>
				</li>

				<li>
					<a href="<?php echo base_url('detail_keranjang')?>">Cart</a>
				</li>

				<li>
					<a href="#">Data Admin</a>
					<ul class="sub-menu-m">
						<li><a href="<?php echo base_url('User')?>">Master Data User</a></li>
						<li><a href="<?php echo base_url('product')?>">Master Data Produk</a></li>
						<li><a href="<?php echo base_url('invoice')?>">Invoice</a></li>
					</ul>
						

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="<?php echo base_url('about')?>">About</a>
				</li>

				<li>
					<a href="<?php echo base_url('contact')?>">Contact</a>
				</li>

				<li>
					<a href="<?php echo base_url('auth')?>"><i class="bi bi-box-arrow-right">&nbsp;</i> Logout</a>
				</li>
			</ul>
		</div>

			<!-- Modal Search -->
            <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04">
				<i class="zmdi zmdi-close"></i>
			</button>

			<form class="container-search-header">
				<div class="wrap-search-header">
					<input class="plh0" type="text" name="search" placeholder="Search...">

					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>

	

