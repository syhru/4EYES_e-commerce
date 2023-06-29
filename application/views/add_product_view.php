<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

<div class="container">

<center><h1>Add New Product</h1></center>
<form action="<?php echo site_url('product/save'); ?>" method="post" enctype="multipart/form-data" > 
    <div class="form-group">
        <label for="FormGroupExampleInput">Input Product</label>
        <input type="text" name="product_name" class="form-control" id="formGroupExampleInput" placeholder="Input Product">
    </div>
    <div class="form-group">
        <label for="FormGroupExampleInput">Input Price</label>
        <input type="text" name="product_price" class="form-control" id="formGroupExampleInput" placeholder="Input Price">
    </div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Picture</label>
    <input type="file" name="product_picture" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?php echo site_url('product')?>" class="btn btn-outline-secondary">Kembali</a>

</form>

</div>
<br><br>

