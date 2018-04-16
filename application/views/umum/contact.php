<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Kontak</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/fonts/iconfont/styles.css">
    <!-- END GLOBAL MANDATORY STYLES -->



<link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/leaflet/leaflet.css">


    <!-- BEGIN THEME STYLES -->
    <?php echo $this->load->view('umum/share/warna', '', TRUE);?>
    <!-- END THEME STYLES -->

</head>
<!-- BEGIN HEAD -->
<body class="">



<?php echo $this->load->view('umum/share/menu', '', TRUE);?>
<div id="page-contact-map" class="page-contact__map"></div>
<div class="container">
    <form class="page-contact__form">

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="form-group">
                    Email :
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    apkerrmap@gmail.com
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="form-group">
                    No HP :
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    082237653720
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="form-group">
                  Alamat :
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                  Jalan T. Hamzah Bendahara No.31, Desa Kuta Alam,Kecamatan Kuta ALam, BAnda Aceh
                </div>
            </div>
        </div>

    </form>
</div>
  <?php echo $this->load->view('umum/share/footer', '', TRUE);?>

<script src="<?php site_url(); ?>data_umum/vendors/jquery/jquery.min.js"></script>
<script src="<?php site_url(); ?>data_umum/vendors/tether/js/tether.min.js"></script>
<script src="<?php site_url(); ?>data_umum/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php site_url(); ?>data_umum/js/dropdown.animate.js"></script>



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

<script src="<?php site_url(); ?>data_umum/vendors/leaflet/leaflet.js"></script>
<script src="<?php site_url(); ?>data_umum/vendors/leaflet/leaflet-html-icon.js"></script>
<script src="<?php site_url(); ?>data_umum/http://maps.google.com/maps/api/js?v=3.3&sensor=false"></script>
<script src="<?php site_url(); ?>data_umum/http://matchingnotes.com/javascripts/leaflet-google.js"></script>
<script>
(function ($) {
    "use strict";

    $(document).ready(function () {
        var pageContactMap = L.map('page-contact-map').setView([5.5511826,95.3270089], 13);
        L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(pageContactMap);


        pageContactMap.scrollWheelZoom.disable();

        /*var contactIcon = L.icon({
            iconUrl: 'images/map/popup-point.png',
            iconSize: [370, 140]
        });*/

        var contactIcon = new L.HtmlIcon({
            html : '<div class="page-contact__map-point"><div class="page-contact__map-point-title">APKERRNAP</div><div> <span class="page-contact__map-point-rating"><img src="images/map/star.png" alt=""><img src="images/map/star.png" alt=""><img src="images/map/star.png" alt=""><img src="images/map/star.png" alt=""><img src="images/map/half-star.png" alt=""></span></div><div>Banda Aceh, Kuta ALam</div> <div>Buka 8.30:00</div></div>',
            iconSize: [370, 140]
        });

        var marker = L.marker([5.5511826,95.3270089], {icon: contactIcon}).addTo(pageContactMap).bindPopup("I am a green leaf.");

        marker.off('click');
    });
})(jQuery);
</script>


</body>
</html>
