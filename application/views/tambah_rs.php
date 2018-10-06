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
 <?php echo $this->session->flashdata('pesan')?>
    <form class="page-contact__form" action="<?php echo site_url();?>rs/proses_tambah_rs" method="POST" >
        <h2 class="page-contact__form-heading">Tambah Rumah Sakit</h2>
        <div class="row justify-content-center">
			<div class="col-lg-5">
                <div class="form-group">
                    <input type="text" class="form-control" name='id' placeholder="Kode Rumah Sakit">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <input type="text" class="form-control" name='nama' placeholder="Nama Rumah Sakit">
                </div>
            </div>
			<div class="col-lg-5">
                <div class="form-group">
                    <input type="text" class="form-control" name='email' placeholder="email">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <input type="text" name='type' class="form-control" placeholder="Type Rumah Sakit">
                </div>
            </div>
			<div class="col-lg-5">
                <div class="form-group">
                    <input type="text" name='no_hp' class="form-control" placeholder="No HP/Telpon">
                </div>
            </div>
			<div class="col-lg-5">
                <div class="form-group">
                    <input type="text" name='password' class="form-control" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-group">
                    <textarea rows="5" class="form-control" name='alamat' placeholder="Alamat"></textarea>
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
	          <div class="card card-outline-info mb-3">
          <div class="card-header bg-info">Lihat Data Rumah Sakit</div>
          <div class="card-block">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Rumah Sakit</th>
                        <th>Type</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                                   <?php
											$j=0;
													foreach($data_rs1 as $data){
											?>
                                    <tr class="odd gradeX">
                                        <td><?php echo ++$j?></td>
                                        <td><?php echo $data->nm_rs; ?></td>
                                        <td><?php echo $data->type; ?></td>
                                        <td><?php echo $data->no_hp; ?></td>
                                        <td><?php echo $data->alamat; ?></td>

										<td><a href="<?php echo base_url()?>edit_bidan?id=<?php echo $data->id_rs?>"  ><button type="button" class="btn btn-success">Edit</button></a></td>
										<?php
										echo"<td class='center'><a href='". base_url()."rs/proses_hapus_rs?id=".$data->id_rs."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn btn-danger'>Hapus</button></a>
										</td>";
										?>

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
