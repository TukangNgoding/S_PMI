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

</head>
<!-- BEGIN HEAD -->
<body class="">

<?php echo $this->load->view('share/menu', '', TRUE);?>

<div class="header-default">


</div>
<div class="job-overview">
    <header class="job-overview__header">
        <div class="container">
            <h4 class="job-overview__header-heading">Stok Darah<span class="badge badge-denim"></span></h4>
        </div>
    </header>
    <div class="container">
	  <div class="card card-outline-success mb-3">
          <div class="card-header bg-success">Tambah Stok Darah</div>
          <div class="card-block">
            <form  action="<?php echo site_url();?>darah/proses_tambah_stok" method="POST" >
              <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Pendonor</label>
                      <div class="col-9">
                        <select class="form-control select2-form-control " name="id_pendonor" required="" tabindex="-1" aria-hidden="true">
                              <option value="">Pilih Pendonor</option>
                              <?php
                  										 $i=0;
                  											foreach($pendonor as $data){
                  											$i++;
                  											?>
                  											 <option value="<?php echo $data->id_pendonor?>"><?php echo $data->id_pendonor ;?> / <?php echo $data->nama ;?> </option>
                  						<?php }?>
                        </select>
                      </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Kode Kantong Darah </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  required name="kode_kantong" placeholder="Kode Kantong Darah">
                  </div>
              </div>
              <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Jenis Komponen</label>
                      <div class="col-9">
                        <select class="form-control select2-form-control " name="id_jenis_komponen" required="" tabindex="-1" aria-hidden="true">
                              <option value="">Pilih Komponen</option>
                              <?php
                  										 $i=0;
                  											foreach($data_komponen1 as $data){
                  											$i++;
                  											?>
                  											 <option value="<?php echo $data->id_komponen?>"><?php echo $data->nama ;?></option>
                  						<?php }?>
                        </select>
                      </div>
              </div>
              <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Ukuran</label>
                      <div class="col-9">
                        <select class="form-control select2-form-control " name="id_ukuran" required="" tabindex="-1" aria-hidden="true">
                              <option value="">Pilih Ukuran</option>
                              <?php
                              $i=0;
                               foreach($data_ukuran1 as $data){
                               $i++;
                               ?>
                                <option value="<?php echo $data->id_ukuran?>"><?php echo $data->ukuran ;?></option>
                               <?php }?>
                               </select>
                             </div>
                        </select>
                      </div>
              </div>
                <p align="right"><button type="submit" class="btn btn-info btn-medium">Tambah</button></p>
            </form>

          </div>

        <div class="row">
            <div class="col-lg-12">
                   <div class="card card-outline-info mb-3">
          <div class="card-header bg-info">Data Stok Darah</div>
          <div class="card-block">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Id Pendonor</th>
                        <th>Nama Pendonor</th>
                        <th>Tanggal Donor</th>
                        <th>Kode Kantong</th>
                        <th>Ukuran</th>
                        <th>harga</th>
                        <th>Komponen</th>
                        <th>GOl</th>

                    </tr>
                </thead>
                <tbody>
                  <?php
                           $i=0;
                            foreach($stok as $data){
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $data->id_pendonor ?></td>
                                <td><?php echo $data->nama_pendonor ?></td>
                                <td><?php echo $data->tanggal_input ?></td>
                                <td><?php echo $data->id_darah ?></td>
                                <td><?php echo $data->ukuran ?></td>
                                <td><?php echo $data->harga?></td>
                                <td><?php echo $data->nama_komponen ?></td>
                                <td><?php echo $data->gol_darah ?></td>


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
