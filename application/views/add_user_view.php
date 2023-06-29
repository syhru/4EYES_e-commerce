<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title;?></title>
<!-- load bootstrap css file -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>

<div class="container">

<center><h1>Add New user</h1></center>
<form action="<?php echo site_url('user/save'); ?>" method="post" enctype="multipart/form-data" > 
    <div class="form-group">
        <label for="FormGroupExampleInput">Nama</label>
        <input type="text" name="nama" class="form-control" id="formGroupExampleInput" placeholder="Input Nama">
    </div>
    <div class="form-group">
        <label for="FormGroupExampleInput">Username</label>
        <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Input Username">
    </div>
    <div class="form-group">
        <label for="FormGroupExampleInput">Password</label>
        <input type="text" name="password" class="form-control" id="formGroupExampleInput" placeholder="Input Password">
    </div>
    <div class="form-group">
        <label for="FormGroupExampleInput">Role ID</label>
        <input type="text" name="role_id" class="form-control" id="formGroupExampleInput" placeholder="Input Role ID">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?php echo site_url('user')?>" class="btn btn-outline-secondary">Kembali</a>

</form>

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