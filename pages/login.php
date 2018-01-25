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
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body class="hold-transition login-page">
<div class="login-box">
<a href="index.php" style="width: 100%; font-size: 20px" name="search" id="search-btn" class="dim btn btn-primary btn-flat"><i class="fa fa-home"> Halaman Utama</i></a>  
  <div class="login-logo">
    <h3 class="box-title">
      <img src="../images/ico.png" style="width: 200px">
    </h3>
    <div class="media"></div>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="box box-success">
      <div class="box-body">
        <p class="login-box-msg">Halaman Login</p>

        <?php
          if (isset($_POST['btn_login'])) {
            if ($_POST['username'] == 'novi' && $_POST['password'] == 'rahasia') {
              $result_login = '<div class="alert alert-success animated fadeInDown" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Login Berhasil !</strong></div>';
              // header("Location: pemesanan.php");
              echo "<script>window.location.replace('pemesanan.php')</script>";
            }elseif ($_POST['username'] != 'novi' && $_POST['password'] != 'rahasia') {
              $result_login = '<div class="alert alert-danger animated fadeInDown" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Username atau Password yang anda masukkan salah.</strong></div>';
            }else{
              $result_login = '';
            }
          }
          
          if (isset($result_login)) {
            echo $result_login;
          }else{
            echo "";
          }
        ?>

        <form class="form" method='post'>
          <div class="form-group has-feedback">
            <input type="text" name='username' class="form-control" placeholder="Username" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <button type="submit" name="btn_login" class="btn btn-primary btn-flat" style="width: 100%; font-size: 20px"><i class="fa fa-check"> Login</i></button>

          <!-- <a href="pemesanan.php" style="width: 100%; font-size: 20px" name="search" id="search-btn" class=" dim btn btn-primary btn-flat"><i class="fa fa-check"> Login</i></a> -->
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Login Dengan Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Login Dengan
            Google+</a>
        </div>
        <!-- /.social-auth-links -->
      </div>
    </div>

    <footer style="margin-top: -15px;">
      <div class="pull-right">
        <b>Version</b> 1.0.0 &nbsp;
      </div>
      <strong>Copyright &copy; 2018 <a href="#">Ngangkot</a>.</strong>
    </footer>

    <div id="dim"></div>
    <i id="loading" class="fa fa-spin fa-pulse fa-spinner" aria-hidden="true"></i>    
    </div>
    <!-- /.login-box-body -->

</div>
<!-- /.login-box -->
<!-- jQuery 2.2.3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<script src="../dist/js/dimpage.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>