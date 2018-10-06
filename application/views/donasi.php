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
			<div class="row mb-8">
    <div class="col-lg-6">
        <div class="card card-inverse card-primary mb-3">
            <div class="card-header">Syarat Donasi</div>
            <div class="card-block">
                <blockquote class="card-blockquote">
                    <p>
						1. Keadaan umum baik dan sehat<br>
						2. Usia minimal 17 tahun, maksimal tak terbatas<br>
						3. Berat badan minimal 45kg untuk pria dan wanita<br>
						4. Kaadar Hemoglobin (Hb) antara 12,5-17 gr/dl<br>
						5. Tekanan darah sitole 110-170 mmHg dan diastole 70-199 mmHg<br>
						6. Yang memiliki riwayat penyakit kulit, jantung, ginjal, hati, DBD, Malaria, Typus, Asma dan pernah operasi(konsultasi dengan dokter PMI) <br>
						7. Tidak sedang mengkomsumsi obat yang mengandung aspirin dan antibodi <br>
						8. Tidur malam minmal 5 jam <br>
						9. Sudah sarapan atau makan<br>
						10. Rhesus negatif tidak menjadi donor sukarela rutin <br>
						11. Jarak penyumbangan minimal 60 hari(2 balan)

					</p>
                    <footer></footer>
                </blockquote>
            </div>
        </div>

    </div>
    <div class="col-lg-6">
        <div class="card card-outline-primary mb-4">
            <div class="card-header">Alur Donasi</div>
            <div class="card-block">
                <blockquote class="card-blockquote">
                    <p>

                          1. Mengisi lembar donor daah yang telah disediakan oleh PMI
                        <br>

                          2. Pemeriksaan sebelum donasi (kadar Hemoglobin(Hb) dan Berat badan)
                      <br>
                          3. Pemeriksaan kesehatan secara umum (anamnesa dan tensi darah oleh dokter)
                       <br>
                          4. Pengambilan darah (350ml untuk 1 kantong darah dan 3 cc untuk pemeriksaan uji saring)
                       <br>
                          5. Identitas diri dari pendonor akan di catat pada setiap donasi
                        <br>
                          6. Setalah donasi darah akan disimpan dalam lemari pendingin (darah karantina)

					</p>
                    <footer></footer>
                </blockquote>
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
