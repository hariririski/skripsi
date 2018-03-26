<script type="text/javascript" src="<?php echo site_url(); ?>data_umum/jquery-3.2.1.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    setInterval(function () {
      $('#show').load('<?php echo site_url(); ?>rumah_sakit/auto_data_ruang/<?php echo $this->uri->segment('3')?>')
    }, 3000/*waktu*/);
  });
</script>

<div class="row " id="show" >
<?php
   foreach($ruang as $data_ruang){

 ?>

<div class="col-lg-4" >
    <div id="accordion<?php echo $data_ruang->id_ruang;?>" role="tablist" aria-multiselectable="true" >
              <div class="card card-outline-info mb-4 card-accordion">
                  <div class="card-header card-header bg-info collapsed" id="heading-one" data-toggle="collapse" data-parent="#accordion" data-target="#<?php echo $data_ruang->id_ruang;?>" aria-expanded="false">
                      <?php echo $data_ruang->nama_jenis_ruang." / ".$data_ruang->nama_ruang;?>
                  </div>

                  <div id="<?php echo $data_ruang->id_ruang;?>" class="collapse" aria-expanded="false" style="">
                      <div class="card-block">
                        <div class="card-block">
                          <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                Nama Kamar  <span class="badge badge-pill badge-info badge-sm">Info</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in<span class="badge badge-pill badge-info badge-sm">10/10</span></a>
                            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus <span class="badge badge-pill badge-info badge-sm">11/10</span></a>
                            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac <span class="badge badge-pill badge-info badge-sm">1/2</span></a>
                            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros <span class="badge badge-pill badge-info badge-sm">12/20</span> </a>
                          </div>
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
