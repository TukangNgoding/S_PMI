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
    <!-- END GLOBAL MANDATORY STYLES -->



    <!-- BEGIN THEME STYLES -->
   <?php echo $this->load->view('share/css', '', TRUE);?>
    <!-- END THEME STYLES -->
	<link href="<?php site_url(); ?>dist/table/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- <link href="<?php site_url(); ?>data_umum/table/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php site_url(); ?>dist/table/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php site_url(); ?>dist/table/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php site_url(); ?>dist/table/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php site_url(); ?>dist/table/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<!-- BEGIN HEAD -->
<body class="">

<?php echo $this->load->view('share/menu', '', TRUE);?>

<div class="header-default">


</div>
<div class="job-overview">
    <header class="job-overview__header">
        <div class="container">
            <h4 class="job-overview__header-heading">Rumah Sakit<span class="badge badge-denim"></span></h4>
        </div>
    </header>
	<br>
    <div class="container">
	        <div class="card card-outline-success mb-3">
          <div class="card-header bg-success">Profil Rumah Sakit</div>
          <div class="card-block">
            <form method="POST" action="" enctype="multipart/form-data" >
              <div class="form-group row">

                  <div class="col-9">
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Kode Rumah Sakit</label>
                        <div class="col-9">
                          <input class="form-control" readonly type="text" value=""  required name="kode_rs" placeholder="Kode Rumah Sakit">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Nama Rumah Sakit</label>
                        <div class="col-9">
                          <input class="form-control"  type="text" value=""  required name="nama_rs" placeholder="Nama Rumah Sakit">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Alamat</label>
                        <div class="col-9">
                          <input class="form-control" type="text" value=""  required name="alamat" placeholder="alamat">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">No_Hp</label>
                        <div class="col-9">
                          <input class="form-control"  type="text" value=""  required name="no_hp" placeholder="NO Hp Yang Akan Dihubungi">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Email</label>
                        <div class="col-9">
                          <input class="form-control"  type="text" value=""  required name="email" placeholder="Email">
                        </div>
                      </div>
					  <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Jenis Rumah Sakit</label>
                        <div class="col-9">
                          <input class="form-control"  type="text" value=""  required name="type" placeholder="Jenis Rumah Sakit">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                      </div>

                        <p align="right"><button type="submit" class="btn btn-info btn-medium">Perbaharui</button></p>
                  </div>

                  <div class="col-3">
                    <div class="listing-travel-trips__item">
                        <div class="listing-travel-trips__item-image">
                            <img src="
                                      " alt="" class="embed-responsive">
                            <div class="listing-travel-trips__item-title">

                            </div>
                        </div>
                        <div class="listing-travel-trips__item-info">
                            <div class="listing-travel-trips__item-details">
                                <input class="form-control"  type="file"  name="gambar" placeholder="Kode Rumah Sakit">
                            </div>
                        </div>
                    </div>

                  </div>
              </div>

            </form>

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
