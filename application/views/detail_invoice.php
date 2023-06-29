<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<div class="container-fluid" style="margin-top: 50px;">
<br>
    <h4>
        <center>
            Detail Invoice
        </center>
    </h4>
    
    <div class="d-flex justify-content-end mr-5">
        <a href="<?php echo base_url('invoice')?>">
        <div class="btn btn-sm btn-success">Kembali</div></a>
    </div>
<br>
<div class="wrap-table-shopping-cart"> 
<table class="table table-striped">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Jumlah Pesanan</th>
            <th scope="col">Harga Satuan</th>
            <th scope="col">total</th>
        </tr>


    <?php
    // $no=1;
    $hitung=1;
    $Subtotal = 0;
    foreach($pesanan as $psn):
    $total = $psn->jumlah * $psn->harga;
    $hitung += $total;
    
    $Subtotal += $total;
?>
    <tr>
        <!-- <th scope="row"><?php echo $no++ ?></th> -->
        <td><?php echo $psn->id_brg ?></td>
        <td><?php echo $psn->nama_brg ?></td>
        <td><?php echo $psn->jumlah ?></td>
        <td>Rp.<?php echo number_format($psn->harga,0,',','.')?></td>
        <td>Rp.<?php echo number_format($total,0,',','.') ?></td>
    </tr>
<?php endforeach; ?>
</table>

<div class="d-flex flex-w justify-content-center flex-t p-t-27 p-b-33">
	<div>
        <strong>
		<span>
		    Subtotal:
		</span>
        <span>
        Rp.<?php echo number_format(($Subtotal),0,',','.') ?>
        </strong>
	</div>
</div>
</div>
</div>