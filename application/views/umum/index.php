<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Ketersediaan Ruang Raat Inap</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/iconfont/styles.css">




    <?php echo $this->load->view('umum/share/warna', '', TRUE);?>

</head>
<body class="">


<?php echo $this->load->view('umum/share/menu', '', TRUE);?>

<?php echo $this->session->flashdata('pesan')?>
<div class="hero-master">
    <div class="container">
        <h2 class="hero-master__heading">Dapatkan informasi Dengan Mudah  <br> Ketersediaan Ruang Rawat Inap</h2>
        <a href="master-post-application.html" class="btn btn-primary btn-rounded hero-master__post-job">Ketersediaan Ruang Rapat Inap</a>
    </div>
</div>
<section class="popular-jobs">
    <h2 class="popular-jobs__heading">Rumah Sakit Terbaru</h2>

    <div class="container">
        <div class="row">
          <?php
             $i=0;
             foreach($lihat as $rs){
             $i++;
           ?>
            <div class="col-lg-3">
                <a href="#" class="popular-jobs__item">
                    <img src="<?php echo site_url();
                              if($rs->gambar!=NULL){
                                  echo "gambar/";
                                  echo $rs->kode_rs;
                                  echo "/";
                                  echo $rs->gambar;
                                }else{
                                  echo"gambar/rs.png";
                                }
                                ?>" alt=""  height="200px"class="popular-jobs__item-image embed-responsive">
                    <div class="popular-jobs__item-title"><?php echo $rs->nama_rs?></div>
                </a>
            </div>
            <?php
            }
             ?>

        </div>

    </div>
</section>
<div class="features-master">
    <div class="container">
        <h2 class="features-master__heading">Bagaimana Cara Bergabung Bersama Kami?</h2>

        <div class="row">

            <div class="col-lg-4">
                <div class="features-master__item">
                    <span class="features-master__item-icon iconfont-paper-solid"></span>
                    <h6 class="features-master__item-title">Melakukan Pendaftaran</h6>
                    <p class="features-master__item-description">
                        Melakukan Pendaftaran Serta Mengisi Data Dengan Benar
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-master__item">
                    <span class="features-master__item-icon iconfont-user-checked"></span>
                    <h6 class="features-master__item-title">Verifikasi Data</h6>
                    <p class="features-master__item-description">
                        Setelah Melakukan Pendaftaran Kami Akan Melalakukan Verifikasi Untuk Mengecek Kebenaran Data
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-master__item">
                    <span class="features-master__item-icon iconfont-info-solid"></span>
                    <h6 class="features-master__item-title">Masukkan Data Ruang, Kamar dan Tempat Tidur</h6>
                    <p class="features-master__item-description">
                        Setelah Verifikasi Berhasil, Kamu Memasukkan Data Ruang, Kamar, Tempat Tidur dan Pasien Yang Akan Di rawat dan Memperbaharuai Data Secara Berkala
                    </p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="<?php site_url(); ?>daftar" class="btn btn-outline-primary btn-rounded features-master__btn">Daftar Sekarang </a>
        </div>

        <div class="text-center mt-3 features-master__free-message">It is absolutely free</div>
    </div>
</div>
<div class="application-master">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php site_url(); ?>data_umum/images/master/application-person.png" alt="" class="application-master__person" width="45%">
            </div>
            <div class="col-lg-6">
                <h2 class="application-master__heading">
                    Jika Memilik Pertanyaan Hubungi Kami.!
                </h2>
                <a href="<?php site_url(); ?>contact" class="btn btn-rounded application-master__describe-btn">Hubungi Kami!</a>
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
            $(".navbar-toggler").on("click", function () {
                $(this).toggleClass("is-active");
            });
        });
    })(jQuery);
</script>



</body>
</html>
