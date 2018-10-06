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
            <h4 class="job-overview__header-heading">TAMBAH UKURAN KANTONG DARAH<span class="badge badge-denim"></span></h4>
        </div>
    </header>
	<br>
    <div class="container">
	  <div class="card card-outline-success mb-3">
          <div class="card-header bg-success">Tambah Jenis Ukuran</div>
          <div class="card-block">
		   <?php echo $this->session->flashdata('pesan')?>
            <form class="page-contact__form" action="<?php echo site_url();?>login/proses_tambah_ukuran" method="POST" >
              <div class="form-group row">
                  <label for="example-text-input" class="col-3 col-form-label">Jenis Ukuran Kantong</label>
                  <div class="col-9">
                      <input class="form-control" type="text"  required name="ukuran" placeholder="Masukkan Jenis Ukuran">
                  </div>
				  <br>
				  <br>
				  <br>
				  <label for="example-text-input" class="col-3 col-form-label">Harga</label>
				  <div class="col-9">
                      <input class="form-control" type="text"  required name="harga" placeholder="Masukkan Harga">
                  </div>

              </div>
                <p align="right"><button type="submit" class="btn btn-info btn-medium">Tambah</button></p>
            </form>

          </div>
      </div>
        <div class="row">
            <div class="col-lg-12">
          <div class="card card-outline-info mb-3">
          <div class="card-header bg-info">Lihat Data Ukuran</div>
          <div class="card-block">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                                     <?php
											$j=0;
													foreach($data_ukuran1 as $data){
											?>
                                    <tr class="odd gradeX">
                                        <td><?php echo ++$j?></td>
                                        <td><?php echo $data->ukuran; ?></td>
                                        <td><?php echo $data->harga; ?></td>

										<td><a href="<?php echo base_url()?>edit_bidan?id_ukuran=<?php echo $data->id_ukuran?>"  ><button type="button" class="btn btn-success">Edit</button></a></td>
										<?php
										echo"<td class='center'><a href='". base_url()."login/proses_hapus_ukuran?id=".$data->id_ukuran."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn btn-danger'>Hapus</button></a>
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
