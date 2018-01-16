<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ngangkot</title>
    <link rel="shortcut icon" href="../images/ico.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
<body class="hold-transition register-page">
<div class="register-box">
<a href="index.html" style="width: 100%; font-size: 20px" name="search" id="search-btn" class="btn btn-primary btn-flat"><i class="fa fa-home"> Halaman Utama</i></a>  
  <div class="register-logo">
    <h3 class="box-title">
      <img src="../images/ico.png" style="width: 200px">
    </h3>
    <div class="media"></div>
  </div>

  <div class="register-box-body">
    <div class="box box-success">
      <div class="box-body">
        <p class="register-box-msg">Daftar Ngangkot</p>

        <form action="../../index.html" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Nama Lengkap">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="No Telepon">
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
          </div>      
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
            <!-- /.col -->
              <a href="login.html" style="width: 100%; font-size: 20px" name="search" id="search-btn" class="btn btn-primary btn-flat"><i class="fa fa-check"> Registrasi</i></a>

        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Registrasi Dengan Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Registrasi Dengan
            Google+</a>
        </div>

        <a href="login.html" class="text-center">I already have a membership</a>
      </div>
    </div>

    <footer style="margin-top: -15px;">
      <div class="pull-right">
        <b>Version</b> 1.0.0 &nbsp;
      </div>
      <strong>Copyright &copy; 2018 <a href="#">Ngangkot</a>.</strong>
    </footer>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>