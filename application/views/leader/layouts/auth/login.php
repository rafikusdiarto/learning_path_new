<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="<?=base_url()?>assets/img/favicon/cropped-favicon-180x180.png">


    <title>Learning Path - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>vendorfontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
								<img src="https://img.freepik.com/free-vector/leader-concept-illustration_114360-7479.jpg?w=500&t=st=1684821279~exp=1684821879~hmac=c88b22a9b49fc2615df3b87a413164c330381607df83fe9ae77ecefda3562f76" alt="">
							</div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Leader</h1>
                                    </div>
									<?= form_open('login/leader/authenticate'); ?>

                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block mb-2">
                                            Login
                                        </button>
										<?php if ($this->session->flashdata('error')) { ?>
											<div class="alert alert-danger">
												<?php echo $this->session->flashdata('error'); ?>
											</div>
										<?php } ?>
                                        <hr>
                                    </form>
									<?= form_close(); ?>
                                    <hr>
									<div class="text-center">
                                        <p class="small">Are you member?
										<a href="<?= base_url('login'); ?>">Login here</a>
									</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>vendorjquery/jquery.min.js"></script>
    <script src="<?=base_url()?>vendorbootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>vendorjquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
