<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Info Pasien</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/fonts/iconfont/styles.css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="<?php echo site_url(); ?>data_umum/table/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- <link href="<?php echo site_url(); ?>data_umum/table/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo site_url(); ?>data_umum/table/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/css/vendors/select2/select2.min.css">


    <!-- BEGIN THEME STYLES -->
    <?php echo $this->load->view('umum/share/warna', '', TRUE);?>
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">


<?php echo $this->load->view('umum/share/menu', '', TRUE);?>

<div class="hero-resume">
    <div class="container">
        <div class="hero-resume__heading">
            <div class="hero-resume__heading--sub">&nbsp;</div>

        </div>
        <form  method="get">
        <div class="row hero-resume__filter">

            <div class="col-xl-10">
                <div class="form-group">
                    <label for="hero-resume-location">Rumah Sakit</label>
                    <select id="hero-resume-location" required name="rs" class="form-control selectable select2-hidden-accessible" data-selectable-no-search="true" tabindex="-1" aria-hidden="true">
                      <option value="" >Pilih Rumah Sakit</option>
                      <?php
                         foreach($rumah_sakit as $data_rumah_sakit){
                       ?>
                       <option value="<?php echo $data_rumah_sakit->kode_rs?>" <?php if($_GET['rs']==$data_rumah_sakit->kode_rs){echo'selected=""';}?> ><?php echo $data_rumah_sakit->nama_rs?></option>
                     <?php } ?>
                    </select>
                </div>
            </div>


            <div class="col-xl-2 hero-resume__search-wrap">
                <button type="submit"class="btn btn-primary btn-block btn-lg hero-resume__search-button">Temukan</button>
            </div>
        </div>
        </form>
    </div>
</div>
<?php if(($_GET['rs'])!=null){?>
<div class="listings-resumes">
    <div class="container">
      <div class="card card-outline-info mb-3">
            <div class="card-header bg-info">Pasien Sedang Dirawat</div>
            <div class="card-block">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr>
                          <th>NO</th>

                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Masuk</th>
                          <th>Ruang</th>
                          <th>Kamar</th>
                          <th>Bed</th>

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

                          <td><?php echo $rawat->nama_pasien ?></td>
                          <td><?php echo $rawat->nama_jenis_kelamin ?></td>
                          <td><?php echo $rawat->tanggal_masuk?></td>
                          <td><?php echo $rawat->nama_ruang?></td>
                          <td><?php echo $rawat->nama_kamar?></td>
                          <td><?php echo $rawat->nama_tempat_tidur?></td>

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
<?php } ?>
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

<script src="<?php echo site_url(); ?>data_umum/vendors/select2/js/select2.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/js/travel-trips.js"></script>

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
</body>
</html>
