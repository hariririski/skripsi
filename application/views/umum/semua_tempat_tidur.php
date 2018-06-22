<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Data Tempat Tidur</title>

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



<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->



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
            <h3 class="blog__heading">Info Temat Tidur</h3>

        </div>
    </header>



</div>



<div class="container">
  <br>
  <div class="card card-outline-info mb-3">
      <div class="card-header bg-info">Data Tempat Tidur</div>
      <div class="card-block">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Ruang</th>
                    <th>Kamar</th>
                    <th>Nama Tempat Tidur</th>
                    <th>Status</th>



                </tr>
            </thead>
            <tbody>


              <?php
                 $i=0;
                 foreach($lihat as $tempat_tidur){
                 $i++;
               ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $tempat_tidur->nama_ruang ?></td>
                    <td><?php echo $tempat_tidur->nama_kamar ?></td>
                    <td><?php echo $tempat_tidur->nama_tempat_tidur ?></td>
                    <td><?php
                      if($tempat_tidur->status==0){
                        echo'<span class="badge badge-pill badge-success badge-sm">Kosong</span>';
                      }else if($tempat_tidur->status==1){
                        echo'<span class="badge badge-pill badge-danger badge-sm">Terisi</span>';
                      }
                     ?></td>

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
