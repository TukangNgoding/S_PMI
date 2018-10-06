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

</head>
<!-- BEGIN HEAD -->
<body class="">



<div class="header-default">
  <div class="header-topbar">
      <div class="container">
          <div class="header-topbar__contact-info">

          </div>
          <ul class="nav header-topbar__nav">
          </ul>
      </div>
  </div>
    <div id="header-menu" class="header-default__menu">
        <div class="container">
            <nav class="navbar navbar-toggleable-lg">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#header-default-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src='<?php echo site_url();?>dist/download.png' width="50" ><a class="navbar-brand" href="index.html">&nbsp Palang<span class="colored">  Merah</span>  Indonesia</a></img>
                <div id="header-default-menu" class="collapse navbar-collapse">
                    <div class="header-default__menu-collapse">

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="page-login">
    <div class="container">
        <div class="page-login__wrap">
            <h2 class="page-login__heading">Login Pendonor</h2>
            <p class="page-login__description">

            </p>

            <form action="<?php site_url();?>pendonor/data_pendonor" class="page-login__form" method="POST">
                <div class="form-group">
                    <div class="form-control-inline-icon inline-icon-right">
                        <input id="email" type="text" name='kode_pendonor' required class="form-control" placeholder="Kode Pendonor">
                        <span class="icon iconfont-right iconfont-user"></span>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <button type="submit"  class="btn btn-primary btn-block page-login__submit-btn">Login</button>
                </div>
            </form>
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
