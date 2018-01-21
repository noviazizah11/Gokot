<?php 
  include('layout/header.php'); 
  include('layout/sidebar.php'); 
?>
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Call Centre Ngangkot</h3>
          </div>
          <div class="box-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
              Kantor Pusat (Soekarno Hatta)
            </button><div class="media"></div>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
              Kantor Cabang (Pasir Koja)
            </button><div class="media"></div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
              Kantor Cabang (Dago)
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal modal-primary fade" id="modal-primary">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Anda Akan Melakukan Pemanggilan Darurat Ke Nomor Kantor Pusat (Soekarno Hatta):</h4>
          </div>
          <div class="modal-body">
            <p>(022) 6658894&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline">Telepon Sekarang</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal modal-info fade" id="modal-info">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Anda Akan Melakukan Pemanggilan Darurat Ke Nomor Kantor Cabang (Pasir Koja):</h4>
          </div>
          <div class="modal-body">
            <p>(022) 76486547&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline">Telepon Sekarang</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal modal-success fade" id="modal-success">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Anda Akan Melakukan Pemanggilan Darurat Ke Nomor Kantor Cabang (Dago):</h4>
          </div>
          <div class="modal-body">
            <p>(022) 83467776&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline">Telepon Sekarang</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </section>
  <!-- /.content -->
 </div>

<?php 
  include_once('layout/footer.php');
?>