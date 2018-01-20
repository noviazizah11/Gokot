<?php 
  include('layout/header.php'); 
  include('layout/sidebar.php'); 
?>
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

<?php 
  include_once('layout/footer.php');
?>