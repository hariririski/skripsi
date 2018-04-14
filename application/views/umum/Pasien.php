<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Rumah Sakit Admin</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/fonts/iconfont/styles.css">

    <link href="<?php echo site_url(); ?>data_umum/table/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- <link href="<?php echo site_url(); ?>data_umum/table/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo site_url(); ?>data_umum/table/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>data_umum/table/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>data_umum/table/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>data_umum/table/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/leaflet/leaflet.css">


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
            <h3 class="blog__heading">Pasien</h3>
            <p class="blog__heading-level-two">Pasien</p>
        </div>
    </header>



</div>



<div class="container">
  <br>
  <div class="card card-outline-success mb-3">
        <div class="card-header bg-success">Tambah Pasien</div>
        <div class="card-block">
          <form method="POST" action="<?php site_url(); ?>jenis_ruang/tambah">
                <div class="form-group row">
                <label for="example-text-input" class="col-3 col-form-label">NIK Pasien</label>
                <div class="col-9">
                    <input class="form-control"  autofocus="autofocus" required type="text" name="nik" id="example-text-input" placeholder="Masukkan NIK Pasien">

                </div>

            </div>
              <p align="right"><button type="submit" class="btn btn-info btn-medium">Cek</button></p>
          </form>
        </div>
    </div>
  <br>
  <div class="card card-outline-info mb-3">
        <div class="card-header bg-info">Pasien Sedang Dirawat</div>
        <div class="card-block">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                  <tr>
                      <th>NO</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Tanggal Masuk</th>
                      <th>Ruang</th>
                      <th>Kamar</th>
                      <th>Bed</th>
                      <th>Keluarkan</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                   $i=0;
                   foreach($rawat as $rawat){
                   $i++;
                 ?>
                  <tr>
                      <td><?php echo $i?></td>
                      <td><?php echo $rawat->nik ?></td>
                      <td><?php echo $rawat->nama_pasien ?></td>
                      <td><?php echo $rawat->nama_jenis_kelamin ?></td>
                      <td><?php echo $rawat->tanggal_masuk?></td>
                      <td><?php echo $rawat->nama_ruang?></td>
                      <td><?php echo $rawat->nama_kamar?></td>
                      <td><?php echo $rawat->nama_tempat_tidur?></td>
                      <td class="center"><a href="rumah_sakit/detail/<?php echo $rawat->kode_rs?>"><button type="button" class="btn btn-success btn-xs">Detail</button></td>
                  </tr>
                  <?php
                  }
                 ?>

              </tbody>
          </table>
          <!-- /.table-responsive -->
        </div>
    </div>


    <div class="card card-outline-warning mb-3">
            <div class="card-header bg-warning">Pasien Keluar</div>
            <div class="card-block">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example2">
                  <thead>
                      <tr>
                          <th>NO</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Masuk</th>
                          <th>Tanggal keluar</th>
                          <th>Ruang</th>
                          <th>Kamar</th>
                          <th>Bed</th>

                      </tr>
                  </thead>
                  <tbody>
                    <?php
                       $i=0;
                       foreach($selesai as $selesai){
                       $i++;
                     ?>
                      <tr>
                          <td><?php echo $i?></td>
                          <td><?php echo $selesai->nik ?></td>
                          <td><?php echo $selesai->nama_pasien ?></td>
                          <td><?php echo $selesai->nama_jenis_kelamin ?></td>
                          <td><?php echo $selesai->tanggal_masuk?></td>
                          <td><?php echo $selesai->tanggal_keluar?></td>
                          <td><?php echo $selesai->nama_ruang?></td>
                          <td><?php echo $selesai->nama_kamar?></td>
                          <td><?php echo $selesai->nama_tempat_tidur?></td>

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










  <?php echo $this->load->view('umum/share/footer', '', TRUE);?>

<script src="<?php echo site_url(); ?>data_umum/vendors/jquery/jquery.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/tether/js/tether.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/js/dropdown.animate.js"></script>



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

    <!-- <script src="<?php echo site_url(); ?>data_umum/table/vendor/bootstrap/js/bootstrap.min.js"></script> -->


        <script src="<?php echo site_url(); ?>data_umum/table/vendor/metisMenu/metisMenu.min.js"></script>

        <script src="<?php echo site_url(); ?>data_umum/table/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo site_url(); ?>data_umum/table/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo site_url(); ?>data_umum/table/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <script src="<?php echo site_url(); ?>data_umum/table/dist/js/sb-admin-2.js"></script>


        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>

        <script>
        $(document).ready(function() {
            $('#dataTables-example2').DataTable({
                responsive: true
            });
        });
        </script>
</body>
</html>
