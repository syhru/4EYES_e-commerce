<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>4Eyes Store</title>
<!-- load bootstrap css file -->

</head>
<body>
<div class="container-fluid" style="margin-top: 50px;">
	<h1>
		<center>Product List</center>
	</h1>
<div class="mb-3 mt-5">
<a href="<?php echo site_url('add_product')?>" class="btn btn-outline-success">Add Product</a>
</div>
<div class="wrap-table-shopping-cart mb-5">
<table class="table-shopping-cart">
<thead>

<tr class="table_head">
<th scope="col">#</th>
<th scope="col">Product Name</th>
<th scope="col">Price</th>
<th scope="col">Gambar</th>
<th width="200">Action</th>
</tr>



</thead>
<?php
$count = 0; foreach ($product->result() as $row)
:
$count++;
?>
<tr>
<th scope="row"><?php echo $count;?></th>
<td><?php echo $row->product_name;?></td>
<td><?php echo number_format($row->product_price);?></td>
<td>
<img src="upload/<?php echo $row->product_picture; ?>" width="90" height="90">
</td>
<td>
<a href="<?php echo site_url('product/delete/'.$row->product_id);?>" class="btn btn-outline-danger">Delete</a>


<a href="<?php echo site_url('product/get_edit/'.$row->product_id);?>" class="btn btn-outline-primary">Update</a>


<td>
</tr>
<?php endforeach;?>
</tbody>
</table>
</div>

</div>


</body>
</html>