<body class="bg-gradient-dark">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

            <div class="col-lg-6 d-none d-lg-block">
                            <img class="kiri" src="https://i.pinimg.com/564x/0c/0c/6c/0c0c6c06ff76acb4d24a10f5f27040b1.jpg" height="578px" width="450px"alt="">        

            </div>
                    <div class="col-lg-6">
                        <div class="p-5">
            <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
            </div>

            <?php echo $this->session->flashdata('pesan') ?>
            <form method="post" action="<?php echo base_url('auth') ?>" class="user">
                <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="masukan username anda..." name="username">
            <?php echo form_error('username','<div class="text-danger small">','</div>');?>
            </div>
                <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                <?php echo form_error('password','<div class="text-danger small">','</div>')?>
                </div>
            <div class="form-group">
            <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">RememberMe</label>
            </div>
            </div>
                
                                            <button type="submit" class="btn btn-primary btn-user btn-block">login</button>
                                        </a>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                
</form>
<hr><div class="text-center">


<a class="small" href="forgot-password.html">Forgot Password?</a>
</div>
<div class="text-center">
<a class="small" href="<?php echo base_url('registrasi/')?>">Registrasi Akun anda
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>