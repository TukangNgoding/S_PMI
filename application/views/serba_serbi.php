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
       
    </header>
	<br>
    <div class="container">
	  
        <div class="row">
           <div class="container">
        <div class="row">
	<div class="row mb-8">
    <div class="col-lg-6">
        <div class="card card-inverse card-primary mb-3">
            <div class="card-header">Apa itu donor darah ?</div>
            <div class="card-block">
                <blockquote class="card-blockquote">
                    <p>Donor darah adalah suatu kegiatan menyumbangkan darah yang dilakukan secara sukarela dari penyumbang darah untuk bertujuan tranfusi darah</p>
                    <footer></footer>
                </blockquote>
            </div>
        </div>
        <div class="card card-inverse card-secondary mb-3">
            <div class="card-header">Apa itu tranfusi darah?</div>
            <div class="card-block">
                <blockquote class="card-blockquote">
                    <p>Tranfusi darah adalah tindakan medis pemberian darah atau produk berbasis darah yang diberikan dalam bentuk kemasan yang memenuhi syarat kesehatan orang yang membutuhkan.</p>
                    <footer> Darah ini diberikan setelah melalui pemeriksaan dan pengolahan sesuai dengan prosedur kesehatan</footer>
                </blockquote>
            </div>
        </div>
        <div class="card card-inverse card-success mb-3">
            <div class="card-header">Manfaat donor darah ?</div>
            <div class="card-block">
                <blockquote class="card-blockquote">
                    <p>
					1. Menjaga kesehatan jantung<br>
					2. meningkatkan produksi sel darah merah<br>
					3. membantu penurunan berat badan<br>
					4. Mendapatkan kesehatan psikologis<br>
					5. mendeteksi penyakit serius<br>
					</p>
                    <footer></footer>
                </blockquote>
            </div>
        </div>
       

    </div>
    <div class="col-lg-6">
        <div class="card card-outline-primary mb-4">
            <div class="card-header">Pendapat ulama tentang donor darah?</div>
            <div class="card-block">
                <blockquote class="card-blockquote">
                    <p>Menurut Prof. Dr. Tgk. H. Muslim Ibrahim, MA(Ketua MPU Aceh) penerima sumbangan darah tidak disyariatkan harus sama dengan donornya mengenai agaman/kepercayaan, suku bangsa dan ras. karena menyumbang darah dengan ikhlas adalah termasuk amal kemanusian yang sangat dihargai dan dianjurkan oleh islam sebab dengan firman Allah....</p>
                    <footer><cite title="Source Title">barang siapa yang memelihara kehidupan seseorang manusia, maka seolah-olah ia memelihara kehidupan manusia semuanya. (QS. Al-Maidah:32)</cite></footer>
                </blockquote>
            </div>
        </div>
     <div class="card card-inverse card-info mb-3">
            <div class="card-header">Mengapa donor darah itu gratis sementara permintaan darah itu bayar?</div>
            <div class="card-block">
                <blockquote class="card-blockquote">
                    <p>Untuk menyiapkan darah dan komponen darah yang aman seta berkualitas ddiperlukan proses uji saring terhadap berbagai penyakit yang dapat ditularkan melalui tranfusi darah, untuk itu diperlukan biaya untuk pembelian bahan habis pakai, kantong darah, menu donor, rekrutmen donor</p>
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
