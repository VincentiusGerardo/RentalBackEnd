<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rental | Login</title>

  <link rel="icon" href="<?= base_url('media/logo.png') ?>" type="image/png">

  <!-- jQuery -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.min.css')?>">
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('fontawesome/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom for this template-->
  <link href="<?= base_url('css/sb-admin-2.css') ?>" rel="stylesheet">
  <script src="<?= base_url('js/sb-admin-2.js') ?>"></script>
  <style>
    body{
      background-image: url('./media/logo.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body class="bg-gradient-default">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                  </div>
                  <form class="user" action="<?= base_url('Source/do/Login/doLogin') ?>" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="User ID" autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</a>
                  </form>
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
