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
                     <a class="nav-link" href="contact.html">Contact</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="signup.html">About</a>
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
                 <a class="navbar-brand" href="<?php site_url(); ?>home">Direct<span class="colored">o</span>ry</a>
                 <div id="header-master-menu" class="collapse navbar-collapse">
                     <div class="header-master__menu-collapse">
                         <ul class="nav navbar-nav">
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Listings</a>
                                 <div class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                                     <a class="dropdown-item" href="index.html">Job Listing</a>
                                     <a class="dropdown-item" href="listings-apartments.html">Apartments Listing</a>
                                     <a class="dropdown-item" href="listings-houses.html">Houses Listing</a>
                                     <a class="dropdown-item" href="listings-houses-projects.html">Houses Projects Listing</a>
                                     <a class="dropdown-item" href="listings-master.html">Masters Listing</a>
                                     <a class="dropdown-item" href="listings-travel-trips.html">Travel Trips Listing</a>
                                     <a class="dropdown-item" href="listings-places.html">Places Listing</a>
                                     <a class="dropdown-item" href="listings-properties.html">Properties Listing</a>
                                     <a class="dropdown-item" href="listings-booking-flight.html">Flight Listing</a>
                                 </div>
                             </li>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                 <div class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                                     <div class="dropdown-menu__columns">
                                         <div class="dropdown-menu__column">
                                             <a class="dropdown-item" href="jobs-browse-jobs.html">Job - Browse Jobs</a>
                                             <a class="dropdown-item" href="jobs-overview.html">Job - Overview</a>
                                             <a class="dropdown-item" href="jobs-post-job.html">Job - Post Job</a>
                                             <a class="dropdown-item" href="jobs-browse-resumes.html">Job - Browse Resumes</a>
                                             <a class="dropdown-item" href="jobs-candidate-resume.html">Job - Candidate Resume</a>
                                             <a class="dropdown-item" href="job-signup.html">Job - Sign Up</a>
                                             <a class="dropdown-item" href="master-orders-list.html">FindMaster - Orders List</a>
                                         </div>
                                         <div class="dropdown-menu__column">
                                             <a class="dropdown-item" href="master-post-application.html">FindMaster - Post Application</a>
                                             <a class="dropdown-item" href="master-profile-information.html">FindMaster - Profile Information</a>
                                             <a class="dropdown-item" href="master-profile-prices.html">FindMaster - Profile Prices</a>
                                             <a class="dropdown-item" href="master-profile-reviews.html">FindMaster - Profile Reviews</a>
                                             <a class="dropdown-item" href="master-profile-work-examples.html">FindMaster - Profile Work Examples</a>
                                             <a class="dropdown-item" href="master-service-offers.html">FindMaster -Service Offers</a>
                                             <a class="dropdown-item" href="apartments-apartment.html">Apartments - Apartment Overview</a>
                                             <a class="dropdown-item" href="houses-about-us.html">Houses - About Us</a>
                                         </div>
                                         <div class="dropdown-menu__column">
                                             <a class="dropdown-item" href="contact.html">Contact</a>
                                             <a class="dropdown-item" href="all-categories.html">All Categories</a>
                                             <a class="dropdown-item" href="uikit.html">UI Kit</a>
                                             <a class="dropdown-item" href="500.html">500 Error</a>
                                             <a class="dropdown-item" href="404.html">404 Error</a>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Elements</a>
                                 <div class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                                     <a class="dropdown-item" href="hero-booking-places.html">Hero - Booking Places</a>
                                     <a class="dropdown-item" href="hero-steps.html">Hero - Steps</a>
                                 </div>
                             </li>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                 <div class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                                     <a class="dropdown-item" href="blog.html">Main</a>
                                     <a class="dropdown-item" href="blog-post.html">Post Overview</a>
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
