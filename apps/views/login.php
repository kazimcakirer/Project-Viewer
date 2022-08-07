<?php require 'static/header.php' ?>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h1 class="h1"><b>Kazım</b></h1>
      </div>
      <div class="card-body">
        <?php if (isset($state) && $state !== '') : ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <!-- <h5><i class="icon fas fa-ban"></i> Alert!</h5> -->
                <?= $state ?>
              </div>
            </div>
          </div>
        <?php endif ?>
        <!-- <p class="login-box-msg">Oturumunuzu başlatmak için oturum açın</p> -->
        <form name="loginForm" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="passwrd" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" name="rememberMe" id="remember">
                <label for="remember"> Beni Hatırla </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="loginBtn" class="btn btn-primary btn-block">Giriş Yap</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- .social-auth-links -->
        <div class="social-auth-links text-center mt-2 mb-3">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="m-2">
          <a href="<?= url . 'sifremi-unuttum' ?>">Şifremi Unuttum</a>
        </p>
        <!--<p class="mb-0">
          <a href="#" class="text-center"></a>
        </p>
      </div> -->
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>