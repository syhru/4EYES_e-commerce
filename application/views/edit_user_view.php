<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Edit user</title>
<!-- load bootstrap css file -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>

<div class="container">
<h1><center>Edit user</center></h1>
<div class="col-md-6 offset-md-3">
<form action="<?php echo site_url('user/update');?>" method="post">
<div class="form-group">
<label>Nama</label>
<input type="text" class="form-control" name="nama" value="<?php echo $nama;?>" placeholder="Input Nama">
</div>
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" name="username" value="<?php echo $username;?>" placeholder="Input Username">
</div>
<div class="form-group">
<label>Password</label>
<input type="text" class="form-control" name="password" value="<?php echo $password;?>" placeholder="Input Password">
</div>
<div class="form-group">
<label>Role ID</label>
<input type="text" class="form-control" name="role_id" value="<?php echo $role_id;?>" placeholder="Input Role ID">
</div>


<input type="hidden" name="id" value="<?php echo $id?>">
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>

<!-- load jquery js file -->
<script src="<?php echo
base_url('assets/js/jquery.min.js');?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo
base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>