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

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Ngangkot</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../dist/img/avatar2.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">Novianti Wydiamulyani Azizah</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/avatar2.png" class="img-circle" alt="User Image">

                    <p>
                      Novianti Wydiamulyani Azizah <br>
                      -- Web Developer --
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Saldo AngPay</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/avatar2.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Novianti WMA</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            
            <li><a href="pemesanan.php"><i class="fa fa-car"></i> <span>Pemesanan</span></a></li>
            <li><a href="info_angkot.html"><i class="fa fa-info"></i> <span>Info Angkot</span></a></li>
            <li><a href="history.html"><i class="fa fa-history"></i> <span>History Transaksi</span></a></li>
            <li><a href="kot_pay.html"><i class="fa fa-money"></i> <span>Kot Pay</span></a></li>
            <li><a href="help_centre.html"><i class="fa fa-comments"></i> <span>Help Centre</span></a></li>
            <li><a href="emergency.html"><i class="fa fa-circle-o-notch"></i> <span>Emergency</span></a></li>
            <li><a href="../index.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <div>&nbsp;</div>
        <div class="container">
          <div class="form-group">
            <label>Trayek</label>
            <select class="form-control select2" style="width: 100%;">
              <option> == Pilih Trayek ==</option>
              <option>Caheum - Ciroyom</option>if
              <option>Riung - Dago</option>
              <option>Ciburial - Ciwastra</option>
              <option>Caringin - Dago</option>
            </select>
          </div>
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width=350" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=bandung&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.pureblack.de"></a>
            </div>
          </div>
          <div class="form-group">
            <label>Pick Up</label>
            <select class="form-control select2" style="width: 100%;">
              <option> == Pilih Tempat Pickup ==</option>
              <option>Halte Sudirman</option>
              <option>Halte Kemang</option>
              <option>Halte Padjajaran</option>
            </select>
          </div> 
          <div class="form-group">
            <label>Destinasi</label>
            <select class="form-control select2" style="width: 100%;">
              <option> == Pilih Spot Pemberhentian ==</option>
              <option>Halte Suci</option>
              <option>Halte Pahlawan</option>
              <option>Halte Cicaheum</option>
              <option>Halte Sudirman</option>
              <option>Halte Kemang</option>
              <option>Halte Padjajaran</option>
            </select>
          </div>  

          <div class="form-group">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                AngPay
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Cash
              </label>
            </div>
          </div>

          <div>&nbsp;</div>

          <button type="submit" style="width: 100%; font-size: 20px" name="search" id="search-btn" class="btn btn-primary btn-flat"><i class="fa fa-check"> Order</i></button>

        </div>
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018 <a href="#">Ngangkot</a>.</strong>
      </footer>
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
  </body>
</html>