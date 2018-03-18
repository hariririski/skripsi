<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Profil Rumah Sakit</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/iconfont/styles.css">

    <link href="<?php site_url(); ?>data_umum/table/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- <link href="<?php site_url(); ?>data_umum/table/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php site_url(); ?>data_umum/table/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php site_url(); ?>data_umum/table/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php site_url(); ?>data_umum/table/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php site_url(); ?>data_umum/table/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/leaflet/leaflet.css">


    <!-- BEGIN THEME STYLES -->
      <?php echo $this->load->view('umum/share/warna', '', TRUE);?>
    <!-- END THEME STYLES -->

</head>
<!-- BEGIN HEAD -->
<body class="">



<?php echo $this->load->view('umum/share/menu', '', TRUE);?>
<div class="blog">
    <header class="blog__header">
        <div class="container">
            <h3 class="blog__heading">Profil Rumah Sakit</h3>
            <p class="blog__heading-level-two">Mengelola Data Rumah Sakit</p>
        </div>
    </header>
    <?php echo $this->session->flashdata('pesan')?>


    <div class="container">
      <br>
      <?php
         $i=0;
         foreach($lihat as $profil){
         $i++;
       ?>
      <div class="card card-outline-success mb-3">
          <div class="card-header bg-success">Profil Rumah Sakit</div>
          <div class="card-block">
            <form method="POST" action="<?php site_url(); ?>jenis_kelamin/tambah" >
              <div class="form-group row">

                  <div class="col-9">
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Kode Rumah Sakit</label>
                        <div class="col-9">
                          <input class="form-control" readonly type="text" value="<?php echo $profil->kode_rs?>"  required name="nama_jenis_kelamin" placeholder="Kode Rumah Sakit">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Nama Rumah Sakit</label>
                        <div class="col-9">
                          <input class="form-control"  type="text" value="<?php echo $profil->nama_rs?>"  required name="nama_jenis_kelamin" placeholder="Kode Rumah Sakit">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Alamat</label>
                        <div class="col-9">
                          <input class="form-control" type="text" value="<?php echo $profil->alamat?>"  required name="nama_jenis_kelamin" placeholder="Kode Rumah Sakit">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">No_Hp</label>
                        <div class="col-9">
                          <input class="form-control"  type="text" value="<?php echo $profil->no_hp?>"  required name="nama_jenis_kelamin" placeholder="Kode Rumah Sakit">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Email</label>
                        <div class="col-9">
                          <input class="form-control"  type="text" value="<?php echo $profil->email?>"  required name="nama_jenis_kelamin" placeholder="Kode Rumah Sakit">
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Jenis Rumah Sakit</label>
                        <div class="col-9">
                            <select class="form-control select2-form-control " required tabindex="-1" aria-hidden="true">
                                <option value="<?php echo $profil->id_jenis_rs?>"><?php echo $profil->nama_jenis_rs?></option>
                                <?php
                                   foreach($jenis as $data_jenis){
                                 ?>
                                <option value="<?php echo $data_jenis->id_jenis_rs;?>"><?php echo $data_jenis->nama_jenis_rs;?></option>
                                <?php
                                  }
                                 ?>

                            </select>
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Kelas Rumah Sakit</label>
                        <div class="col-9">
                            <select class="form-control select2-form-control " required tabindex="-1" aria-hidden="true">
                                <option value="<?php echo $profil->id_kelas_rs?>"><?php echo $profil->nama_kelas_rs?></option>
                                <?php
                                   foreach($jenis as $data_kelas){
                                 ?>
                                <option value="<?php echo $data_kelas->id_kelas_rs;?>"><?php echo $data_kelas->nama_kelas_rs;?></option>
                                <?php
                                  }
                                 ?>

                            </select>
                        </div>
                      </div>
                      <div class="form-group row col-12">
                        <label for="example-text-input" class="col-3 col-form-label">Pemilik Rumah Sakit</label>
                        <div class="col-9">
                            <select class="form-control select2-form-control " required tabindex="-1" aria-hidden="true">
                                <option value="<?php echo $profil->id_pemilik?>"><?php echo $profil->nama_pemilik_rs?></option>
                                <?php
                                   foreach($jenis as $data_pemilik){
                                 ?>
                                <option value="<?php echo $data_pemilik->id_pemilik;?>"><?php echo $data_pemilik->nama_pemilik_rs;?></option>
                                <?php
                                  }
                                 ?>

                            </select>
                        </div>
                      </div>
                        <p align="right"><button type="submit" class="btn btn-info btn-medium">Perbaharui</button></p>
                  </div>

                  <div class="col-3">
                    <div class="listing-travel-trips__item">
                        <div class="listing-travel-trips__item-image">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/01.png" alt="" class="embed-responsive">
                            <div class="listing-travel-trips__item-title">

                            </div>
                        </div>
                        <div class="listing-travel-trips__item-info">
                            <div class="listing-travel-trips__item-details">
                                <input class="form-control"  type="file" value="<?php echo $profil->kode_rs?>"  required name="nama_jenis_kelamin" placeholder="Kode Rumah Sakit">
                            </div>
                        </div>
                    </div>

                  </div>
              </div>

            </form>

          </div>
      </div>
      <?php
      }
       ?>

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

    <!-- <script src="<?php site_url(); ?>data_umum/table/vendor/bootstrap/js/bootstrap.min.js"></script> -->


        <script src="<?php site_url(); ?>data_umum/table/vendor/metisMenu/metisMenu.min.js"></script>

        <script src="<?php site_url(); ?>data_umum/table/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php site_url(); ?>data_umum/table/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="<?php site_url(); ?>data_umum/table/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <script src="<?php site_url(); ?>data_umum/table/dist/js/sb-admin-2.js"></script>


        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>
</body>
</html>
