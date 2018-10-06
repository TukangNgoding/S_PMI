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
</head>
<!-- BEGIN HEAD -->
<body class="">

<?php echo $this->load->view('share/menu', '', TRUE);?>

<div class="page-auth">
    <div class="container">
        <div class="row justify-content-center">

        </div>
    </div>
</div>
<div class="apartment__image-slider">
        <ul id="apartment-image-slider">
                <img src="<?php echo site_url();?>dist/Relawan.png" height="350" width="1300">
        </ul>
    </div>

<div class="listing-orders-with-filter__item listing-orders-with-filter__item--favorite">

<div class="apartment__about">
    <div class="container">
        <div class="apartment__about-wrap">
            <ul class="apartment__about-amenity">
                <li class="apartment__about-amenity-item">
                    <img src='<?php echo site_url();?>dist/donor.png' width="50"></img>
                    <div class="#">
                        <a href='<?php echo site_url();?>darah/lihat_stok_darah'><span>Stok Darah</span></a>

                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <img src='<?php echo site_url();?>dist/lokasi.png' width="50"></img>
                    <div class="#">
                       <a href="<?php echo site_url();?>lihat_jadwal_mobil" > <span> Lokasi & Jadwal</span></a>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <img src='<?php echo site_url();?>dist/berita.png' width="50"></img>
                    <div class="apartment__about-amenity-info">
                        <a href="<?php echo site_url();?>donasi" > <span> Informasi & Berita</span> </a>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <img src='<?php echo site_url();?>dist/tanya.png' width="50"></img>
                    <div class="apartment__about-amenity-info">
                        <a href="<?php echo site_url();?>serba_serbi" ><span>Fakta Darah</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

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


</body>
</html>
