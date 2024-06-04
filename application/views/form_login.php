<!DOCTYPE html>
<html lang="en">


<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form class="user" method="post" action="<?php echo base_url('auth/login') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username Anda..." name="username">
                                            <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="MAsukan Password Anda..." name="password">
                                            <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary form-control">login</button>

                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('registrasi/index') ?>">Belum Punya Akun?Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


</body>

</html>