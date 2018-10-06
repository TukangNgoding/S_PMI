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
            <div class="col-lg-9">
                <h1 class="page-auth__heading">Tambah User</h1>
                <div class="page-auth__description">
                    Tambah User Adalah Menambahkan user PMI maupun User Rumah sakit <br>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <ul class="nav nav-tabs page-auth__tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#page-auth__candiate-tab" role="tab">
                                    <span class="icon iconfont-user"></span> PMI
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page-auth__employeer-tab" role="tab">
                                    <span class="icon iconfont-bag"></span> Rumah Sakit
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="page-auth__candiate-tab" role="tabpanel">
                                <form action="#" class="page-auth__form form-controls-flat">
                                    <h5 class="page-auth__form-heading">PMI</h5>
									<div class="form-group">
                                        <label for="username" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-user color-primary"></span> Nama
                                        </label>
                                        <input type="text" class="form-control" id="username" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-user color-primary"></span> Username
                                        </label>
                                        <input type="text" class="form-control" id="username" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-envelope color-primary"></span> E-mail
                                        </label>
                                        <input type="email" class="form-control" id="email" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone-number" placeholder="">
                                    </div>
                                     <div class="form-group">
                                        <label for="phone-number">Alamat</label>
                                        <input type="text" class="form-control" id="phone-number" placeholder="">
                                    </div>
									 <div class="form-group">
                                        <label for="phone-number">Password</label>
                                        <input type="password" class="form-control" id="phone-number" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <button type="button" class="btn btn-primary btn-lg btn-block">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="page-auth__employeer-tab" role="tabpanel">
                                <form action="#" class="page-auth__form form-controls-flat">
                                    <h5 class="page-auth__form-heading">Rumah Sakit</h5>

                                    <div class="form-group">
                                        <label for="employee-username" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-user color-primary"></span> Nama Rumah Sakit
                                        </label>
                                        <input type="text" class="form-control" id="employee-username" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee-email" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-envelope color-primary"></span> No KTP
                                        </label>
                                        <input type="email" class="form-control" id="employee-email" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee-phone-number">Phone Number</label>
                                        <input type="text" class="form-control" id="employee-phone-number" placeholder="">
                                    </div>
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <button type="button" class="btn btn-primary btn-lg btn-block">Tambah</button>
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
