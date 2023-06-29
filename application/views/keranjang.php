<!-- breadcrumb -->
<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?php echo base_url('Home')?>" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>

    <!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" method="post" action="<?php echo base_url('pesanan')?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50" >
					<div class="m-l-25 m-r--38 m-lr-0-xl">
					<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th colspan="2" class="column-1"><center>Product</center></th>
									<th class="column-3"><center>Quantity</center></th>
									<th class="column-4"><center>Price</center></th>
									<th class="column-5"><center>Total</center></th>
									<th class="column-6"><center>Aksi</center></th>
								</tr>

								<?php foreach ($this->cart->contents() as $items) :
									$total =  $items['qty'] * $items['price'];
								?>
									<tr>
										<td class="column-1">
											<div class="how-itemcart1">
												<img src="upload/<?php echo $items['picture'] ?>" height="70" alt="IMG">
											</div>
										</td>
										<td class="column-2"><?php echo $items['name'] ?></td>
										<td class="column-3"><center><?php echo $items['qty'] ?></center></td>
										<td class="column-4"><center>Rp.<?php echo number_format($items['price'], 0, ',', '.') ?></center></td>
										<td class="column-5"><center>Rp.<?php echo number_format($total, 0, ',', '.') ?></center></td>
										<td class="column-6"><a href="<?php echo site_url('hapuskeranjang/index/'.$items['rowid']); ?>" class="btn btn-outline-danger">Hapus</a></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						
						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<a href="<?php echo base_url('katalog_product')?>">						
								<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
									Update Cart
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-43 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>
	
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									Rp. <?php echo number_format($this->cart->total(),0,',','.') ?>
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-308 w-full-ssm">
								<span class="stext-110 cl2">
								Shipping Address and
								<br> Payment Input:
								</span>
							</div>
							<div class="from-group p-t-15">
								<label for="exampleFormControlInput1">Email address</label>
								<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
							</div>
								
								<div class="p-t-15">
									<label for="exampleFormControlInput1">Nama Lengkap</label>
										<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
											<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap" required>	
										</div>
								</div>
								<div class="p-t-15">
									<label for="exampleFormControlInput1">Nomor Hp</label>
										<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
											<input type="text" name="no_hp" class="form-control" id="exampleFormControlInput1" placeholder="No Hp">
										</div>
								</div>
								<div class="p-t-15">
									<label for="exampleFormControlSelect1">Jasa Pengiriman</label>
										<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
											<select class="form-control" name="jasa" id="exampleFormControlSelect1">
											<option>J&T Exspress</option>
											<option>Pos Indonesia</option>
											<option>JNE</option>
											<option>TIKI (Titipan Kilat)</option>
											</select>
										</div>
								</div>
								<div class="p-t-15">
									<label for="exampleFormControlSelect1">Metode pembayaran</label>
										<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
											<select class="form-control" name="jasa" id="exampleFormControlSelect1">
											<option>Bank BRI-xxxxxxxx</option>
											<option>Bank BCA-xxxxxxxx</option>
											<option>Gopay</option>
											<option>OVO</option>
											<option>Dana</option>
											</select>
										</div>
								</div>
								<div class="p-t-15">
									<label for="exampleFormControlTextarea1">Alamat Lengkap</label>
										<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
											<textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" required></textarea>
										</div>
								</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
								Rp. <?php echo number_format($this->cart->total(),0,',','.') ?>
								</span>
							</div>
						</div>
					
						<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
					
					</div>
				</div>
			</div>
		</div>
	</form>