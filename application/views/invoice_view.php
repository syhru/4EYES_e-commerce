
<div class="container-fluid">
<br>
    <h4>
        <center>Invoice Pemesanan Produk </center>    
    </h4>
<br><br><br>
    <div class="d-flex justify-content-end mr-5 pb-4">
        <a href="<?php echo base_url(); ?>laporanpdf/index" class="btn p-lr-25 btn-primary">
            <i class="fa fa-print" aria-hidden="true"></i> Print Pdf
        </a>
        &emsp;
        <a href="<?php echo base_url(); ?>laporanexcel" class="btn p-lr-25 btn-success">
            <i class="fa fa-print" aria-hidden="true"></i> Print Excel
        </a>
    </div>
    
<div class="wrap-table-shopping-cart">   
<table class="table table-striped mb-5">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Pemesanan</th>
            <th scope="col">Batas Pembayaran</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    <tbody>
<?php
$no=1;
foreach($invoice as $inv):
?>
    <tr>
    <th scope="row"><?php echo $no++ ?></th>
    <td><?php echo $inv->nama ?></td>
    <td><?php echo $inv->alamat ?></td>
    <td><?php echo $inv->tanggal_pesan ?></td>
    <td><?php echo $inv->batas_bayar ?></td>
    <td>
        <a href="<?php echo base_url('invoice/detail/'.$inv->id_invoice);?>">
        <div class="btn btn-primary">Detail</div></a> 
        
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
</div>
  </div>