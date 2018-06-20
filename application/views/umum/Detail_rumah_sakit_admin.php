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



<?php
   foreach($lihat as $detail){

 ?>

<?php $CI =& get_instance();?>




<div >
    <div >



      <div class="row " id="show" >
      <?php
        //$CI =& get_instance();
         foreach($ruang as $data_ruang){
       ?>

      <div class="col-md-6" >
          <div id="accordion<?php echo $data_ruang->id_ruang;?>" role="tablist"  aria-multiselectable="true" >
                    <div class="card card-outline-info mb-4 card-accordion">
                        <div class="card-header bg-info collapsed" id="heading-six" data-toggle="collapse" data-parent="#accordion" data-target="#<?php echo $data_ruang->id_ruang;?>" aria-expanded="false">
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


<?php
 }
 ?>



<script src="<?php echo site_url(); ?>data_umum/vendors/jquery/jquery.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/tether/js/tether.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/js/dropdown.animate.js"></script>




<script src="<?php echo site_url(); ?>data_umum/vendors/leaflet/leaflet.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/lightslider/js/lightslider.min.js"></script>
<script src="<?php echo site_url(); ?>data_umum/js/apartment.js"></script>
<script src="<?php echo site_url(); ?>data_umum/vendors/nouislider/nouislider.min.js"></script>

</body>
</html>
