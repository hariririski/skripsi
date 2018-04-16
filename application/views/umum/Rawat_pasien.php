<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Tambah Pasien</title>

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
<script type="text/javascript" src="<?php echo base_url(); ?>data_umum/jquery_combo.js"></script> <!-- ajax-bertingkat -->
<script>
$(document).ready(function() {


    $("#ruang").change(function(){
    var kode_ruang = $("#ruang").val();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>pasien/kamar/"+kode_ruang,
      data: "kode_ruang="+kode_ruang,
      success: function(data){
        $("#kamar").html(data);
      }
    });
    });

    $("#kamar").change(function(){
    var kode_kamar = $("#kamar").val();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>pasien/tempat_tidur/"+kode_kamar,
      data: "kode_kamar="+kode_kamar,
      success: function(data){
        $("#tempat_tidur").html(data);
      }
    });
    });


});
</script>

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
            <h3 class="blog__heading">Rawat Pasien</h3>

        </div>
    </header>
    <?php echo $this->session->flashdata('pesan')?>
    <div class="container">
        <br>
        <?php
           $i=0;
           foreach($rawat as $pasien){
           $i++;
         ?>
      <div class="card card-outline-success mb-3">
            <div class="card-header bg-success">Tambah Pasien Rawat</div>
            <div class="card-block">
              <form method="POST" action="<?php echo site_url(); ?>pasien/rawat">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">NIK</label>
                      <div class="col-9">
                          <input class="form-control" autofocus="on" readonly value="<?php echo $pasien->nik?>" required type="text" name="nik" id="example-text-input" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Nama</label>
                      <div class="col-9">
                          <input class="form-control" autofocus="on" readonly value="<?php echo $pasien->nama_pasien?>" required type="text" name="nama_ruang" id="example-text-input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">jenis_kelamin</label>
                      <div class="col-9">
                          <input class="form-control" autofocus="on" required type="text" readonly value="<?php echo $pasien->nama_jenis_kelamin ?>" id="example-text-input" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label"> Ruang</label>
                      <div class="col-9">
                        <select class="form-control select2-form-control " id="ruang" name="ruang" required tabindex="-1" aria-hidden="true">
                              <option value="">Pilih Jenis Ruang</option>
                            <?php
                               foreach($ruang as $ruang){
                             ?>
                            <option value="<?php echo $ruang->id_ruang;?>"><?php echo $ruang->nama_ruang;?></option>
                            <?php
                              }
                             ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label"> Kamar</label>
                      <div class="col-9">
                        <select id="kamar" class="form-control select2-hidden-accessible" name="id_kecamatan" data-plugin="select2" data-placeholder="Pilih Kecamatan" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                          <option value="">Pilih</option>
                        </select>
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label"> Tempat Tidur</label>
                      <div class="col-9">
                        <select id="tempat_tidur" class="form-control select2-hidden-accessible" name="tempat_tidur" data-plugin="select2" data-placeholder="Pilih Kecamatan" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option value="">Pilih</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-3 col-form-label">Tanggal Masuk</label>
                      <div class="col-9">
                          <input class="form-control" autofocus="on" required type="date" name="tanggal_masuk" id="example-text-input" placeholder="Masukkan Nama Ruang">
                      </div>
                    </div>

                  <p align="right"><button type="submit" class="btn btn-info btn-medium">Tambah</button></p>
              </form>
            </div>
        </div>
        <?php
      }
         ?>



    </div>

</div>

  <?php echo $this->load->view('umum/share/footer', '', TRUE);?>

<script src="<?php echo site_url(); ?>data_umum/vendors/jquery/jquery.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/tether/js/tether.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/js/dropdown.animate.js"></script>


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
