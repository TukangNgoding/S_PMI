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
 <?php echo $this->session->flashdata('pesan')?>

</div>
<div class="job-overview">
    <header class="job-overview__header">
        <div class="container">
            <h4 class="job-overview__header-heading">Detail Permintaan Darah <span class="badge badge-denim"></span></h4>
        </div>
    </header>
    <div class="container">
	  <div class="card card-outline-success mb-3">
          <div class="card-header bg-success">Permintaan Darah</div>
          <div class="card-block">

              <?php
              $i=0;
              $id_permintaan=0;
              $id_rs=0;
              $id_pmi=0;
               foreach($permintaan as $permintaan){
                 $id_permintaan=$permintaan->id_permintaan;
                 $id_pmi=$permintaan->id_pmi;
                 $id_rs=$permintaan->id_rs;
               $i++;

              ?>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">No Rekam Medis </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  value ="<?php echo $permintaan->no_rekam_medis?>" required name="no_rekam_medis" placeholder="NO Rekam Medis">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Nama Pasien </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  value ="<?php echo $permintaan->nm_pasien?>"  required name="nama_pasien" placeholder="Nama Pasien">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Diagnosa </label>
                  <div class="col-9">
                      <input class="form-control" type="text"  required name="diagnosa" value ="<?php echo $permintaan->diagnosa?>"  placeholder="Diagnosa">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Nama Dokter</label>
                  <div class="col-9">
                      <input class="form-control" type="text"  required name="nama_dokter"value ="<?php echo $permintaan->nm_dokter?>"  placeholder="Nama Dokter">
                  </div>
              </div>
              <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Golongan Darah</label>
                      <div class="col-9">
                          <input class="form-control" type="text"  required name="no_rekam_medis" value ="<?php echo $permintaan->gol_darah?>"  placeholder="NO Rekam Medis">
                      </div>
              </div>
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Jumlah</label>
                  <div class="col-9">
                      <input class="form-control" type="number"  required name="jumlah" placeholder="Jumlah" value ="<?php echo $permintaan->jumlah?>" >
                  </div>
              </div>




          </div>


    </div>

    <?php if($permintaan->verifikasi==null){?>
    <div class="card card-outline-info mb-3">
          <div class="card-header bg-info">Verifikasi Permintaan</div>
          <div class="card-block">

                <p align="center">
                  <a href="verifikasi?id=1&&id_permintaan=<?php echo $_GET['id']?>&&id_pmi=<?php echo $permintaan->id_pmi;?>&&id_rs=<?php echo $permintaan->id_rs;?>&&jumlah=<?php echo $permintaan->jumlah;?>"><button type="submit" class="btn btn-success btn-medium">Tersedia</button></a>
                  <a href="verifikasi?id=2&&id_permintaan=<?php echo $_GET['id']?>"><button type="submit" class="btn btn-danger btn-medium">Tidak Tersedia</button></a>
                </p>


          </div>


    </div>
  <?php }else if($permintaan->verifikasi==1) {?>
    <div class="card card-outline-info mb-3">
          <div class="card-header bg-info">Data Kantong Darah</div>
          <div class="card-block">


                <?php
                  $i=1;
                  foreach($pesan as $pesan){
                  ?>
                  <form  action="<?php echo site_url();?>permintaan_darah/add_darah?id_pesan=<?php echo $pesan->id_pesan;?>&&id_permintaan=<?php echo $permintaan->id_permintaan;?>" method="POST" >
                  <div class="form-group row">

                      <label for="example-text-input" class="col-3 col-form-label">Kantong Darah <?php echo $i?></label>
                      <div class="col-5">
                        <select class="form-control" name="kantong_darah" required>
                          <option value="">aaa</option>
                        </select>

                      </div>
                      <div class="col-4">
                          <button type="submit" class="btn btn-success btn-medium">Simpan</button>
                      </div>

                  </div>
                  <hr>
                  </form>
                <?php $i++;
                    }?>
                <p align="center">
                  <a href="verifikasi?id=1&&id_permintaan=<?php echo $_GET['id']?>"><button type="submit" class="btn btn-danger btn-medium">Finaslisasi</button></a>
                </p>

          </div>
    </div>
  <?php } ?>
<?php } ?>

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
