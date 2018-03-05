<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>DirectoryHub - Multipurpose Directory &amp; Listings HTML Template</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="fonts/circular/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconfont/styles.css">
    <!-- END GLOBAL MANDATORY STYLES -->



<link rel="stylesheet" type="text/css" href="vendors/leaflet/leaflet.css">
<link rel="stylesheet" type="text/css" href="vendors/jscrollpane/jquery.jscrollpane.css">
<link rel="stylesheet" type="text/css" href="vendors/select2/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendors/nouislider/nouislider.min.css">


    <!-- BEGIN THEME STYLES -->
  <?php echo $this->load->view('umum/share/warna', '', TRUE);?>
    <!-- END THEME STYLES -->
</head>
<!-- BEGIN HEAD -->
<body class="">



<div class="header-default">
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
                    <a class="nav-link" href="#">Online Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.html">Sing In</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">English</a>
                    <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                        <a class="dropdown-item" href="#">Russian</a>
                        <a class="dropdown-item active" href="#">English</a>
                        <a class="dropdown-item" href="#">German</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="header-menu" class="header-default__menu">
        <div class="container">
            <nav class="navbar navbar-toggleable-lg">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#header-default-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Direct<span class="colored">o</span>ry</a>
                <div id="header-default-menu" class="collapse navbar-collapse">
                    <div class="header-default__menu-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Listings</a>
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <a class="dropdown-item" href="index.html">Job Listing</a>
                                    <a class="dropdown-item" href="listings-booking.html">Booking Listing</a>
                                    <a class="dropdown-item" href="listings-apartments-grid.html">Apartments Listing</a>
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
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <div class="dropdown-menu__columns">
                                        <div class="dropdown-menu__column">
                                            <a class="dropdown-item" href="jobs-browse-jobs.html">Job - Browse Jobs</a>
                                            <a class="dropdown-item" href="jobs-overview.html">Job - Overview</a>
                                            <a class="dropdown-item" href="jobs-post-job.html">Job - Post Job</a>
                                            <a class="dropdown-item" href="jobs-browse-resumes.html">Job - Browse Resumes</a>
                                            <a class="dropdown-item" href="jobs-candidate-resume.html">Job - Candidate Resume</a>
                                            <a class="dropdown-item" href="job-signup.html">Job - Sign Up</a>
                                            <a class="dropdown-item" href="master-orders-list.html">FindMaster - Orders List</a>
                                            <a class="dropdown-item" href="master-post-application.html">FindMaster - Post Application</a>
                                            <a class="dropdown-item" href="master-profile-information.html">FindMaster - Profile Information</a>
                                        </div>
                                        <div class="dropdown-menu__column">
                                            <a class="dropdown-item" href="master-profile-prices.html">FindMaster - Profile Prices</a>
                                            <a class="dropdown-item" href="master-profile-reviews.html">FindMaster - Profile Reviews</a>
                                            <a class="dropdown-item" href="master-profile-work-examples.html">FindMaster - Profile Work Examples</a>
                                            <a class="dropdown-item" href="master-service-offers.html">FindMaster -Service Offers</a>
                                            <a class="dropdown-item" href="apartments-apartment.html">Apartments - Apartment Overview</a>
                                            <a class="dropdown-item" href="houses-about-us.html">Houses - About Us</a>
                                            <a class="dropdown-item" href="houses-certificates.html">Houses - Certificates</a>
                                            <a class="dropdown-item" href="houses-how-we-build.html">Houses - How We Build</a>
                                            <a class="dropdown-item" href="contact.html">Contact</a>
                                        </div>
                                        <div class="dropdown-menu__column">
                                            <a class="dropdown-item" href="all-categories.html">All Categories</a>
                                            <a class="dropdown-item" href="uikit.html">UI Kit</a>
                                            <a class="dropdown-item" href="login.html">Log In</a>
                                            <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                            <a class="dropdown-item" href="reset-password-success.html">Reset Password Success</a>
                                            <a class="dropdown-item" href="500.html">500 Error</a>
                                            <a class="dropdown-item" href="404.html">404 Error</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Elements</a>
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <a class="dropdown-item" href="hero-booking-places.html">Hero - Booking Places</a>
                                    <a class="dropdown-item" href="hero-steps.html">Hero - Steps</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <a class="dropdown-item" href="blog.html">Main</a>
                                    <a class="dropdown-item" href="blog-post.html">Post Overview</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-default__dropdowns">
                            <div class="nav-item dropdown header-default__currency">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span>$</span>
                                </a>
                                <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                    <div class="header-default__currency-block">
                                        <h6 class="header-default__currency-heading">Major currencies</h6>

                                        <div class="header-default__currency-lists">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"><span>€ £ $</span> Hotels' currency</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>US $</span> US Dollar</a>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"><span>€</span> Euro</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>KZT</span> Kazakhstan Tenge</a>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"><span>RUR</span> Russian ruble</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="is-active"><span>£</span> Pound sterling</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="header-default__currency-block">
                                        <h6 class="header-default__currency-heading">All currencies</h6>

                                        <div class="header-default__currency-lists">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"><span>AUD</span> Australian Dollar</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>AZN</span> Azerbaijani manat</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>AR $</span> Argentine Peso</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>BHD</span> Bahraini Dinar</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>BGN</span> Bulgarian lev</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>R $</span> Brazilian Real</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>HUF</span> Hungarian Forint</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>HK $</span> Hong Kong Dollar</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>GEL</span> Georgian lari</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>DKK</span> Danish Krone</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>AED</span> UAE Dirham</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>US $</span> US Dollar</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>FJD</span> Fiji Dollar</a>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"><span>€</span> Euro</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>EGP</span> Egyptian Pound</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>#</span> Israeli Shekel</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>Rs</span> Indian Rupee</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>Rp</span> Indonesian Rupiah</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>JOD</span> Jordanian Dinar</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>KZT</span> Kazakhstan Tenge</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>CAD</span> The Canadian dollar</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>QAR</span> Qatari Rial</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>CNY</span> Chinese yuan</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>COP</span> Colombian Peso</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>KRW</span> Korean Won</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>KWD</span> Kuwaiti Dinar</a>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"><span>MYR</span> Malaysian Ringgit</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>MXN</span> Mexican Peso</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>MDL</span> Moldovan Leu</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>NAD</span> Namibian dollar</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>NZD</span> New Zealand Dollar</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>LEI</span> New Romanian leu lei</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>NOK</span> Norwegian Krone</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>OMR</span> Omani Rial</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>zł</span> Polish zloty</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>Rub.</span> Russian ruble</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>SAR</span> Saudi Riyal</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>S $</span> Singapore Dollar</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>TWD</span> Taiwan Dollar</a>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#"><span>THB</span> Thai Baht</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>TL</span> Turkish lira</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>UAH</span> Ukrainian hryvnia</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>XOF</span> CFA Franc BCEAO</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>£</span> Pound sterling</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>Kč</span> Czech Koruna</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>CL $</span> Chilean Peso</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>SEK</span> Swedish Krona</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>CHF</span> Swiss Franc</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>ZAR</span> South African Rand</a>
                                                </li>
                                                <li>
                                                    <a href="#"><span>¥</span> The Japanese yen</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="nav-item dropdown header-default__langs">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                <span><img src="images/flags/16/United-States.png" alt=""></span>
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="zoomIn" data-dropdown-out="zoomOut">
                                <div class="header-default__langs-block">
                                    <h6 class="header-default__langs-heading">Popular languages</h6>

                                    <div class="header-default__langs-lists">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt=""> Русский</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/United-Kingdom.png" alt=""> English (UK)</a>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#"><img src="images/flags/16/United-States.png" alt=""> English (US)</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/China.png" alt=""> 体中文</a>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#"><img src="images/flags/16/France.png" alt=""> Français</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Germany.png" alt=""> Deutsch</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-default__langs-block">
                                    <h6 class="header-default__langs-heading">All languages</h6>

                                    <div class="header-default__langs-lists">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#"><img src="images/flags/16/United-Kingdom.png" alt=""> English (UK)</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/United-States.png" alt=""> English (US)</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Germany.png" alt=""> Deutsch</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Netherlands.png" alt=""> Nederlands</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/France.png" alt=""> Français</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Spain.png" alt=""> Español</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt=""> Català</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Italy.png" alt=""> Italiano</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Portugal.png" alt=""> Português (PT)</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Brazil.png" alt=""> Português (BR)</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Norway.png" alt=""> Norsk</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Finland.png" alt=""> Suomi</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Sweden.png" alt=""> Svenska</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Denmark.png" alt=""> Dansk</a>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#"><img src="images/flags/16/Czech-Republic.png" alt=""> Čeština</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Hungary.png" alt=""> Magyar</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Romania.png" alt=""> Română</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Japan.png" alt=""> 日本語</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/China.png" alt=""> 简体中文</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt=""> 繁體中文</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Poland.png" alt=""> Polski</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Greece.png" alt=""> Ελληνικά</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt=""> Русский</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Turkey.png" alt=""> Türkçe</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Bulgaria.png" alt=""> Български</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt="">العربية </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt=""> 日本語</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt="">עברית </a>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#"><img src="images/flags/16/Latvia.png" alt=""> Latviski</a>
                                            </li>
                                            <li>
                                                <a href="#" class="is-active"><img src="images/flags/16/Ukraine.png" alt=""> Українська</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Indonesia.png" alt=""> Bahasa Indonesia</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Malaysia.png" alt=""> Bahasa Malaysia</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Thailand.png" alt=""> ภาษาไทย</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt=""> Eesti</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Croatia.png" alt=""> Hrvatski</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Lithuania.png" alt=""> Lietuvių</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Slovenia.png" alt=""> Slovenčina</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt=""> Srpski</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Vietnam.png" alt=""> Tiếng Việt</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Philippines.png" alt=""> Filipino</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="images/flags/16/Russia.png" alt=""> Íslenska</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="header-default__menu-links">
                            <a href="jobs-post-job.html" class="btn btn-outline-primary">
                                <span class="text">Add Listing</span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="listings-grid-map">
    <div class="row">
        <div class="col-lg-6 pr-0">
            <div class="listings-grid-map__listings-wrap">
                <div class="listings-grid-map__filter">
                    <div class="row">
                        <div class="col-xl-2">
                            <div class="form-group">
                                <label for="listings-grid-map-price-from">Price</label>
                                <input type="text" id="listings-grid-map-price-from" class="form-control" value="50000" placeholder="0">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="listings-grid-map__filter-price-range-slider range-slider-default-shadow range-slider-default-shadow-sm"></div>
                        </div>
                        <div class="col-xl-2">
                            <div class="form-group">
                                <label for="listings-grid-map-price-to">&nbsp;</label>
                                <input type="text" id="listings-grid-map-price-to" class="form-control" value="270000" placeholder="0">
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="listings-grid-map-condition">Condition</label>
                                <select id="listings-grid-map-condition" class="form-control selectable" data-selectable-no-search="true">
                                    <option value="" selected>sfasf</option>
                                    <option value="">sfasf</option>
                                    <option value="">sfasf</option>
                                    <option value="">sfasf</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="listings-grid-map-size">Size</label>
                                <select id="listings-grid-map-size" class="form-control selectable" data-selectable-no-search="true">
                                    <option value="" selected>200</option>
                                    <option value="">200</option>
                                    <option value="">200</option>
                                    <option value="">200</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="listings-grid-map-region">Region</label>
                                <select id="listings-grid-map-region" class="form-control selectable" data-selectable-no-search="true">
                                    <option value="" selected>City 1</option>
                                    <option value="">200</option>
                                    <option value="">200</option>
                                    <option value="">200</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="listings-grid-map-type">Type</label>
                                <select id="listings-grid-map-type" class="form-control selectable" data-selectable-no-search="true">
                                    <option value="" selected>Hotel</option>
                                    <option value="">200</option>
                                    <option value="">200</option>
                                    <option value="">200</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="listings-grid-map-district">District</label>
                                <select id="listings-grid-map-district" class="form-control selectable" data-selectable-no-search="true">
                                    <option value="" selected>Manhattan</option>
                                    <option value="">200</option>
                                    <option value="">200</option>
                                    <option value="">200</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <label>&nbsp;</label>
                            <button class="btn btn-primary btn-block listings-grid-map__filter-button">Search</button>
                        </div>
                    </div>
                </div>

                <div class="listings-grid-map__view-type">
                    <a href="listings-apartments-grid.html" class="is-active"><span class="icon iconfont-view-grid"></span></a>
                    <a href="listings-apartments-list.html"><span class="icon iconfont-view-list"></span></a>
                </div>

                <div class="row listings-grid-map__items">
                    <div class="col-xl-6 col-lg-12 col-md-6">
                        <div class="listings-grid-map__item">
                            <div class="listings-grid-map__item-image-block">
                                <img src="images/listings/1.png" alt="" class="listings-grid-map__item-image">
                                <span class="icon listings-grid-map__image-icon iconfont-heart-outline"></span>
                                <span class="listings-grid-map__item-price">From: $69,00</span>
                            </div>
                            <div class="listings-grid-map__item-info-block">
                                <div class="listings-grid-map__item-name-block">
                                    <a href="#" class="listings-grid-map__item-name">Russell Hotel</a>
                                    <span class="listings-grid-map__item-check-icon iconfont-check-v2-1"></span>
                                </div>
                                <div class="listings-grid-map__item-description">
                                    Luxury hotel in the heart of Bloomsbury
                                </div>
                                <div class="listings-grid-map__item-extras-block">
                                    <span class="listings-grid-map__item-extras-rating-amount">4,5</span>
                                    <span class="listings-grid-map__item-extras-address">Russell Square 8</span>

                                    <div class="listings-grid-map__item-extras-categories">
                                        <span class="icon iconfont-open-door"></span>
                                        <span class="icon iconfont-construction"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6">
                        <div class="listings-grid-map__item">
                            <div class="listings-grid-map__item-image-block">
                                <img src="images/listings/2.png" alt="" class="listings-grid-map__item-image">
                                <span class="icon listings-grid-map__image-icon iconfont-heart-outline"></span>
                            </div>
                            <div class="listings-grid-map__item-info-block">
                                <div class="listings-grid-map__item-name-block">
                                    <a href="#" class="listings-grid-map__item-name">Portobello Pizza</a>
                                </div>
                                <div class="listings-grid-map__item-description">
                                    Italian traditional served pizzeria
                                </div>
                                <div class="listings-grid-map__item-extras-block">
                                    <span class="listings-grid-map__item-extras-rating-amount">4,0</span>
                                    <span class="listings-grid-map__item-extras-address">Portobello Road 30</span>

                                    <div class="listings-grid-map__item-extras-categories">
                                        <span class="icon iconfont-food"></span>
                                        <span class="icon iconfont-pizza"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6">
                        <div class="listings-grid-map__item">
                            <div class="listings-grid-map__item-image-block">
                                <img src="images/listings/3.png" alt="" class="listings-grid-map__item-image">
                                <span class="icon listings-grid-map__image-icon iconfont-heart"></span>
                                <span class="listings-grid-map__item-price"><span class="listings-grid-map__item-old-price">$32,00</span> $16,00</span>
                            </div>
                            <div class="listings-grid-map__item-info-block">
                                <div class="listings-grid-map__item-name-block">
                                    <a href="#" class="listings-grid-map__item-name">Bar Boloud</a>
                                    <span class="listings-grid-map__item-check-icon iconfont-check-v2-1"></span>
                                </div>
                                <div class="listings-grid-map__item-description">
                                    French-inspired bistro and wone bar
                                </div>
                                <div class="listings-grid-map__item-extras-block">
                                    <span class="listings-grid-map__item-extras-rating-amount">4,0</span>
                                    <span class="listings-grid-map__item-extras-address">Russell Square 8</span>

                                    <div class="listings-grid-map__item-extras-categories">
                                        <span class="icon iconfont-vine"></span>
                                        <span class="icon iconfont-food-service"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6">
                        <div class="listings-grid-map__item">
                            <div class="listings-grid-map__item-image-block">
                                <img src="images/listings/1.png" alt="" class="listings-grid-map__item-image">
                                <span class="icon listings-grid-map__image-icon iconfont-heart-outline"></span>
                                <span class="listings-grid-map__item-price">From: $69,00</span>
                            </div>
                            <div class="listings-grid-map__item-info-block">
                                <div class="listings-grid-map__item-name-block">
                                    <a href="#" class="listings-grid-map__item-name">Russell Hotel</a>
                                    <span class="listings-grid-map__item-check-icon iconfont-check-v2-1"></span>
                                </div>
                                <div class="listings-grid-map__item-description">
                                    Luxury hotel in the heart of Bloomsbury
                                </div>
                                <div class="listings-grid-map__item-extras-block">
                                    <span class="listings-grid-map__item-extras-rating-amount">4,5</span>
                                    <span class="listings-grid-map__item-extras-address">Russell Square 8</span>

                                    <div class="listings-grid-map__item-extras-categories">
                                        <span class="icon iconfont-open-door"></span>
                                        <span class="icon iconfont-construction"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6">
                        <div class="listings-grid-map__item">
                            <div class="listings-grid-map__item-image-block">
                                <img src="images/listings/2.png" alt="" class="listings-grid-map__item-image">
                            </div>
                            <div class="listings-grid-map__item-info-block">
                                <div class="listings-grid-map__item-name-block">
                                    <a href="#" class="listings-grid-map__item-name">Portobello Pizza</a>
                                </div>
                                <div class="listings-grid-map__item-description">
                                    Italian traditional served pizzeria
                                </div>
                                <div class="listings-grid-map__item-extras-block">
                                    <span class="listings-grid-map__item-extras-rating-amount">4,0</span>
                                    <span class="listings-grid-map__item-extras-address">Portobello Road 30</span>

                                    <div class="listings-grid-map__item-extras-categories">
                                        <span class="icon iconfont-food"></span>
                                        <span class="icon iconfont-pizza"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6">
                        <div class="listings-grid-map__item">
                            <div class="listings-grid-map__item-image-block">
                                <img src="images/listings/3.png" alt="" class="listings-grid-map__item-image">
                                <span class="listings-grid-map__item-price"><span class="listings-grid-map__item-old-price">$32,00</span> $16,00</span>
                            </div>
                            <div class="listings-grid-map__item-info-block">
                                <div class="listings-grid-map__item-name-block">
                                    <a href="#" class="listings-grid-map__item-name">Bar Boloud</a>
                                    <span class="listings-grid-map__item-check-icon iconfont-check-v2-1"></span>
                                </div>
                                <div class="listings-grid-map__item-description">
                                    French-inspired bistro and wone bar
                                </div>
                                <div class="listings-grid-map__item-extras-block">
                                    <span class="listings-grid-map__item-extras-rating-amount">4,0</span>
                                    <span class="listings-grid-map__item-extras-address">Russell Square 8</span>

                                    <div class="listings-grid-map__item-extras-categories">
                                        <span class="icon iconfont-vine"></span>
                                        <span class="icon iconfont-food-service"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-browse-all">
                    <a href="#" class="btn btn-outline-gray">Show More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 pl-0">
            <div class="listings-grid-map__map-wrap">
                <div id="listings-grid-map-map" class="listings-grid-map__map"></div>
            </div>
        </div>
    </div>
</div>



<script src="vendors/jquery/jquery.min.js"></script>
<script src="vendors/tether/js/tether.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="js/dropdown.animate.js"></script>



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

<script src="vendors/leaflet/leaflet.js"></script>
<script src="vendors/jscrollpane/jquery.mousewheel.js"></script>
<script src="vendors/jscrollpane/jquery.jscrollpane.min.js"></script>
<script src="vendors/nouislider/nouislider.min.js"></script>
<script src="vendors/select2/js/select2.min.js"></script>
<script src="js/listings-apartments-grid.js"></script>


</body>
</html>
