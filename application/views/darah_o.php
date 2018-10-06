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
            <h4 class="job-overview__header-heading">Golongan Darah O<span class="badge badge-denim"></span></h4>
        </div>
    </header>
	<br>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
			<div>
			<center><a href="<?php echo site_url();?>permintaan_darah" type="submit" class="btn btn-success btn-sm">Permintaan Darah</a></center>
			</div>
			<br>
                   <div class="card card-outline-info mb-3">
          <div class="card-header bg-info">Lihat Stok Darah</div>
          <div class="card-block">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Whole Blood</td>

                        <td class="center">35</td>
                    </tr>
					<tr>
                        <td>2</td>
                        <td>Packed Red Cell</td>

                        <td class="center">53</td>
                    </tr>
					<tr>
                        <td>3</td>
                        <td>Trombocyte Concentrate</td>

                        <td class="center">55</td>
                    </tr>
					<tr>
                        <td>4</td>
                        <td>Fresh Plasma</td>

                        <td class="center">0</td>
                    </tr>
					<tr>
                        <td>5</td>
                        <td>Cryoprecipitated AHF</td>

                        <td class="center">0</td>
                    </tr>
					<tr>
                        <td>6</td>
                        <td>Liquid Plasma</td>

                        <td class="center">0</td>
                    </tr>
					<tr>
                        <td>7</td>
                        <td>Washed Erytrocyte</td>

                        <td class="center">0</td>
                    </tr>
					<tr>
                        <td>8</td>
                        <td>Fresh Plasma</td>

                        <td class="center">0</td>
                    </tr>
					<tr>
                        <td>9</td>
                        <td>Leucodeplated</td>

                        <td class="center">0</td>
                    </tr>

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
