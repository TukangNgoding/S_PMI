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

    </header>
	<br>
    <div class="container">

        <div class="row">
           <div class="container">
        <div class="row">
            <div class="col-lg-12">
<div class="container">

 <?php
              $i=0;
              foreach($edit_pendonor as $data){
              $i++;
            ?>
         <form class="form-horizontal" action="login/proses_edit_pendonor?id=<?php echo $data->id_pendonor?>" method="POST">
        <h2 class="page-contact__form-heading">Tambah Pendonor</h2>
        <div class="row justify-content-center">
			<div class="col-lg-5">
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $edit->nik?>"  name='nik' placeholder="No KTP">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <input type="text" class="form-control" name='nama' value="<?php echo $edit->nama?>" placeholder="Nama Lengkap">
                </div>
            </div>
			<div class="col-lg-5">
			<select class="form-control" aria-hidden="true" name='j_kelamin'>
			<option value="<?php echo $edit->j_kelamin?>"></option>
            <option>Jenis Kelamin</option>
            <option>Laki-Laki</option>
            <option >Perempuan</option>
			</select>
			</div>
            <div class="col-lg-5">
                <div class="form-group">
                    <input type="text" name='gol_darah' class="form-control" value="<?php echo $edit->gol_darah?>" placeholder="Golongan Darah">
                </div>
            </div>
			<div class="col-lg-5">
                <div class="form-group">
                    <input type="text" name='no_hp' class="form-control" value="<?php echo $edit->no_hp?>" placeholder="No HP">
                </div>
            </div>
			<div class="col-lg-5">
                <div class="form-group">
                    <input type="text" name='pekerjaan' class="form-control"  value="<?php echo $edit->pekerjaan?>"placeholder="Pekerjaan">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-group">
                    <textarea rows="5" class="form-control" value="<?php echo $edit->alamat?>" name='alamat' placeholder="Alamat"></textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-group">
                   <button class="btn btn-info btn-sm btn-info-flat" type='submit'>Tambah</button>
                </div>
            </div>
        </div>
    </form>
</div>
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
