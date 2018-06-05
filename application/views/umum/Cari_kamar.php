<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Info Kamar</title>

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
    <style>
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
}

.pagination a.active {
    background-color: #0594d0;
    color: white;
    border: 1px solid #0594d0;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>


<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/css/vendors/select2/select2.min.css">


    <!-- BEGIN THEME STYLES -->
    <?php echo $this->load->view('umum/share/warna', '', TRUE);?>
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">


<?php echo $this->load->view('umum/share/menu', '', TRUE);?>
<form  method="post"  >
  <?php
  $dkamar=$this->uri->segment(3, 0);
  $djenis=$this->uri->segment(4, 0);
  $dkelas=$this->uri->segment(5, 0);
  if($dkamar=='null'){
    $dkamar=null;
  }
  ?>
<div class="hero-resume">
    <div class="container">
        <div class="hero-resume__heading">
            <div class="hero-resume__heading--sub">&nbsp;</div>
        </div>
        <div class="row hero-resume__filter">
            <div class="col-xl-6">
                <div class="form-group">
                    <label for="hero-resume-search">Cari Kamar</label>
                    <input type="text" name="dkamar"value="<?php echo $dkamar;?>" id="hero-resume-search" class="form-control"  placeholder="Kata Kunci">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="form-group">
                    <label for="hero-resume-location">Jenis Ruang</label>
                    <select id="hero-resume-location" name="jenis" class="form-control selectable select2-hidden-accessible" data-selectable-no-search="true" tabindex="-1" aria-hidden="true">
                        <option value="0" <?php if($djenis==0){echo"selected";}?>>Semua</option>
                        <?php
                           foreach($jenis_ruang as $data_jenis_ruang){
                         ?>
                         <option value="<?php echo $data_jenis_ruang->id_jenis_ruang?>" <?php if($data_jenis_ruang->id_jenis_ruang==$djenis){echo"selected";}?>  ><?php echo $data_jenis_ruang->nama_jenis_ruang?></option>
                       <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="form-group">
                    <label for="hero-resume-skills">Kelas</label>
                    <select id="hero-resume-skills" name="kelas"class="form-control selectable select2-hidden-accessible" data-selectable-no-search="true" tabindex="-1" aria-hidden="true">
                      <option value="0" <?php if($dkelas==0){echo"selected";}?>>Semua</option>
                      <?php
                         foreach($kelas_kamar as $data_kelas_kamar){
                       ?>
                       <option value="<?php echo $data_kelas_kamar->id_kelas_kamar?>" <?php if($data_kelas_kamar->id_kelas_kamar==$dkelas){echo"selected";}?> ><?php echo $data_kelas_kamar->nama_kelas_kamar?></option>
                     <?php } ?>
                    </select>
                </div>
            </div>

            <div class="col-xl-2 hero-resume__search-wrap">
                <button type="submit" name="temukan" class="btn btn-primary btn-block btn-lg hero-resume__search-button">Temukan</button>
            </div>
        </div>
    </div>
</div>
</form>
<?php
  if(isset($_POST['temukan'])){
    $dkamar=$_POST['dkamar'];
    if(empty($dkamar)){
      $dkamar='null';
    }
    $jenis=$_POST['jenis'];
    $kelas=$_POST['kelas'];
    redirect('cari_kamar/cari/'.$dkamar.'/'.$jenis.'/'.$kelas.'/');
  }
?>
<div class="listings-resumes">
    <div class="container">


        <div class="listings-resumes__items">
          <?php
          if (is_array($semua) || is_object($semua)){
             $i=0;
             foreach($semua as $kamar){

           ?>
            <div class="listings-resumes__item">
                <div class="listings-resumes__item-content">
                    <img src="<?php echo site_url();
                        if($kamar->gambar!=NULL){
                        echo "gambar/";
                        echo $kamar->kode_rs;
                        echo "/";
                        echo $kamar->gambar;
                      }else{
                        echo"gambar/rs.png";
                      }
                      ?>" alt="" width="100" height="100" class="listings-resumes__item-avatar">
                    <div class="listings-resumes__item-info">
                        <div class="listings-resumes__item-user-name">
                            <a href="<?php echo site_url();?>rumah_sakit/detail/<?php echo $kamar->kode_rs;?>"><?php echo $kamar->nama_ruang;echo" / "; echo $kamar->nama_kamar; echo" / "; echo $kamar->nama_tempat_tidur; ?></a>
                        </div>
                        <div class="listings-resumes__item-user-occupation">
                            <a href="<?php echo site_url();?>rumah_sakit/detail/<?php echo $kamar->kode_rs;?>"><?php echo $kamar->nama_rs?></a>
                        </div>
                        <div class="listings-resumes__item-user-description">
                            Tempat Tidur <?php echo $kamar->nama_tempat_tidur?> Berada Pada Kamar<?php echo $kamar->nama_kamar?> Yang Mempunyai Kelas <?php echo $kamar->nama_kelas_kamar?> Terdapat Pada Ruang <?php echo $kamar->nama_ruang?> Yang Merawat Pasiendan Mempunyai Kelas <?php echo $kamar->nama_jenis_ruang?>
                        </div>
                        <div class="listings-resumes__item-user-skills">
                            <a href="#" class="badge badge-default"><?php echo $kamar->nama_kelas_kamar?></a>
                            <a href="#" class="badge badge-default"><?php echo $kamar->nama_jenis_ruang?></a>
                        </div>
                    </div>

                </div>
                <ul class="listings-resumes__item-extras list-unstyled">
                  <?php $CI =& get_instance();?>
                  Fasilitas
                  <?php 	$data['fasilitas']=$CI->fasilitas($kamar->id_kamar);
                  foreach ($data['fasilitas'] as $object) {
                  ?>

                    <li class="listings-resumes__item-extras-item">
                        <span class="icon iconfont-map-point"></span>
                      <?php echo $object->nama_fasilitas;?>
                    </li>

                    </li>
                  <?php } ?>
                </ul>
            </div>
            <?php
          }
        }else{
             ?>

             <div class="alert alert-warning" role="alert">
                     <strong>Maaf!</strong>  Data Yang Anda Cari Tidak Tersedia
                 </div>
        <?php } ?>
        </div>

        <nav class="listings-pagination d-flex justify-content-center">
            <ul class="pagination">
              <?php foreach ($links as $link) {
              echo "  <li class='page-item active'>&nbsp". $link." </li>";

              } ?>
            </ul>
        </nav>
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

<script src="<?php echo site_url(); ?>data_umum/vendors/select2/js/select2.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/js/travel-trips.js"></script>


</body>
</html>
