<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Rumah Sakit</title>

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



<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/vendors/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>data_umum/css/vendors/select2/select2.min.css">

<style>
.parent {
    overflow: hidden;
    position: relative;
    width: 100%;
    height: 80px;
    font-family: "Open Sans";
    font-size: 15px;
}

</style>

    <!-- BEGIN THEME STYLES -->
    <?php echo $this->load->view('umum/share/warna', '', TRUE);?>
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">


<?php echo $this->load->view('umum/share/menu', '', TRUE);?>

<div class="hero-travel-trips">
    <div class="container">
        <h2 class="hero-travel-trips__heading">Cari Rumah Sakit</h2>
        <form action="#" class="hero-travel-trips__form">
            <div class="form-control-inline-icon inline-icon-left hero-travel-trips__search-input">
                <span class="icon iconfont-left iconfont-search-v2"></span>
                <input type="text" class="form-control" placeholder="Ex.Summer camp...">
            </div>

            <div class="hero-travel-trips__select">
                <div class="hero-travel-trips__select-heading">Type</div>
                <select class="form-control selectable" data-selectable-no-search="true">
                    <option value="" selected>All</option>
                    <option value="">All</option>
                    <option value="">sfasf</option>
                    <option value="">sfasf</option>
                </select>
            </div>

            <div class="hero-travel-trips__select">
                <div class="hero-travel-trips__select-heading">Period</div>
                <select class="form-control selectable" data-selectable-no-search="true">
                    <option value="" selected>Anytime</option>
                    <option value="">Anytime</option>
                    <option value="">sfasf</option>
                    <option value="">sfasf</option>
                </select>
            </div>

            <div class="hero-travel-trips__select">
                <div class="hero-travel-trips__select-heading">Price</div>
                <select class="form-control selectable" data-selectable-no-search="true">
                    <option value="" selected>Anyprice</option>
                    <option value="">sfasf</option>
                    <option value="">sfasf</option>
                    <option value="">sfasf</option>
                </select>
            </div>

            <button type="button" class="btn btn-primary hero-travel-trips__search-btn">Search</button>
        </form>
    </div>
</div>
<div class="listing-travel-trips">
    <div class="container">
        <div class="row">
          <?php
             $i=0;
             foreach($results as $Rs){
             $i++;
           ?>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                      <img src="<?php echo site_url();
                                if($Rs->gambar!=NULL){
                                    echo "gambar/";
                                    echo $Rs->kode_rs;
                                    echo "/";
                                    echo $Rs->gambar;
                                  }else{
                                    echo"gambar/rs.png";
                                  }
                                  ?>
                                " alt="" height="200px" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span><?php echo $Rs->nama_rs ?></span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">

                          <div class="listing-travel-trips__item-description">
                              <div class="parent">
                            <?php echo $Rs->alamat ?>
                              </div>
                          </div>

                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Kelas</span>
                                <span class="value"><?php echo $Rs->nama_kelas_rs ?></span>
                            </div>

                            <a href="<?php echo site_url(); ?>rumah_sakit/detail/<?php echo $Rs->kode_rs ?>" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
          }
             ?>
        </div>



        <nav class="listings-pagination listings-travel-trips-pagination d-flex justify-content-center">
            <ul class="pagination">
              <?php foreach ($links as $link) {
              echo "  <li class='page-item active'> ". $link." </li>";

              } ?>
            </ul>
        </nav>
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
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
