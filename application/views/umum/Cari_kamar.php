<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>DirectoryHub - Multipurpose Directory &amp; Listings HTML Template</title>

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



<link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/vendors/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php site_url(); ?>data_umum/css/vendors/select2/select2.min.css">


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
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/01.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>Swimming with Dolphins</span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="<?php site_url(); ?>detail" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <div class="listing-travel-trips__item-users">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-1.png" alt="" width="34" height="34">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-2.png" alt="" width="34" height="34">
                        </div>
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/02.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>How Hypnosis Can Help You</span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="<?php site_url(); ?>detail" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <div class="listing-travel-trips__item-users">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-3.png" alt="" width="34" height="34">
                        </div>
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/03.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>
                                When you are Down and out How <br> do You Get Up and Go Forward
                            </span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/04.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>Why Las Vegas Hotel Rooms For You</span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <div class="listing-travel-trips__item-users">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-3.png" alt="" width="34" height="34">
                        </div>
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/05.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>Swimming with Dolphins</span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/06.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>How Hypnosis Can Help You</span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/07.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>
                                When you are Down and out How <br> do You Get Up and Go Forward
                            </span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <div class="listing-travel-trips__item-users">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-1.png" alt="" width="34" height="34">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-2.png" alt="" width="34" height="34">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-3.png" alt="" width="34" height="34">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-1.png" alt="" width="34" height="34">
                        </div>
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/08.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>Why Las Vegas Hotel Rooms For You</span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/09.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>Swimming with Dolphins</span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/10.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>How Hypnosis Can Help You</span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <div class="listing-travel-trips__item-users">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-1.png" alt="" width="34" height="34">
                            <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/avatar-2.png" alt="" width="34" height="34">
                        </div>
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/11.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>
                                When you are Down and out How <br> do You Get Up and Go Forward
                            </span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="listing-travel-trips__item">
                    <div class="listing-travel-trips__item-image">
                        <img src="<?php site_url(); ?>data_umum/images/listings/travel-trips/12.png" alt="" class="embed-responsive">
                        <div class="listing-travel-trips__item-title">
                            <span>Why Las Vegas Hotel Rooms For You</span>
                        </div>
                    </div>
                    <div class="listing-travel-trips__item-info">
                        <div class="listing-travel-trips__item-description">
                            It is possible to charter, rent or
                            lease an aircraft for less than ever
                            before and it has also become
                        </div>
                        <div class="listing-travel-trips__item-details">
                            <div class="listing-travel-trips__item-details-price">
                                <span class="heading">Price</span>
                                <span class="value">$450</span>
                            </div>
                            <div class="listing-travel-trips__item-details-duration">
                                <span class="heading">Duration</span>
                                <span class="value">5 nights</span>
                            </div>
                            <a href="#" class="btn btn-outline-default listing-travel-trips__item-details-view-link">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="listings-pagination listings-travel-trips-pagination d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">99</a></li>
            </ul>
        </nav>
    </div>
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

<script src="<?php site_url(); ?>data_umum/vendors/select2/js/select2.min.js"></script>
<script src="<?php site_url(); ?>data_umum/js/travel-trips.js"></script>


</body>
</html>
