<?php 
  include('layout/header.php'); 
  include('layout/sidebar.php'); 
?>
<div class="content-wrapper">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-theme-demo-options-tab" data-toggle="tab"><i class="fa fa-clock-o"> Jam Operasi</i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-exchange"> Jalur Trayek</i></a></li>
  </ul>
  <!-- Tab panes -->
  <section class="content">
  <div class="tab-content">
    <!-- Home tab content -->
    <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Jam Operasi</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Angkot</th>
                    <th>Jam Operasi</th>
                    <th style="width: 40px">Status</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>Caheum - Ciroyom</td>
                    <td>
                      05.00 - 17.00
                    </td>
                    <td><span class="badge bg-red">Habis</span></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Riung - Dago</td>
                    <td>
                      09.00 - 22.00
                    </td>
                    <td><span class="badge bg-yellow">Hampir Habis</span></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Ciburial - Ciwastra</td>
                    <td>
                      07.00 - 20.00
                    </td>
                    <td><span class="badge bg-light-blue">Tersedia</span></td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Caringin - Dago</td>
                    <td>
                      08.00 - 20.00
                    </td>
                    <td><span class="badge bg-green">Tersedia Banyak</span></td>
                  </tr>
                </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="icon-angkot"></i> Jalur Trayek</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Angkot</th>
                    <th>Halte</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>Caheum - Ciroyom, Dago-Paster, Cimindi-Cibaligo</td>
                    <td>Sudirman</td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Riung - Dago, Ciberem-Lw Panjang</td>
                    <td>Kemang</td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Ciburial - Ciwastra, Margahayu-Ciwastra, Pasir Koja - Batas Kota</td>
                    <td>Pajajaran</td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Caringin - Dago, Dago - Lembang</td>
                    <td>Cicaheum</td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>BEC - Cimindi, BIP - Cimindi</td>
                    <td>Dago</td>
                  </tr>
                </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.tab-pane -->
  </div>
  </section>
 </div>

<?php 
  include_once('layout/footer.php');
?>