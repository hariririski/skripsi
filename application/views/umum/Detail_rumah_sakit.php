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
<?php $CI =& get_instance();?>
<div class="apartment__about">
    <div class="container">
        <div class="apartment__about-wrap">

            <ul class="apartment__about-amenity">

                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-bed apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Jumlah Ruangan:
                          <?php 	$data['jlh_ruang']=$CI->jumlah_ruang($this->uri->segment('3'));
                          foreach ($data['jlh_ruang'] as $object) {
                            echo $object->jumlah_ruang;
                          }?></span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-bed apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Jumlah Kamar:
                          <?php 	$data['jlh_kamar']=$CI->jumlah_kamar($this->uri->segment('3'));
                        foreach ($data['jlh_kamar'] as $object) {
                          echo $object->jumlah_kamar;
                        }?></span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-bed apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Jumlah Tempat Tidur Kosong:
                          <?php 	$data['jlh_tempat_tidur_kosong']=$CI->jumlah_tempat_tidur_kosong($this->uri->segment('3'));
                        foreach ($data['jlh_tempat_tidur_kosong'] as $object) {
                          echo $object->jumlah_tempat_tidur_kosong;
                        }?></span>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>




<div class="apartment__full-description">
    <div class="container ">



      <div class="row " id="show" >
      <?php
        //$CI =& get_instance();
         foreach($ruang as $data_ruang){
       ?>

      <div class="col-lg-4" >
          <div id="accordion<?php echo $data_ruang->id_ruang;?>" role="tablist"  aria-multiselectable="true" >
                    <div class="card card-outline-info mb-4 card-accordion">
                        <div class="card-header card-header bg-info collapsed" id="heading-one" data-toggle="collapse" data-parent="#accordion" data-target="#<?php echo $data_ruang->id_ruang;?>" aria-expanded="false">
                            <?php echo $data_ruang->nama_jenis_ruang." / ".$data_ruang->nama_ruang;?>
                        </div>

                        <div id="<?php echo $data_ruang->id_ruang;?>" class="collapse" aria-expanded="false" style="">
                              <div class="card-block">
                                <div class="list-group">
                                  <?php 	$data['ruang1']=$CI->detail2($this->uri->segment('3'),$data_ruang->id_ruang);
                                  foreach ($data['ruang1'] as $object) {
                                  ?>
                                  <a  class="list-group-item list-group-item-action">

                                    <table border="0" width='100%'>
                                      <tr>
                                        <td width="80%">
                                            <?php print $object->nama_kamar;?>  &nbsp; &nbsp; &nbsp;
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm btn-success-flat" data-toggle="modal" data-target="#exampleModal<?php print $object->id_kamar;?>">
                                                <?php 	$data['kosong']=$CI->kosong($object->id_kamar);
                                                        foreach ($data['kosong'] as $object2) {
                                                        echo $object2->kosong;
                                                        }
                                                ?>
                                            dari
                                                <?php 	$data['jumlah_tempat_tidur']=$CI->jumlah_tempat_tidur($object->id_kamar);
                                                        foreach ($data['jumlah_tempat_tidur'] as $object3) {
                                                        echo $object3->jumlah_tempat_tidur;
                                                        }
                                                ?>
                                            </button>
                                        </td>
                                    </table>

                                          <div class="modal fade" id="exampleModal<?php print $object->id_kamar;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel"><?php print $object->nama_kamar;?></h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">×</span>
                                                          </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <div class="col-xl-12">
                                                                <table class="table table-striped" >
                                                                    <thead>
                                                                    <tr>

                                                                        <th>Nama/ Nomor Tempat Tidur</th>
                                                                        <th>status</th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php 	$data['tempat_tidur']=$CI->tempat_tidur($object->id_kamar);
                                                                            foreach ($data['tempat_tidur'] as $object2) {
                                                                            // echo $object2->nama_tempat_tidur;

                                                                    ?>

                                                                    <tr>

                                                                        <td><?php echo $object2->nama_tempat_tidur; ?></td>
                                                                        <td><?php
                                                                          if($object2->status==0){
                                                                            echo'<span class="badge badge-pill badge-success badge-sm">Kosong</span>';
                                                                          }else if($object2->status==1){
                                                                            echo'<span class="badge badge-pill badge-danger badge-sm">Terisi</span>';
                                                                          }
                                                                         ?></td>

                                                                    </tr>
                                                                  <?php } ?>
                                                                    </tbody>
                                                                </table>


                                                                <table class="table table-striped" >
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Nama fasilitas</th>
                                                                        <th>Jumlah</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      <tbody>
                                                                      <?php 	$data['fasilitas']=$CI->fasilitas($object->id_kamar);
                                                                              foreach ($data['fasilitas'] as $object2) {

                                                                      ?>
                                                                      <tr>
                                                                          <td><?php echo $object2->nama_fasilitas; ?></td>
                                                                          <td><?php echo $object2->jumlah; ?></td>
                                                                      </tr>
                                                                    <?php } ?>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                  </a>

                                <?php } ?>
                                </div>
                              </div>
                        </div>
                    </div>

                </div>
        </div>
        <?php
      }

         ?>
        </div>





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
<?php
$admin=$this->session->userdata('admin');
 if(isset($admin)){
?>
<div class="col-lg-12 " align="center">
    <a href="<?php echo site_url(); ?>rumah_sakit/tidak/<?php  echo $detail->kode_rs;?>" class="btn btn-outline-danger btn-lg">Tidak Memenuhi Syarat</a>
    <a href="<?php echo site_url(); ?>rumah_sakit/ya/<?php  echo $detail->kode_rs;?>" class="btn btn-success btn-lg">Memenuhi Syarat</a>

</div>
<br>
<?php
 }
 ?>
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
