<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<body class="bg-gradient-dark">
<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
<!-- Nested Row within Card Body -->
<div class="row">
<div class="row-lg-6 d-none d-lg-block">
            <img class="kiri" src="https://i.pinimg.com/564x/0c/0c/6c/0c0c6c06ff76acb4d24a10f5f27040b1.jpg" height="540px" width="450px"alt="">        
        </div>
<div class="col-lg-7">
<div class="p-5">
<div class="text-center">
<h1 class="h4 text-gray-900 mb-5">Create an Account!</h1>
</div>
<form class="user" action="<?php echo base_url('registrasi/index')?>" method="post">
<div class="form-group">
<input type="text" class="form-control form-control-user" id="exampleInputEmail"
placeholder="Nama" name="nama">
<?php echo form_error('nama','<div class="text-danger small">','</div>')?>
</div>
<div class="form-group">
<input type="text" class="form-control form-control-user" id="exampleInputEmail"
placeholder="username" name="username">
<?php echo form_error('username','<div class="text-danger small">','</div>')?>
</div>
<div class="form-group row">
<div class="col-sm-6 mb-3 mb-sm-0">
<input type="password" class="form-control form-control-user" id="exampleInputPassword"
placeholder="Password" name="password_1">
<?php echo form_error('password_1','<div class="text-danger small">','</div>')?>
</div>
<div class="col-sm-6">
<input type="password" class="form-control form-control-user"
id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
</div>
</div>
<button type="submit" class="btn btn-primary btn-user btn-block"> Register Account </button>
</form>

                            <hr>
                            <div class="text-center">
                            <a class="small" href="<?php echo base_url('auth')?>">Already have an account?
                            Login!</a>                        
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>