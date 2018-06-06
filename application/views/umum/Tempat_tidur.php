<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Tempat Tidur</title>

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
  <?php
    $nama_ruang="";
     foreach($kamar as $data_kamar){

    ?>


<?php echo $this->load->view('umum/share/menu', '', TRUE);?>
<div class="blog">
    <header class="blog__header">
        <div class="container">
            <h3 class="blog__heading">Kamar</h3>
            <p class="blog__heading-level-two">Mengelola Data Kamar</p>
        </div>
    </header>

    <div class="container">
      <?php echo $this->session->flashdata('pesan')?>
        <br>
<div class="row">
      <div class="col-lg-5">
      <div class="card card-outline-info mb-3">
            <div class="card-header bg-success">Data Ruang dan Kamar</div>
            <div class="card-block">
              <form >

                    <div class="form-group row">
                      <label for="example-text-input" class="col-4 col-form-label">Nama Ruang</label>
                      <div class="col-8">
                          <input class="form-control" required type="text" readonly value=" <?php echo $data_kamar->nama_ruang;?>" name="nama_kamar" id="example-text-input" required placeholder="Masukkan Nama Kamar">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-4 col-form-label">Nama Kamar</label>
                      <div class="col-8">
                          <input class="form-control" required type="text" readonly value=" <?php echo $data_kamar->nama_kamar;?>" name="nama_kamar" id="example-text-input" required placeholder="Masukkan Nama Kamar">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-4 col-form-label">Kelas Kamar</label>
                      <div class="col-8">
                        <input class="form-control" required type="text" readonly value=" <?php echo $data_kamar->nama_kelas_kamar;?>" name="jumlah_tempat_tidur" id="example-text-input" required placeholder="Masukkan Jumlah Tempat">

                    </div>

              </form>
            </div>
        </div>
        </div>
        </div>


  <div class="col-lg-7 ">
    <div class="card card-outline-success mb-3">
          <div class="card-header bg-success">Tambah Tempat Tidur </div>
          <div class="card-block">
            <form method="POST" action="<?php echo site_url(); ?>tempat_tidur/tambah/<?php echo $data_kamar->id_kamar;?>">

                  <div class="form-group row">
                    <label for="example-text-input" class="col-4 col-form-label">Nama Tempat Tidur</label>
                    <div class="col-8">
                        <input class="form-control" required type="text"   name="nama_tempat_tidur" id="example-text-input" required placeholder="Masukkan Nama Tempat Tidur">
                    </div>
                  </div>
                  <p align="right"><button type="submit" class="btn btn-info btn-medium">Tambah</button></p>

            </form>
          </div>
      </div>
      </div>
  </div>

<?php } ?>
        <div class="card card-outline-info mb-3">
            <div class="card-header bg-info">Data Tempat Tidur</div>
            <div class="card-block">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr>
                          <th>NO</th>
                          <th>nama_tempat_tidur</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Hapus kamar</th>


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
                          <td><?php echo $tempat_tidur->nama_tempat_tidur ?></td>
                          <td><?php
                            if($tempat_tidur->status==0){
                              echo'<span class="badge badge-pill badge-success badge-sm">Kosong</span>';
                            }else if($tempat_tidur->status==1){
                              echo'<span class="badge badge-pill badge-danger badge-sm">Terisi</span>';
                            }
                           ?></td>
                           <td class="center"><a href="<?php echo site_url(); ?>tempat_tidur/<?php echo $this->uri->segment('3')?>/edit_tempat_tidur?id=<?php echo $tempat_tidur->id_tempat_tidur?>" onclick="return confirm('Apakah Anda Yakin Meemperbaharui ?')" ><button type="button" class="btn btn-warning btn-xs">Edit</button></td>
                           <td class="center"><a href="<?php echo site_url(); ?>tempat_tidur/hapus_tempat_tidur/<?php echo $this->uri->segment('3')?>?id=<?php echo $tempat_tidur->id_tempat_tidur?>" onclick="return confirm('Apakah Anda Yakin Menghapus ?')" ><button type="button" class="btn btn-danger btn-xs">Hapus</button></td>
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

<script src="<?php echo site_url(); ?>data_umum/vendors/jquery/jquery.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/tether/js/tether.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/js/dropdown.animate.js"></script>


    <!-- <script src="<?php echo site_url(); ?>data_umum/table/vendor/bootstrap/js/bootstrap.min.js"></script> --> -->


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
