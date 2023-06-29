<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>User List</title>
<!-- load bootstrap css file -->

<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
<div class="container-fluid"  style="margin-top: 50px;">
<h1><center>user List</center></h1>
<div class="mb-3">
<a href="<?php echo site_url('add_user')?>" class="btn btn-outline-success">Add user</a>
</div>
<table class="table table-striped">
<thead>

<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Username</th>
<th scope="col">Password</th>
<th scope="col">Role ID</th>
<th width="200">Action</th>
</tr>



</thead>
<?php
$count = 0; foreach ($user->result() as $row)
:
$count++;
?>
<tr>
<th scope="row"><?php echo $count;?></th>
<td><?php echo $row->nama;?></td>
<td><?php echo $row->username;?></td>
<td><?php echo $row->password;?></td>
<td><?php echo $row->role_id;?></td>

<td>
<a href="<?php echo site_url('user/delete/'.$row->id);?>" class="btn btn-outline-danger">Delete</a>


<a href="<?php echo site_url('user/get_edit/'.$row->id);?>" class="btn btn-outline-primary">Update</a>


<td>
</tr>
<?php endforeach;?>
</tbody>
</table>

</div>
</div>

<br><br>
<!-- load jquery js file -->
<script src="<?php echo
base_url('assets/js/jquery.min.js');?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo
base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>