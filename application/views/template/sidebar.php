<style>
    .sidebar-link li a {
        color: rgba(255, 255, 255, 0.6);
    }
    </style>
	   <!-- Sidebar -->
	   <aside class="wrap-sidebar js-sidebar">
			<div class="s-full js-hide-sidebar"></div>
			<div class="sidebar p-b-25 bg-dark text-white " style="min-width: 300px; max-width: 300px;">
				<div class="flex-r row position-relative mx-auto w-full p-b-30">
					<div class="img bg-wrap text-center py-4" style="background-image: url(upload/bg_1.jpg);">
						<div class="fs-35 lh-10 cl2 position-absolute top-0 start-0 pointer hov-cl1 trans-04 js-hide-sidebar">
							<i class="bi bi-x"></i>
						</div>
						<div class="user-logo">
							<div class="img" style="background-image: url(upload/logo.jpg);"></div>
							<h3> <?php echo $this->session->userdata('nama');?></h3>
						</div>
					</div>
				</div>

				<p class="stext-114 m-t--15 cl6"><center>Selamat datang <?php echo $this->session->userdata('nama');?><span style='font-size:20px;'>&#128075;</span></center> </p>
				
				<div class="flex-w w-full mt-4 p-lr-30 js-pscroll">
					<ul class="sidebar-link w-full ">
						<li class="p-b-13">
						<a href="<?php echo base_url('user')?>" class="stext-110 cl2 hov-cl1 trans-04">
								Master Data User
							</a>
						</li>
						<li class="p-b-13">
							<a href="<?php echo base_url('product')?>" class="stext-110 cl2 hov-cl1 trans-04">
								Master Data Produk
							</a>
						</li>
						<li class="p-b-13">
							<a href="<?php echo base_url('invoice')?>" class="stext-110 cl2 hov-cl1 trans-04">
								Invoice
							</a>
						</li>
						<li class="p-b-15">
							<a class="stext-110 cl2 hov-cl1 trans-04" href="<?php echo base_url('auth')?>"
							<i class="bi bi-box-arrow-right"> </i> Logout
							</a>
						</li>
					</ul>
				</div>

				<div class="position-absolute bottom-0 left-0 mb-3 ml-4">
                
                    <img src="upload/4EYES STORE.png" alt="IMG-LOGO" width="133" height="25">
                
                </div>

			
			</div>
		</aside>
		
</header>

<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
	

