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

        <div class="apartment__price">
            $399/mo <a href="" class="apartment__price-offer">Offer your price</a>
        </div>

        <a href="#" class="btn btn-primary apartment__price-make-reservation" >Make a reservation</a>

        <div class="apartment__description">
            Strong focus on great code to bring ultra fast experience
            from browsing the listings in the directory theme.
            Strong focus on great code to bring ultra fast experience
            from browsing the listings in the directory theme.
        </div>

        <div class="apartment__unique-id">Number of ads: <span class="text-bold">08034</span></div>
    </div>
    <div class="apartment__image-slider">
        <ul id="apartment-image-slider">
            <li data-thumb="<?php echo site_url(); ?><?php  echo $detail->gambar;?>">
                <img src="<?php echo site_url(); ?><?php  echo $detail->gambar;?>" alt="">
            </li>
            <li data-thumb="<?php echo site_url(); ?>data_umum/images/apartments/flat-thumb.png">
                <img src="<?php echo site_url(); ?>data_umum/images/apartments/flat-lg.png" alt="">
            </li>
            <li data-thumb="<?php echo site_url(); ?>data_umum/images/apartments/flat-thumb.png">
                <img src="<?php echo site_url(); ?>data_umum/images/apartments/flat-lg.png" alt="">
            </li>
            <li data-thumb="<?php echo site_url(); ?>data_umum/images/apartments/flat-thumb.png">
                <img src="<?php echo site_url(); ?>data_umum/images/apartments/flat-lg.png" alt="">
            </li>
            <li data-thumb="<?php echo site_url(); ?>data_umum/images/apartments/flat-thumb.png">
                <img src="<?php echo site_url(); ?>data_umum/images/apartments/flat-lg.png" alt="">
            </li>
            <li data-thumb="<?php echo site_url(); ?>data_umum/images/apartments/flat-thumb.png">
                <img src="<?php echo site_url(); ?>data_umum/images/apartments/flat-lg.png" alt="">
            </li>
            <li data-thumb="<?php echo site_url(); ?>data_umum/images/apartments/flat-thumb.png">
                <img src="<?php echo site_url(); ?>data_umum/images/apartments/flat-lg.png" alt="">
            </li>
            <li data-thumb="<?php echo site_url(); ?>data_umum/images/apartments/flat-thumb.png">
                <img src="<?php echo site_url(); ?>data_umum/images/apartments/flat-lg.png" alt="">
            </li>
        </ul>
    </div>
</div>
<div class="apartment__about">
    <div class="container">
        <div class="apartment__about-wrap">
            <ul class="apartment__about-accomodation">
                <li class="apartment__about-accomodation-item">Hall: 1</li>
                <li class="apartment__about-accomodation-item">Bedroom: 2</li>
                <li class="apartment__about-accomodation-item">Kitchen: 1</li>
                <li class="apartment__about-accomodation-item">Bathroom: 2</li>
                <li class="apartment__about-accomodation-item">Terrace: 0</li>
                <li class="apartment__about-accomodation-item">Furniture for sale: No</li>
            </ul>
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
                        <span>Amount beds: 1</span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-map-point-v2 apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Distance from <br> the sea: 150m</span>
                    </div>
                </li>
                <li class="apartment__about-amenity-item">
                    <span class="icon iconfont-wallet apartment__about-amenity-icon"></span>
                    <div class="apartment__about-amenity-info">
                        <span>Long-term rent: $399/mo</span>
                        <span>Communal tax: $49/mo</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="apartment__full-description">
    <div class="container">
        <p>
            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
        </p>
        <p>
            Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
        </p>
    </div>
</div>
<div id="apartment-map" class="apartment__map"></div>

<div class="container apartment__owner">
    <div class="apartment__owner-avatar-wrap">
        <img src="<?php echo site_url(); ?>data_umum/images/apartments/avatar.png" alt="" class="apartment__owner-avatar" width="170" height="170">
    </div>
    <div class="apartment__owner-info">
        <div class="apartment__owner-info-name">John</div>
        <div class="apartment__owner-info-location">Italy, Abruzzo, Teramo</div>

        <div class="apartment__owner-info-actions-wrap">
            <ul class="apartment__owner-info-actions list-unstyled">
                <li>
                    <a href="#">All listings</a> &ndash; 192
                </li>
                <li>
                    <a href="#">Send advertisement to e-mail</a>
                </li>
            </ul>
            <ul class="apartment__owner-info-actions list-unstyled">
                <li>
                    <a href="#">All listings</a>
                </li>
                <li>
                    <a href="#">Send advertisement to e-mail</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="apartment__owner-actions">
        <a href="#" class="btn btn-primary btn-lg">Request a call</a>
        <a href="#" class="btn btn-outline-primary btn-lg">Send a message</a>
    </div>
</div>
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


</body>
</html>
