<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Stok Darah PMI</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php echo $this->load->view('share/css', '', TRUE);?>

</head>
<!-- BEGIN HEAD -->
<body class="">

<?php echo $this->load->view('share/menu', '', TRUE);?>

<div class="header-default">


</div>
<div class="job-overview">
    <header class="job-overview__header">
        <div class="container">
            <h4 class="job-overview__header-heading">Data Pendonor<span class="badge badge-denim"></span></h4>
        </div>
    </header>
    <div class="container">
	  <div class="card card-outline-success mb-3">
          <div class="card-header bg-success">Data Pendonor</div>
          <div class="card-block">
            <form  action="<?php echo site_url();?>darah/proses_tambah_stok" method="POST" >
              <?php
              $i=0;
               foreach($pendonor as $pendonor){
               $i++;

              ?>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Nama </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  required  value="<?php echo $pendonor->nama ?>"name="kode_kantong" >
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Alamat </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  value="<?php echo $pendonor->alamat ?>" required name="kode_kantong" >
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">No HP </label>
                  <div class="col-9">
                      <input class="form-control" type="text" value="<?php echo $pendonor->no_hp ?>"  required name="kode_kantong" >
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Golongan Darah </label>
                  <div class="col-9">
                      <input class="form-control" type="text" value="<?php echo $pendonor->gol_darah ?>"  required name="kode_kantong" >
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">NIK </label>
                  <div class="col-9">
                      <input class="form-control" type="text" value="<?php echo $pendonor->nik ?>" required name="kode_kantong" >
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Pekerjaan </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  value="<?php echo $pendonor->pekerjaan ?>" required name="kode_kantong" >
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Jenis Kelamin </label>
                  <div class="col-9">
                      <input class="form-control" type="text" value="<?php echo $pendonor->j_kelamin ?>" required name="kode_kantong" >
                  </div>
              </div>
              <?php
            }

              ?>

            </form>

          </div>
          </div>

<br>
        <div class="row">
            <div class="col-lg-12">
                   <div class="card card-outline-info mb-3">
          <div class="card-header bg-info">Kantung Darah</div>
          <div class="card-block">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>No Kantong Darah</th>
                        <th>Tanggal</th>


                    </tr>
                </thead>
                <tbody>
                  <?php
                           $i=0;
                            foreach($kantong as $kantong){
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $kantong->id_darah ?></td>
                                <td><?php echo $kantong->tanggal_input ?></td>
                            </tr>
                  <?php }?>


                </tbody>
            </table>
            <!-- /.table-responsive -->
          </div>
      </div>
            </div>
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
