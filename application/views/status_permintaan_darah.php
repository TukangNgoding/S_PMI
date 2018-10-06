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

    <link href="<?php echo site_url(); ?>dist/table/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
      <!-- <link href="<?php echo site_url(); ?>data_umum/table/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
      <link href="<?php echo site_url(); ?>dist/table/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
      <link href="<?php echo site_url(); ?>dist/table/dist/css/sb-admin-2.css" rel="stylesheet">
      <link href="<?php echo site_url(); ?>dist/table/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
      <link href="<?php echo site_url(); ?>dist/table/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<!-- BEGIN HEAD -->
<body class="">

<?php echo $this->load->view('share/menu', '', TRUE);?>

<div class="header-default">


</div>
<div class="job-overview">
	<header class="job-overview__header">
        <div class="container">
            <h4 class="job-overview__header-heading">Data Permintaan Darah<span class="badge badge-denim"></span></h4>
        </div>
    </header>
	<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                   <div class="card card-outline-info mb-3">
          <div class="card-header bg-info">Data Permintaan</div>
          <div class="card-block">

            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>PMI</th>
                        <th>No Rekam Medis</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Diagnosa</th>
                        <th>GOl</th>
                        <th>Jumlah</th>
                        <th>verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                   foreach($permintaan as $data_permintaan){
                   $i++;
                  ?>
                  <tr>
                      <td><?php echo $i?></td>
                      <td><?php echo $data_permintaan->nama?></td>
                      <td><?php echo $data_permintaan->no_rekam_medis?></td>
                      <td><?php echo $data_permintaan->nm_pasien?></td>
                      <td><?php echo $data_permintaan->nm_dokter?></td>
                      <td><?php echo $data_permintaan->diagnosa?></td>
                      <td><?php echo $data_permintaan->gol_darah?></td>
                      <td><?php echo $data_permintaan->jumlah?></td>
                      <td><?php echo $data_permintaan->verifikasi?></td>


                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            <!-- /.table-responsive -->
          </div>
      </div>
            </div>
        </div>
    </div>
</div>









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
  <script src="<?php echo site_url(); ?>dist/table/vendor/metisMenu/metisMenu.min.js"></script>

        <script src="<?php echo site_url(); ?>dist/table/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo site_url(); ?>dist/table/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo site_url(); ?>dist/table/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <script src="<?php echo site_url(); ?>dist/table/dist/js/sb-admin-2.js"></script>


        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>

</body>
</html>
