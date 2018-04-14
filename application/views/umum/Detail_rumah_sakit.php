<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title><?php
       foreach($lihat as $title){
       echo $title->nama_rs;
     }
     ?></title>

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
       <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/css/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/nouislider/nouislider.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/leaflet/leaflet.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/lightslider/css/lightslider.min.css">


    <!-- BEGIN THEME STYLES -->
    <?php echo $this->load->view('umum/share/warna', '', TRUE);?>
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">



<?php echo $this->load->view('umum/share/menu', '', TRUE);?>
<?php
   foreach($lihat as $detail){

 ?>
<div class="apartment">
    <div class="apartment__wrap">
        <a href="" class="apartment__back-to-search">Kembali Ke Pencaharian</a>
        <h1 class="apartment__name"><?php  echo $detail->nama_rs;?></h1>
        <div class="apartment__location"><?php  echo $detail->alamat;?></div>


        <div class="apartment__location"> <?php  echo $detail->nama_rs;?> merupakan <?php  echo $detail->nama_jenis_rs;?>
          yang memiliki Kelas <?php  echo $detail->nama_kelas_rs?> yang  berstatus kepemilikan oleh <?php  echo $detail->nama_pemilik_rs;?>
        </div>


        <div class="apartment__unique-id">Kode Rumah Sakit: <span class="text-bold"><?php  echo $detail->kode_rs;?></span></div>
    </div>


    <div class="col-lg-6">

<div>
  <?php if($detail->gambar==NULL){?>
      <img class="d-flex" width="100%"src="<?php echo site_url(); ?>gambar/rs.png" alt="<?php  echo $detail->nama_rs;?>">
  <?php }else{?>
      <img class="d-flex" width="100%"src="<?php echo site_url(); ?>gambar/<?php  echo $detail->kode_rs;?>/<?php  echo $detail->gambar;?>" alt="<?php  echo $detail->nama_rs;?>">
  <?php }?>

</div>
                </div>



</div>
<div class="apartment__about">
    <div class="container">
        <div class="apartment__about-wrap">

            <ul class="apartment__about-amenity">
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-info-solid apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Floor: 5</span>
                        <span>Total area: 45m<sup>2</sup></span>
                        <span>Living area: 34m<sup>2</sup></span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-bed apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Jumlah Ruangan: 1</span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-bed apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Jumlah Kamar: 1</span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-bed apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Jumlah kamar Kosong: 1</span>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>




<div class="apartment__full-description">
    <div class="container ">


        <?php //echo $this->load->view('umum/share/auto_ruang', '', TRUE);?>




      </div>
</div>


<div class="container apartment__owner">
    <div class="apartment__owner-avatar-wrap">
        <?php if($detail->gambar==NULL){?>
              <img src="<?php echo site_url(); ?>gambar/rs.png" alt="" class="apartment__owner-avatar" height="170">
        <?php }else{?>
              <img src="<?php echo site_url(); ?>gambar/<?php  echo $detail->kode_rs?>/<?php  echo $detail->gambar;?>" alt="" class="apartment__owner-avatar" height="170">
        <?php }?>

    </div>
    <div class="apartment__owner-info">
        <div class="apartment__owner-info-name"><?php  echo $detail->nama_rs;?></div>
        <div class="apartment__owner-info-location"><?php  echo $detail->alamat;?></div>

        <div class="apartment__owner-info-actions-wrap">
            <ul class="apartment__owner-info-actions list-unstyled">
                <li>
                    <div class="apartment__owner-info-location">Telphone/No HP : <?php  echo $detail->no_hp;?></div>
                </li>

            </ul>
        </div>
    </div>
    <!-- <div class="apartment__owner-actions">
        <a href="#" class="btn btn-primary btn-lg">Request a call</a>
        <a href="#" class="btn btn-outline-primary btn-lg">Send a message</a>
    </div> -->
</div>
<div class="col-lg-12 " align="center">
    <a href="<?php echo site_url(); ?>rumah_sakit/tidak/<?php  echo $detail->kode_rs;?>" class="btn btn-outline-danger btn-lg">Tidak Memenuhi Syarat</a>
    <a href="<?php echo site_url(); ?>rumah_sakit/ya/<?php  echo $detail->kode_rs;?>" class="btn btn-success btn-lg">Memenuhi Syarat</a>

</div>
<br>
<?php
 }
 ?>
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

<script src="<?php echo site_url(); ?>data_umum/vendors/leaflet/leaflet.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/lightslider/js/lightslider.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/js/apartment.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/nouislider/nouislider.min.js"></script>

</body>
</html>
