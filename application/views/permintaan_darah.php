<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Skripsi</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php echo $this->load->view('share/css', '', TRUE);?>
    <!-- END GLOBAL MANDATORY STYLES -->




</head>
<!-- BEGIN HEAD -->
<body class="">

<?php echo $this->load->view('share/menu', '', TRUE);?>

<div class="job-overview">
    <header class="job-overview__header">
        <div class="container">
            <h4 class="job-overview__header-heading">Pemesanan Darah<span class="badge badge-denim"></span></h4>
        </div>
    </header>
    <div class="container">
	  <div class="card card-outline-success mb-3">
          <div class="card-header bg-success">Tambah Pemesanan</div>
          <div class="card-block">
            <form  action="<?php echo site_url();?>pemesanan/proses_pemesanan" method="POST" >
              <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Pilih PMI</label>
                      <div class="col-9">
                        <select class="form-control select2-form-control " name="pmi" required="" tabindex="-1" aria-hidden="true">
                              <option value="">Pilih PMI</option>
                              <?php
                                       $i=0;
                                        foreach($pmi as $data_pmi){
                                        $i++;
                                        ?>
                                         <option value="<?php echo $data_pmi->id_pmi?>"><?php echo $data_pmi->nama ;?> </option>
                              <?php }?>


                        </select>
                      </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">No Rekam Medis </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  required name="no_rekam_medis" placeholder="NO Rekam Medis">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Nama Pasien </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  required name="nama_pasien" placeholder="Nama Pasien">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Diagnosa </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  required name="diagnosa" placeholder="Diagnosa">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Nama Dokter</label>
                  <div class="col-9">
                      <input class="form-control" type="text"  required name="nama_dokter" placeholder="Nama Dokter">
                  </div>
              </div>
              <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Golongan Darah</label>
                      <div class="col-9">
                        <select class="form-control select2-form-control " name="gol_darah" required="" tabindex="-1" aria-hidden="true">
                              <option value="">Pilih Golongan Darah</option>
                              <option value="A">A</option>
                              <option value="A+">A+</option>
                              <option value="B">B</option>
                              <option value="B+">B+</option>
                              <option value="O">O</option>
                              <option value="O+">O+</option>
                              <option value="AB">AB</option>
                              <option value="AB+">AB+</option>


                        </select>
                      </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Jumlah</label>
                  <div class="col-9">
                      <input class="form-control" type="number"  required name="jumlah" placeholder="Jumlah">
                  </div>
              </div>


                <p align="right"><button type="submit" class="btn btn-info btn-medium">Tambah</button></p>
            </form>

          </div>


    </div>
</div>



<script src="vendors/jquery/jquery.min.js"></script>
<script src="vendors/tether/js/tether.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="js/dropdown.animate.js"></script>


</body>
<?php echo $this->load->view('share/footer', '', TRUE);?>

<?php echo $this->load->view('share/script', '', TRUE);?>


<script>
    (function () {
        $(document).ready(function () {
            var dropDownToggle = $('.dropdown-toggle');

            $(".navbar-toggler").on("click", function () {
                $(this).toggleClass("is-active");
            });

            dropDownToggle.click(function() {
                var dropdownList = $(this).parent().find('.dropdown-menu');
                var dropdownOffset = $(this).offset();
                var offsetLeft = dropdownOffset.left;
                var dropdownWidth = dropdownList.width() / 2;
                var docWidth = $(window).width();

                var isDropdownVisible = (offsetLeft + dropdownWidth <= docWidth);

                if (!isDropdownVisible) {
                    dropdownList.addClass('dropdown-menu-right');
                } else {
                    dropdownList.removeClass('dropdown-menu-right');
                }
            });
        });
    })(jQuery);

</script>
  <script src="<?php site_url(); ?>dist/table/vendor/metisMenu/metisMenu.min.js"></script>

        <script src="<?php site_url(); ?>dist/table/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php site_url(); ?>dist/table/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="<?php site_url(); ?>dist/table/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <script src="<?php site_url(); ?>dist/table/dist/js/sb-admin-2.js"></script>


        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>

</body>
</html>
