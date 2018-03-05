<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Pemilik Rumah Sakit</title>

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
            <h3 class="blog__heading">Pemilik Rumah Sakit</h3>
            <p class="blog__heading-level-two">Mengelola Data Pemilik Rumah Sakit</p>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__posts">
                  <div class="col-lg-10">
                      <form method="POST" action="">
                            <div class="form-group row">
                            <label for="example-text-input" class="col-3 col-form-label">Pemilik Rumah Sakit</label>
                            <div class="col-9">
                                <input class="form-control" type="text"  id="example-text-input" placeholder="Masukkan Jenis Kelamin">

                            </div>

                        </div>
                      </form>
                        <p align="right"><button type="submit" class="btn btn-info btn-medium">Tambah</button></p>
                    </div>
                </div>
                    <hr>
            </div>

        </div>
    </div>

</div>



<div class="container">
<div class="col-lg-12">
            <!-- <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div> -->
            <!-- /.col-lg-12 -->
            <br>
        </div>
        <!-- /.row -->
        <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Kelas Rumah Sakit</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>

                                </tr>
                            </thead>
                            <tbody>


                                <tr class="odd gradeX">
                                    <td >a</td>
                                    <td >a</td>
                                    <td class="center"><a href="detail_rental.php?id="><button type="button" class="btn btn-warning btn-xs">Edit</button></td>
                                    <td class="center"><a href="detail_rental.php?id="><button type="button" class="btn btn-danger btn-xs">Hapus</button></td>
                                </tr>


                            </tbody>
                        </table>
                        <!-- /.table-responsive -->

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
                <hr>
            <!-- /.col-lg-12 -->
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

    

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php site_url(); ?>data_umum/table/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="<?php site_url(); ?>data_umum/table/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php site_url(); ?>data_umum/table/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="<?php site_url(); ?>data_umum/table/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php site_url(); ?>data_umum/table/dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>
</body>
</html>
