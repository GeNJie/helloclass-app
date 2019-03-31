<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>css/login-style.css">

</head>

<body>
    <!-- Outer Row -->
    <div class="container login-page">
        <div class="row justify-content-center">
            <img src="<?= base_url('asset/'); ?>img/icons/user-graduate-solid.svg" class="logo">
        </div>
        <div class="row justify-content-center">
            <h2 class="logo-text">HelloClass</h2>
        </div>
        <div class="row justify-content-center">
            <?= form_error('email', '<small class="text-danger pt-3">', '</small>') ?>
        </div>
        <div class="row justify-content-center">
            <?= form_error('password', '<small class="text-danger pt-3">', '</small>') ?>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <form method="post" action="<?= base_url('Welcome') ?>">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" name="email">
                    <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
            </form>
        </div>
    </div>




    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html> 