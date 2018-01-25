<?php 
  include('layout/header.php'); 
  include('layout/sidebar.php'); 
?>
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container">
      <form class="form" method='post'>
        <div class="form-group">
          <label>Trayek</label>
          <select class="form-control select2" style="width: 100%;" required>
            <option value=""> == Pilih Trayek ==</option>
            <option value="1">Caheum - Ciroyom</option>if
            <option value="2">Riung - Dago</option>
            <option value="3">Ciburial - Ciwastra</option>
            <option value="4">Caringin - Dago</option>
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
          <select class="form-control select2" style="width: 100%;" required>
            <option value=""> == Pilih Tempat Pickup ==</option>
            <option value="5">Halte Sudirman</option>
            <option value="6">Halte Kemang</option>
            <option value="7">Halte Padjajaran</option>
          </select>
        </div> 
        <div class="form-group">
          <label>Destinasi</label>
          <select class="form-control select2" style="width: 100%;" required>
            <option value=""> == Pilih Spot Pemberhentian ==</option>
            <option value="8">Halte Suci</option>
            <option value="9">Halte Pahlawan</option>
            <option value="10">Halte Cicaheum</option>
            <option value="11">Halte Sudirman</option>
            <option value="12">Halte Kemang</option>
            <option value="13">Halte Padjajaran</option>
          </select>
        </div>  

        <div class="form-group">
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
              AngPay
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
              Cash
            </label>
          </div>
        </div>

        <div>&nbsp;</div>

        <button type="submit" name="order" class="btn btn-primary btn-flat" style="width: 100%; font-size: 20px">
          <i class="fa fa-check"> Order</i>
        </button>
      </form>
    </div>
  </section>
  <!-- /.content -->
</div>

<?php 
  include_once('layout/footer.php');
?>