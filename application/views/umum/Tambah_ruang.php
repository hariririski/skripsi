<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Ruang</title>

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
            <h3 class="blog__heading">Ruang</h3>
            <p class="blog__heading-level-two">Mengelola Data Ruang</p>
        </div>
    </header>
    <?php echo $this->session->flashdata('pesan')?>
    <div class="container">
        <br>
      <div class="card card-outline-success mb-3">
            <div class="card-header bg-success">Tambah Ruang</div>
            <div class="card-block">
              <form method="POST" action="<?php site_url(); ?>jenis_ruang/tambah">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Nama Ruang</label>
                      <div class="col-9">
                          <input class="form-control" required type="text" name="nama_jenis_ruang" id="example-text-input" placeholder="Masukkan Nama Ruang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Jenis Ruang</label>
                      <div class="col-9">
                        <select class="form-control select2-form-control " required tabindex="-1" aria-hidden="true">
                            <?php
                               foreach($lihat as $data_jenis){
                             ?>
                            <option value="<?php echo $data_jenis->id_jenis_ruang;?>"><?php echo $data_jenis->nama_jenis_ruang;?></option>
                            <?php
                              }
                             ?>
                        </select>
                      </div>
                    </div>
                  <p align="right"><button type="submit" class="btn btn-info btn-medium">Tambah</button></p>
              </form>
            </div>
        </div>

        <div class="card card-outline-info mb-3">
            <div class="card-header bg-info">Data Ruang</div>
            <div class="card-block">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr>
                          <th>NO</th>
                          <th>Ruang</th>
                          <th>Detail</th>
                          <th>Tambah Kamar</th>

                      </tr>
                  </thead>
                  <tbody>


                    <?php
                       $i=0;
                       foreach($ruang as $data_ruang){
                       $i++;
                     ?>
                      <tr>
                          <td><?php echo $i?></td>
                          <td><?php echo $data_ruang->nama_ruang ?></td>
                          <td><?php echo $data_ruang->jenis_ruang ?></td>

                          <td class="center"><a href="detail_rental.php?id="><button type="button" class="btn btn-warning btn-xs">Edit</button></td>
                          <td class="center"><a href="detail_rental.php?id="><button type="button" class="btn btn-danger btn-xs">Hapus</button></td>
                      </tr>
                      <?php
                      }
                     ?>


                  </tbody>
              </table>
              <!-- /.table-responsive -->
            </div>
        </div>



    </div>

</div>

  <?php echo $this->load->view('umum/share/footer', '', TRUE);?>

<script src="<?php site_url(); ?>data_umum/vendors/jquery/jquery.min.js"></script>
<script src="<?php site_url(); ?>data_umum/vendors/tether/js/tether.min.js"></script>
<script src="<?php site_url(); ?>data_umum/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php site_url(); ?>data_umum/js/dropdown.animate.js"></script>


    <!-- <script src="<?php site_url(); ?>data_umum/table/vendor/bootstrap/js/bootstrap.min.js"></script> --> -->


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
