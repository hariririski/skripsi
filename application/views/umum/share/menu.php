



 <div class="header-master">
     <div class="header-topbar">
         <div class="container">
             <div class="header-topbar__contact-info">
                 <div class="header-topbar__contact-info-item">
                     <span class="title">Telephone:</span>
                     <span class="value">0822-3765-3720</span>
                 </div>
                 <div class="header-topbar__contact-info-item">
                     <span class="title">Email: </span>
                     <span class="value">apkerrnap@gmail.com</span>
                 </div>
             </div>
             <ul class="nav header-topbar__nav">

                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo site_url(); ?>contact">Kontak</a>
                 </li>


             </ul>
         </div>
     </div>
     <div id="header-menu" class="header-master__menu">
         <div class="container">
             <nav class="navbar navbar-toggleable-lg">
                 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#header-master-menu">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="<?php echo site_url(); ?>home">APKER<span class="colored">R</span>NAP</a>
                 <div id="header-master-menu" class="collapse navbar-collapse">
                     <div class="header-master__menu-collapse">
                         <ul class="nav navbar-nav">
                             <li class="nav-item dropdown ">
                                 <a href="<?php echo site_url();?>home"class="nav-link <?php $link=uri_string(); if($link =="home"){ echo "active";} ?> "  role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                             </li>
                             <li class="nav-item dropdown">
                                 <a href="<?php echo site_url(); ?>rumah_sakit/rs"class="nav-link <?php $link=uri_string(); if($link =="rumah_sakit/rs"){ echo "active";} ?>"  role="button" aria-haspopup="true" aria-expanded="false">Rumah Sakit</a>
                             </li>
                             <li class="nav-item dropdown">
                                 <a href="<?php echo site_url(); ?>cari_kamar"class="nav-link <?php $link=uri_string(); if($link =="cari_kamar"){ echo "active";} ?>"  role="button" aria-haspopup="true" aria-expanded="false">Cari Kamar</a>
                             </li>

                             <?php
                             $rs=$this->session->userdata('rs');
                             $admin=$this->session->userdata('admin');
                              if(isset($rs)||isset($admin)){
                              ?>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle <?php $link=uri_string(); if($link =="rumah_sakit_admin"||$link =="Ruang"||$link =="profil"){ echo "active";} ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Data</a>
                                 <div class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                                   <?php

                                    if(isset($rs)){
                                   ?>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>profil">Profil Rumah Sakit</a>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>ruang">Ruang</a>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>pasien/data">Pasien</a>
                                  <?php }else if(isset($admin)){ ?>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>rumah_sakit_admin">Data Rumah Sakit</a>
                                  <?php } ?>
                                 </div>
                             </li>
                             <?php

                              if(isset($admin)){
                             ?>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle <?php $link=uri_string(); if($link =="kelas_rs"||$link =="jenis_rs"||$link =="pemilik_rs"||$link =="jenis_ruang"||$link =="kelas_kamar"||$link =="jenis_kelamin"){ echo "active";} ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pengaturan</a>
                                 <div class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>kelas_rs">Kelas Rumah Sakit</a>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>jenis_rs">Jenis Rumah Sakit</a>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>pemilik_rs">Pemilik Rumah Sakit</a>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>jenis_ruang">Jenis Ruang</a>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>kelas_kamar">Kelas Kamar</a>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>jenis_kelamin">Jenis Kelamin</a>
                                     <a class="dropdown-item" href="<?php echo site_url(); ?>admin">Administrator</a>
                                 </div>
                             </li>
                               <?php } ?>
                          <?php } ?>
                         </ul>
                         <div class="header-master__links">

                             <?php
                              if(isset($rs)||isset($admin)){
                              ?>
                             <a href="<?php echo site_url(); ?>login/logout" class="btn btn-outline-primary btn-rounded">logout</a>
                           <?php }else{?>
                             <a href="<?php echo site_url(); ?>daftar" class="btn-link">
                                 <span class="text">Daftar</span>
                             </a>
                            <a href="<?php echo site_url(); ?>login" class="btn btn-outline-primary btn-rounded">Login</a>
                           <?php } ?>
                         </div>
                     </div>
                 </div>
             </nav>
         </div>
     </div>
 </div>
