<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/iconfont/styles.css">
    <!-- END GLOBAL MANDATORY STYLES -->



    <!-- BEGIN THEME STYLES -->
    <?php echo $this->load->view('umum/share/warna', '', TRUE);?>
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">

<?php echo $this->load->view('umum/share/menu', '', TRUE);?>

<div class="page-auth">
  <?php echo $this->session->flashdata('pesan')?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="page-auth__heading">Login / Daftar</h1>


                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <ul class="nav nav-tabs page-auth__tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link <?php $link=uri_string(); if($link =="login"){ echo "active";} ?>" data-toggle="tab" href="#page-auth__candiate-tab" role="tab">
                                    <span class="icon iconfont-user"></span> Rumah Sakit/ Admin
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php $link=uri_string(); if($link =="daftar"){ echo "active";} ?>" data-toggle="tab" href="#page-auth__employeer-tab" role="tab">
                                    <span class="icon iconfont-bag"></span> Daftar Rumah Sakit
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane <?php $link=uri_string(); if($link =="login"){ echo "active";} ?>" id="page-auth__candiate-tab" role="tabpanel">
                                <form action="<?php site_url(); ?>login/proses_login" method="POST" class="page-auth__form form-controls-flat">
                                    <h5 class="page-auth__form-heading">Rumah Sakit/ Admin</h5>

                                    <div class="form-group">
                                        <label for="username" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-user color-primary"></span> Kode Rumah Sakit /Username
                                        </label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-envelope color-primary"></span> Password
                                        </label>
                                        <input type="password" class="form-control" name="password" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane <?php $link=uri_string(); if($link =="daftar"){ echo "active";} ?>" id="page-auth__employeer-tab" role="tabpanel">
                                <form action="<?php site_url(); ?>login/proses_daftar" method="POST" class="page-auth__form form-controls-flat">
                                    <h5 class="page-auth__form-heading">Daftar Rumah Sakit</h5>

                                    <div class="form-group">
                                        <label for="employee-username" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-user color-primary"></span> Kode Rumah Sakit

                                        </label>
                                        <input type="text" class="form-control" name="kode_rumah_sakit" id="employee-username" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="company-name">Nama Rumah Sakit</label>
                                        <input type="text" class="form-control" name="nama_rumah_sakit" id="company-name" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee-email" class="form-label-icon form-label-icon--right">
                                            <span class="icon iconfont-envelope color-primary"></span> E-mail
                                        </label>
                                        <input type="email" class="form-control" name="email" id="employee-email" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee-phone-number">NO HP</label>
                                        <input type="text" class="form-control" name="no_hp" id="employee-phone-number" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee-phone-number">Password</label>
                                        <input type="password" name="password" class="form-control" id="employee-phone-number" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
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
  <?php echo $this->load->view('umum/share/footer', '', TRUE);?>


<script src="<?php site_url(); ?>data_umum/vendors/jquery/jquery.min.js"></script>
<script src="<?php site_url(); ?>data_umum/vendors/tether/js/tether.min.js"></script>
<script src="<?php site_url(); ?>data_umum/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php site_url(); ?>data_umum/js/dropdown.animate.js"></script>


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
