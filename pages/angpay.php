<?php 
  include('layout/header.php'); 
  include('layout/sidebar.php'); 
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
  <div class="tab-content">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="glyphicon glyphicon-check"></i> Nominal Saldo</h3>
        </div>
        <div class="box-body">  
          <p style="font-size: 30px">Rp. 20.500</p>
        </div>
      </div>
    
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="glyphicon glyphicon-check"></i> Mutasi Saldo</h3>
        </div>
        <div class="box-body">  
          <table class="table table-hover table-condensed">
            <tr>
              <th>No Transaksi</th>
              <th>Mutasi</th>
              <th>Jumlah Saldo</th>
              <th>&nbsp;</th>
            </tr>
            <tr>
              <th class="text-center">AC28323</th>
              <th class="text-right">Rp. 14.000</th>
              <th class="text-right">Rp. 46.000</th>
              <th><i class="glyphicon glyphicon-arrow-up" style="color: red"></th>
            </tr>
            <tr>
              <th class="text-center">AC92838</th>
              <th class="text-right">Rp. 10.000</th>
              <th class="text-right">Rp. 36.000</th>
              <th><i class="glyphicon glyphicon-arrow-up" style="color: red"></th>
            </tr>
            <tr>
              <th class="text-center">DC92838</th>
              <th class="text-right">Rp. 15.000</th>
              <th class="text-right">Rp. 41.000</th>
              <th><i class="glyphicon glyphicon-arrow-down" style="color: green"></th>
            </tr>            
          </table>
        </div>
      </div>    
  </div>
  </section>
 </div>

<?php 
  include_once('layout/footer.php');
?>
<!-- ini juga komentar untuk di push saja -->