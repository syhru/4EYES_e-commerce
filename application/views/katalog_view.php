<!-- Product -->
<div class="bg m-t-70 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					
				</div>
			</div>

			<div class="row isotope-grid">
			<?php
				foreach($product->result() as $row):
				?>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo base_url().'/upload/'.$row->product_picture;?>" alt="IMG-PRODUCT">

							
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<p class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row->product_name;?>
								</p>

								<span class="stext-105 cl3">
									Rp.<?php echo number_format($row->product_price);?>
								</span>
								<?php echo anchor('katalog_product/tambah_ke_keranjang/'. $row ->product_id,
									'<div class="btn btn-outline-primary mt-3"><i class="bi bi-bag-plus" style="font-size: 1.3rem;"></i> ke Keranjang </div>') ?>
									
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="assets/images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="assets/images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				

				
				
				<?php endforeach?> 
			</div>
		</div>
	</div>

	
	  
