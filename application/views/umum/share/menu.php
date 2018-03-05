 <?php //$this->session->flashdata('login');?>
 <?php
 //$admin=$this->session->userdata('login');
 //$level=$this->session->userdata('level');
 ?>




 <div class="header-master">
     <div class="header-topbar">
         <div class="container">
             <div class="header-topbar__contact-info">
                 <div class="header-topbar__contact-info-item">
                     <span class="title">Phone:</span>
                     <span class="value">800-987-65-43</span>
                 </div>
                 <div class="header-topbar__contact-info-item">
                     <span class="title">Email: </span>
                     <span class="value">info@companyname.com</span>
                 </div>
             </div>
             <ul class="nav header-topbar__nav">

                 <li class="nav-item">
                     <a class="nav-link" href="<?php site_url(); ?>contact">Contact</a>
                 </li>
                 <!-- <li class="nav-item">
                     <a class="nav-link" href="<?php site_url(); ?>about">About</a>
                 </li> -->

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
                 <a class="navbar-brand" href="<?php site_url(); ?>home">Direct<span class="colored">o</span>ry</a>
                 <div id="header-master-menu" class="collapse navbar-collapse">
                     <div class="header-master__menu-collapse">
                         <ul class="nav navbar-nav">
                             <li class="nav-item dropdown">
                                 <a href="<?php site_url(); ?>"class="nav-link "  role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                             </li>
                             <li class="nav-item dropdown">
                                 <a href="<?php site_url(); ?>rumah_sakit"class="nav-link "  role="button" aria-haspopup="true" aria-expanded="false">Rumah Sakit</a>
                             </li>


                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Data</a>
                                 <div class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                                     <a class="dropdown-item" href="hero-booking-places.html">Profil Rumah Sakit</a>
                                     <a class="dropdown-item" href="hero-steps.html">Ruang</a>
                                 </div>
                             </li>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pengaturan</a>
                                 <div class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                                     <a class="dropdown-item" href="blog.html">Kelas Rumah Sakit</a>
                                     <a class="dropdown-item" href="blog-post.html">Jenis Rumah Sakit</a>
                                     <a class="dropdown-item" href="blog-post.html">Pemilik Rumah Sakit</a>
                                     <a class="dropdown-item" href="blog-post.html">Kelas Rumah Sakit</a>
                                     <a class="dropdown-item" href="blog-post.html">Jenis Ruang</a>
                                     <a class="dropdown-item" href="blog-post.html">Kelas Kamar</a>
                                     <a class="dropdown-item" href="blog-post.html">Jenis Kelamin</a>
                                 </div>
                             </li>
                         </ul>
                         <div class="header-master__links">
                             <a href="<?php site_url(); ?>daftar" class="btn-link">
                                 <span class="text">Daftar</span>
                             </a>
                             <a href="<?php site_url(); ?>login" class="btn btn-outline-primary btn-rounded">Login</a>
                         </div>
                     </div>
                 </div>
             </nav>
         </div>
     </div>
 </div>
