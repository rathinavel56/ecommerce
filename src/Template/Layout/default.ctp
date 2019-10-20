<?php
use Cake\Routing\Router; 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
?>
<!doctype html>
<html dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo !isset($title_for_layout) ? '' : $title_for_layout ; ?></title>
<meta name="description" content="<?php echo empty($description) ? '' : $description ; ?>" />
<meta name="keywords" content="<?php echo empty($keywords) ? '' : $keywords ; ?>" />
<meta property="og:title" content="<?php echo !isset($title_for_layout) ? '' : $title_for_layout ; ?>">
<meta property="og:description" content="<?php echo !isset($description) ? '' : $description ; ?>">
<meta property="og:url" content="<?php //echo Router::url( $this->here, true ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php //echo $this->fetch('css'); ?>
<?php //echo $this->fetch('script'); ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://htmlstream.com/preview/unify-v2.6.2/favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/vendor/icon-line-pro/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/vendor/chosen/chosen.css">
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/vendor/master-slider/source/assets/css/masterslider.main.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/css/styles.op-real-estate.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/css/custom.css">
</head>
<body>
<main class="g-pt-110 g-pt-120--md g-pt-170--lg">
<?= $this->Flash->render(); ?>
<?php //echo $this->Html->getCrumbs('&nbsp;/&nbsp;', '', ['class' => 'breadcr1umb']); ?>
      <!-- Header -->
      <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
              data-header-fix-moment="200"
              data-header-fix-effect="slide">
        <div class="text-center text-lg-left u-header__section u-header__section--hidden u-header__section--light g-bg-white g-brd-bottom g-brd-gray-light-v4 g-py-20">
          <div class="container">
            <div class="row flex-lg-row align-items-center justify-content-lg-start">
              <div class="col-6 col-sm-3 col-lg-2">
                <!-- Logo -->
                <a href="#" class="js-go-to navbar-brand"
                   data-type="static">
                  <img class="img-fluid g-width-150" src="<?php echo $actual_link;?>assets/img/logo.png" alt="Logo">
                </a>
                <!-- End Logo -->
              </div>

              <div class="col-6 col-sm-9 col-lg-10">
                <div class="row">
                  <div class="col-sm g-brd-right--md g-brd-gray-light-v4">
                    <div class="text-right text-sm-left g-pa-10--lg">
                      <span class="icon icon-screen-smartphone g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
                      <span class="text-uppercase g-font-size-13">Call Us</span>
                      <strong class="d-block g-pl-25">+469 548 521</strong>
                    </div>
                  </div>

                  <div class="col-sm g-hidden-lg-down g-brd-right--sm g-brd-gray-light-v4">
                    <div class="g-pa-10--lg">
                      <span class="icon icon-clock g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
                      <span class="text-uppercase g-font-size-13">Opening time</span>
                      <strong class="d-block g-pl-25">Mon-Sat: 08.00 - 18.00</strong>
                    </div>
                  </div>

                  <div class="col-sm g-hidden-sm-down g-brd-right--sm g-brd-gray-light-v4">
                    <div class="g-pa-10--lg">
                      <span class="icon icon-envelope g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
                      <span class="text-uppercase g-font-size-13">Email us</span>
                      <strong class="d-block g-pl-25">market@info.com</strong>
                    </div>
                  </div>

                  <div class="col-sm g-hidden-sm-down">
                    <ul class="list-inline mb-0 g-pa-10--lg">
                      <li class="list-inline-item g-valign-middle g-mx-3">
                        <a class="d-block u-icon-v3 u-icon-size--sm g-rounded-50x g-bg-gray-light-v4 g-color-gray-light-v1 g-bg-primary--hover g-color-white--hover" href="#"><i class="fa fa-facebook g-font-size-default"></i></a>
                      </li>
                      <li class="list-inline-item g-valign-middle g-mx-3">
                        <a class="d-block u-icon-v3 u-icon-size--sm g-rounded-50x g-bg-gray-light-v4 g-color-gray-light-v1 g-bg-primary--hover g-color-white--hover" href="#"><i class="fa fa-twitter g-font-size-default"></i></a>
                      </li>
                      <li class="list-inline-item g-valign-middle g-mx-3">
                        <a class="d-block u-icon-v3 u-icon-size--sm g-rounded-50x g-bg-gray-light-v4 g-color-gray-light-v1 g-bg-primary--hover g-color-white--hover" href="#"><i class="fa fa-instagram g-font-size-default"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="u-header__section u-header__section--dark g-bg-primary g-py-16"
             data-header-fix-moment-classes="u-shadow-v18">
          <nav class="navbar navbar-expand-lg py-0">
            <div class="container">
              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row g-mr-40--sm" id="navBar" data-mobile-scroll-hide="true">
                <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-700 g-font-size-13 g-py-10--md mr-auto marginauto">
                  <li class="nav-item g-mr-15--lg g-mb-7 g-mb-0--lg active">
                    <a href="#home" class="nav-link g-color-primary--hover p-0">Home
                      <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item g-mx-10--lg g-mx-15--xl g-mb-7 g-mb-0--lg">
                    <a href="#gallery" class="nav-link g-color-primary--hover p-0">Gallery</a>
                  </li>
                  <li class="nav-item g-mx-10--lg g-mx-15--xl g-mb-7 g-mb-0--lg">
                    <a href="#agents" class="nav-link g-color-primary--hover p-0">Agents</a>
                  </li>
                  <li class="nav-item g-ml-10--lg g-ml-15--xl">
                    <a href="#contact" class="nav-link g-color-primary--hover p-0">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-minus-8 g-right-20" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->

      <!-- Section Content -->
      <section id="home">
        <div class="master-slider ms-promo-2" id="promoSlider">
          <div class="ms-slide">
            <img src="<?php echo $actual_link;?>assets/img/blank.gif" alt="Image description"
                 data-src="<?php echo $actual_link;?>assets/img-temp/1920x1280/img1.jpg">

            <div class="ms-layer text-center g-absolute-centered g-max-width-550"
                 data-origin="ml"
                 data-type="text"
                 data-effect="fade()"
                 data-ease="easeOutExpo"
                 data-duration="2200">
              <h3 class="h6 text-uppercase g-font-weight-700 g-font-size-32--md g-color-white g-mb-10 g-mb-25--md">$3.500
                <small class="g-font-size-12 g-valign-middle">/ per month</small>
              </h3>
              <h2 class="text-uppercase g-line-height-1_2 g-font-weight-700 g-font-size-20 g-font-size-46--md g-color-white mb-0 g-mb-35--md">Apartment in
                <br> London's center</h2>
              <a class="btn btn-lg g-hidden-md-down text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-py-15 g-px-40" href="#">Learn more</a>
            </div>

            <img class="ms-thumb" src="<?php echo $actual_link;?>assets/img-temp/200x150/img1.jpg" alt="Image description">
          </div>

          <div class="ms-slide">
            <img src="<?php echo $actual_link;?>assets/img/blank.gif" alt="Image description"
                 data-src="<?php echo $actual_link;?>assets/img-temp/1920x1280/img2.jpg">

            <div class="ms-layer text-center g-absolute-centered g-max-width-550"
                 data-origin="ml"
                 data-type="text"
                 data-effect="fade()"
                 data-ease="easeOutExpo"
                 data-duration="2200">
              <h3 class="h6 text-uppercase g-font-weight-700 g-font-size-32--md g-color-white g-mb-10 g-mb-25--md">$3.500
                <small class="g-font-size-12 g-valign-middle">/ per month</small>
              </h3>
              <h2 class="text-uppercase g-line-height-1_2 g-font-weight-700 g-font-size-20 g-font-size-46--md g-color-white mb-0 g-mb-35--md">Apartment in
                <br> London's center</h2>
              <a class="btn btn-lg g-hidden-md-down text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-py-15 g-px-40" href="#">Learn more</a>
            </div>

            <img class="ms-thumb" src="<?php echo $actual_link;?>assets/img-temp/200x150/img2.jpg" alt="Image description">
          </div>

          <div class="ms-slide">
            <img src="<?php echo $actual_link;?>assets/img/blank.gif" alt="Image description"
                 data-src="<?php echo $actual_link;?>assets/img-temp/1920x1280/img3.jpg">

            <div class="ms-layer text-center g-absolute-centered g-max-width-550"
                 data-origin="ml"
                 data-type="text"
                 data-effect="fade()"
                 data-ease="easeOutExpo"
                 data-duration="2200">
              <h3 class="h6 text-uppercase g-font-weight-700 g-font-size-32--md g-color-white g-mb-10 g-mb-25--md">$3.500
                <small class="g-font-size-12 g-valign-middle">/ per month</small>
              </h3>
              <h2 class="text-uppercase g-line-height-1_2 g-font-weight-700 g-font-size-20 g-font-size-46--md g-color-white mb-0 g-mb-35--md">Apartment in
                <br> London's center</h2>
              <a class="btn btn-lg g-hidden-md-down text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-py-15 g-px-40" href="#">Learn more</a>
            </div>

            <img class="ms-thumb" src="<?php echo $actual_link;?>assets/img-temp/200x150/img3.jpg" alt="Image description">
          </div>

          <div class="ms-slide">
            <img src="<?php echo $actual_link;?>assets/img/blank.gif" alt="Image description"
                 data-src="<?php echo $actual_link;?>assets/img-temp/1920x1280/img4.jpg">

            <div class="ms-layer text-center g-absolute-centered g-max-width-550"
                 data-origin="ml"
                 data-type="text"
                 data-effect="fade()"
                 data-ease="easeOutExpo"
                 data-duration="2200">
              <h3 class="h6 text-uppercase g-font-weight-700 g-font-size-32--md g-color-white g-mb-10 g-mb-25--md">$3.500
                <small class="g-font-size-12 g-valign-middle">/ per month</small>
              </h3>
              <h2 class="text-uppercase g-line-height-1_2 g-font-weight-700 g-font-size-20 g-font-size-46--md g-color-white mb-0 g-mb-35--md">Apartment in
                <br> London's center</h2>
              <a class="btn btn-lg g-hidden-md-down text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-py-15 g-px-40" href="#">Learn more</a>
            </div>

            <img class="ms-thumb" src="<?php echo $actual_link;?>assets/img-temp/200x150/img4.jpg" alt="Image description">
          </div>

          <div class="ms-slide">
            <img src="<?php echo $actual_link;?>assets/img/blank.gif" alt="Image description"
                 data-src="<?php echo $actual_link;?>assets/img-temp/1920x1280/img5.jpg">

            <div class="ms-layer text-center g-absolute-centered g-max-width-550"
                 data-origin="ml"
                 data-type="text"
                 data-effect="fade()"
                 data-ease="easeOutExpo"
                 data-duration="2200">
              <h3 class="h6 text-uppercase g-font-weight-700 g-font-size-32--md g-color-white g-mb-10 g-mb-25--md">$3.500
                <small class="g-font-size-12 g-valign-middle">/ per month</small>
              </h3>
              <h2 class="text-uppercase g-line-height-1_2 g-font-weight-700 g-font-size-20 g-font-size-46--md g-color-white mb-0 g-mb-35--md">Apartment in
                <br> London's center</h2>
              <a class="btn btn-lg g-hidden-md-down text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-py-15 g-px-40" href="#">Learn more</a>
            </div>

            <img class="ms-thumb" src="<?php echo $actual_link;?>assets/img-temp/200x150/img5.jpg" alt="Image description">
          </div>
        </div>
      </section>
      <!-- End Section Content -->
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="specialOffers">
        <div class="container">
          <div class="u-heading-v2-2--top g-brd-primary g-mb-20">
            <h2 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-700 g-font-size-26 g-mb-60">Special offer</h2>
          </div>

          <div class="js-carousel"
               data-infinite="true"
               data-arrows-classes="u-arrow-v1 g-pos-abs g-right-0 g-bottom-100x g-width-35 g-width-45--md g-height-35 g-height-45--md g-font-size-18 g-color-gray-light-v1 g-color-white--hover g-bg-primary--hover g-brd-around g-brd-gray-light-v1 g-brd-primary--hover g-rounded-50x g-mb-65 g-transition-0_2 g-transition--ease-in"
               data-arrow-left-classes="fa fa-angle-left g-mr-40 g-mr-60--md"
               data-arrow-right-classes="fa fa-angle-right">
            <div class="js-slide">
              <!-- Article -->
              <article class="row g-bg-secondary mx-0">
                <div class="col-md-6 col-lg-7 g-bg-size-cover g-min-height-250"
                     data-bg-img-src="<?php echo $actual_link;?>assets/img-temp/800x460/img1.jpg"></div>

                <div class="col-md-6 col-lg-5 g-pa-30">
                  <!-- Article Header -->
                  <header>
                    <h4 class="text-uppercase g-font-size-12 g-color-white-opacity-0_3 g-mb-20">
                      <i class="icon-hotel-restaurant-235 align-middle g-font-size-18 g-mr-7"></i> Muffinski's, 5 King St, London WC2E 8HN
                    </h4>
                  </header>
                  <!-- End Article Header -->

                  <!-- Article Title -->
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
                    <a class="g-color-white" href="#">Ut pulvinar tellus sed elit luctus</a>
                  </h3>
                  <!-- End Article Title -->
                  <p class="g-color-white-opacity-0_3 g-mb-25">Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi lobortis.</p>

                  <!-- Article Icons -->
                  <div class="g-overflow-hidden g-mb-15">
                    <ul class="list-inline text-center g-font-size-12 g-brd-top g-brd-bottom g-brd-white-opacity-0_1 g-mx-minus-25">
                      <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-022 align-middle u-line-icon-pro g-font-size-18 g-color-white g-mr-5"></i> 4
                      </li>
                      <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-brd-left g-brd-white-opacity-0_1 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-158 align-middle u-line-icon-pro g-font-size-18 g-color-white g-mr-5"></i> 2
                      </li>
                      <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-brd-left g-brd-white-opacity-0_1 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-real-estate-017 align-middle u-line-icon-pro g-font-size-18 g-color-white g-mr-5"></i> 130 sqft
                      </li>
                    </ul>
                  </div>
                  <!-- End Article Icons -->

                  <!-- Article Footer -->
                  <footer class="d-flex justify-content-between">
                    <div class="align-self-center">
                      <div class="g-font-weight-700 g-font-size-16">
                        <s class="g-color-white-opacity-0_3 g-mr-15">$1.750.000</s>
                        <span class="g-color-primary">$1.500.000</span>
                      </div>
                    </div>

                    <div class="align-self-center">
                      <a class="btn btn-lg text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-color-white-opacity-0_7 g-py-12 g-py-15--md g-px-20 g-px-40--md" href="#">Learn More</a>
                    </div>
                  </footer>
                  <!-- End Article Footer -->
                </div>
              </article>
              <!-- End Article -->
            </div>

            <div class="js-slide">
              <!-- Article -->
              <article class="row g-bg-secondary mx-0">
                <div class="col-md-6 col-lg-7 g-bg-size-cover g-min-height-250"
                     data-bg-img-src="<?php echo $actual_link;?>assets/img-temp/800x460/img2.jpg"></div>

                <div class="col-md-6 col-lg-5 g-pa-30">
                  <!-- Article Header -->
                  <header>
                    <h4 class="text-uppercase g-font-size-12 g-color-white-opacity-0_3 g-mb-20">
                      <i class="icon-hotel-restaurant-235 align-middle g-font-size-18 g-mr-7"></i> Muffinski's, 5 King St, London WC2E 8HN
                    </h4>
                  </header>
                  <!-- End Article Header -->

                  <!-- Article Title -->
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
                    <a class="g-color-white" href="#">Ut pulvinar tellus sed elit luctus</a>
                  </h3>
                  <!-- End Article Title -->
                  <p class="g-color-white-opacity-0_3 g-mb-25">Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi lobortis.</p>

                  <!-- Article Icons -->
                  <div class="g-overflow-hidden g-mb-15">
                    <ul class="list-inline text-center g-font-size-12 g-brd-top g-brd-bottom g-brd-white-opacity-0_1 g-mx-minus-25">
                      <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-022 align-middle u-line-icon-pro g-font-size-18 g-color-white g-mr-5"></i> 4
                      </li>
                      <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-brd-left g-brd-white-opacity-0_1 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-158 align-middle u-line-icon-pro g-font-size-18 g-color-white g-mr-5"></i> 2
                      </li>
                      <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-brd-left g-brd-white-opacity-0_1 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-real-estate-017 align-middle u-line-icon-pro g-font-size-18 g-color-white g-mr-5"></i> 130 sqft
                      </li>
                    </ul>
                  </div>
                  <!-- End Article Icons -->

                  <!-- Article Footer -->
                  <footer class="d-flex justify-content-between">
                    <div class="align-self-center">
                      <div class="g-font-weight-700 g-font-size-16">
                        <s class="g-color-white-opacity-0_3 g-mr-15">$1.750.000</s>
                        <span class="g-color-primary">$1.500.000</span>
                      </div>
                    </div>

                    <div class="align-self-center">
                      <a class="btn btn-lg text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-color-white-opacity-0_7 g-py-12 g-py-15--md g-px-20 g-px-40--md" href="#">Learn More</a>
                    </div>
                  </footer>
                  <!-- End Article Footer -->
                </div>
              </article>
              <!-- End Article -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="ourHouses" class="g-py-80">
        <div class="container text-center g-max-width-770 g-mb-60">
          <div class="u-heading-v2-2--top g-brd-primary g-mb-20">
            <h2 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-700 g-font-size-26 mb-0">Our Products</h2>
          </div>

          <p class="g-color-gray-dark-v5 mb-0">Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi facilisis lobortis. Praesent malesuada facilisis maximus.</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4 g-mb-30">
              <!-- Article -->
              <article class="g-pos-rel">
                <!-- Article Image -->
                <img class="w-100 d-block g-rounded-top-5" src="<?php echo $actual_link;?>assets/img-temp/800x541/img1.jpg" alt="Image description">
                <!-- End Article Image -->

                <div class="u-ribbon u-ribbon--left u-ribbon-v1 rounded text-uppercase g-top-20 g-left-20 g-font-weight-700 g-font-size-9 g-color-white g-bg-green g-py-3 g-px-7">For rent</div>

                <!-- Article Content -->
                <div class="g-brd-around g-brd-top-none g-brd-gray-light-v3 g-rounded-bottom-5 g-pa-30">
                  <!-- Article Header -->
                  <header>
                    <h4 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-mb-15">
                      <i class="icon-hotel-restaurant-235 align-middle g-font-size-18 g-mr-7"></i> Muffinski's, 5 King St, London WC2E 8HN
                    </h4>
                  </header>
                  <!-- End Article Header -->

                  <!-- Article Title -->
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
                    <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="#">Ut pulvinar tellus sed elit luctus</a>
                  </h3>
                  <!-- End Article Title -->
                  <p class="g-color-gray-dark-v5 g-mb-25">Fusce dolor lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi lobortis.</p>

                  <!-- Article Icons -->
                  <div class="g-overflow-hidden g-mb-15">
                    <ul class="list-inline text-center g-font-size-12 g-color-gray-dark-v5 g-brd-top g-brd-bottom g-brd-gray-light-v3 g-mx-minus-25">
                      <li class="list-inline-item g-width-30x g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-022 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 4
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-158 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 2
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-real-estate-017 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 130 sqft
                      </li>
                    </ul>
                  </div>
                  <!-- End Article Icons -->

                  <!-- Article Footer -->
                  <footer class="d-flex justify-content-between align-items-center w-100 text-uppercase">
                    <div class="align-middle">
                      <div class="js-rating d-block d-md-inline-block g-color-primary g-font-size-12 g-mr-5"
                           data-rating="3.5"></div>
                      <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover g-font-size-10" href="#">12 Reviews</a>
                    </div>

                    <div class="align-middle g-font-size-18 g-font-weight-700 text-right g-letter-spacing-1">
                      $3.500
                      <em class="g-font-style-normal g-font-weight-300 g-font-size-10">/ per month</em>
                    </div>
                  </footer>
                  <!-- End Article Footer -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="col-md-6 col-lg-4 g-mb-30">
              <!-- Article -->
              <article class="g-pos-rel">
                <!-- Article Image -->
                <img class="w-100 d-block g-rounded-top-5" src="<?php echo $actual_link;?>assets/img-temp/800x541/img2.jpg" alt="Image description">
                <!-- End Article Image -->

                <div class="u-ribbon u-ribbon--left u-ribbon-v1 rounded text-uppercase g-top-20 g-left-20 g-font-weight-700 g-font-size-9 g-color-white g-bg-primary g-py-3 g-px-7">For sale</div>

                <!-- Article Content -->
                <div class="g-brd-around g-brd-top-none g-brd-gray-light-v3 g-rounded-bottom-5 g-pa-30">
                  <!-- Article Header -->
                  <header>
                    <h4 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-mb-15">
                      <i class="icon-hotel-restaurant-235 align-middle g-font-size-18 g-mr-7"></i> Muffinski's, 5 King St, London WC2E 8HN
                    </h4>
                  </header>
                  <!-- End Article Header -->

                  <!-- Article Title -->
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
                    <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="#">Ut pulvinar tellus sed elit luctus</a>
                  </h3>
                  <!-- End Article Title -->
                  <p class="g-color-gray-dark-v5 g-mb-25">Fusce dolor lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi lobortis.</p>

                  <!-- Article Icons -->
                  <div class="g-overflow-hidden g-mb-15">
                    <ul class="list-inline text-center g-font-size-12 g-color-gray-dark-v5 g-brd-top g-brd-bottom g-brd-gray-light-v3 g-mx-minus-25">
                      <li class="list-inline-item g-width-30x g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-022 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 4
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-158 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 2
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-real-estate-017 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 130 sqft
                      </li>
                    </ul>
                  </div>
                  <!-- End Article Icons -->

                  <!-- Article Footer -->
                  <footer class="d-flex justify-content-between align-items-center w-100 text-uppercase">
                    <div class="align-middle">
                      <div class="js-rating d-block d-md-inline-block g-color-primary g-font-size-12 g-mr-5"
                           data-rating="3.5"></div>
                      <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover g-font-size-10" href="#">12 Reviews</a>
                    </div>

                    <div class="align-middle g-font-size-18 g-font-weight-700 text-right g-letter-spacing-1">$2.500.000</div>
                  </footer>
                  <!-- End Article Footer -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="col-md-6 col-lg-4 g-mb-30">
              <!-- Article -->
              <article class="g-pos-rel">
                <!-- Article Image -->
                <img class="w-100 d-block g-rounded-top-5" src="<?php echo $actual_link;?>assets/img-temp/800x541/img3.jpg" alt="Image description">
                <!-- End Article Image -->

                <div class="u-ribbon u-ribbon--left u-ribbon-v1 rounded text-uppercase g-top-20 g-left-20 g-font-weight-700 g-font-size-9 g-color-white g-bg-green g-py-3 g-px-7">For rent</div>

                <!-- Article Content -->
                <div class="g-brd-around g-brd-top-none g-brd-gray-light-v3 g-rounded-bottom-5 g-pa-30">
                  <!-- Article Header -->
                  <header>
                    <h4 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-mb-15">
                      <i class="icon-hotel-restaurant-235 align-middle g-font-size-18 g-mr-7"></i> Muffinski's, 5 King St, London WC2E 8HN
                    </h4>
                  </header>
                  <!-- End Article Header -->

                  <!-- Article Title -->
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
                    <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="#">Ut pulvinar tellus sed elit luctus</a>
                  </h3>
                  <!-- End Article Title -->
                  <p class="g-color-gray-dark-v5 g-mb-25">Fusce dolor lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi lobortis.</p>

                  <!-- Article Icons -->
                  <div class="g-overflow-hidden g-mb-15">
                    <ul class="list-inline text-center g-font-size-12 g-color-gray-dark-v5 g-brd-top g-brd-bottom g-brd-gray-light-v3 g-mx-minus-25">
                      <li class="list-inline-item g-width-30x g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-022 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 4
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-158 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 2
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-real-estate-017 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 130 sqft
                      </li>
                    </ul>
                  </div>
                  <!-- End Article Icons -->

                  <!-- Article Footer -->
                  <footer class="d-flex justify-content-between align-items-center w-100 text-uppercase">
                    <div class="align-middle">
                      <div class="js-rating d-block d-md-inline-block g-color-primary g-font-size-12 g-mr-5"
                           data-rating="3.5"></div>
                      <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover g-font-size-10" href="#">12 Reviews</a>
                    </div>

                    <div class="align-middle g-font-size-18 g-font-weight-700 text-right g-letter-spacing-1">
                      $3.500
                      <em class="g-font-style-normal g-font-weight-300 g-font-size-10">/ per month</em>
                    </div>
                  </footer>
                  <!-- End Article Footer -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="col-md-6 col-lg-4 g-mb-30">
              <!-- Article -->
              <article class="g-pos-rel">
                <!-- Article Image -->
                <img class="w-100 d-block g-rounded-top-5" src="<?php echo $actual_link;?>assets/img-temp/800x541/img4.jpg" alt="Image description">
                <!-- End Article Image -->

                <div class="u-ribbon u-ribbon--left u-ribbon-v1 rounded text-uppercase g-top-20 g-left-20 g-font-weight-700 g-font-size-9 g-color-white g-bg-green g-py-3 g-px-7">For rent</div>

                <!-- Article Content -->
                <div class="g-brd-around g-brd-top-none g-brd-gray-light-v3 g-rounded-bottom-5 g-pa-30">
                  <!-- Article Header -->
                  <header>
                    <h4 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-mb-15">
                      <i class="icon-hotel-restaurant-235 align-middle g-font-size-18 g-mr-7"></i> Muffinski's, 5 King St, London WC2E 8HN
                    </h4>
                  </header>
                  <!-- End Article Header -->

                  <!-- Article Title -->
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
                    <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="#">Ut pulvinar tellus sed elit luctus</a>
                  </h3>
                  <!-- End Article Title -->
                  <p class="g-color-gray-dark-v5 g-mb-25">Fusce dolor lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi lobortis.</p>

                  <!-- Article Icons -->
                  <div class="g-overflow-hidden g-mb-15">
                    <ul class="list-inline text-center g-font-size-12 g-color-gray-dark-v5 g-brd-top g-brd-bottom g-brd-gray-light-v3 g-mx-minus-25">
                      <li class="list-inline-item g-width-30x g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-022 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 4
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-158 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 2
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-real-estate-017 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 130 sqft
                      </li>
                    </ul>
                  </div>
                  <!-- End Article Icons -->

                  <!-- Article Footer -->
                  <footer class="d-flex justify-content-between align-items-center w-100 text-uppercase">
                    <div class="align-middle">
                      <div class="js-rating d-block d-md-inline-block g-color-primary g-font-size-12 g-mr-5"
                           data-rating="3.5"></div>
                      <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover g-font-size-10" href="#">12 Reviews</a>
                    </div>

                    <div class="align-middle g-font-size-18 g-font-weight-700 text-right g-letter-spacing-1">
                      $3.500
                      <em class="g-font-style-normal g-font-weight-300 g-font-size-10">/ per month</em>
                    </div>
                  </footer>
                  <!-- End Article Footer -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="col-md-6 col-lg-4 g-mb-30">
              <!-- Article -->
              <article class="g-pos-rel">
                <!-- Article Image -->
                <img class="w-100 d-block g-rounded-top-5" src="<?php echo $actual_link;?>assets/img-temp/800x541/img5.jpg" alt="Image description">
                <!-- End Article Image -->

                <div class="u-ribbon u-ribbon--left u-ribbon-v1 rounded text-uppercase g-top-20 g-left-20 g-font-weight-700 g-font-size-9 g-color-white g-bg-primary g-py-3 g-px-7">For sale</div>

                <!-- Article Content -->
                <div class="g-brd-around g-brd-top-none g-brd-gray-light-v3 g-rounded-bottom-5 g-pa-30">
                  <!-- Article Header -->
                  <header>
                    <h4 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-mb-15">
                      <i class="icon-hotel-restaurant-235 align-middle g-font-size-18 g-mr-7"></i> Muffinski's, 5 King St, London WC2E 8HN
                    </h4>
                  </header>
                  <!-- End Article Header -->

                  <!-- Article Title -->
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
                    <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="#">Ut pulvinar tellus sed elit luctus</a>
                  </h3>
                  <!-- End Article Title -->
                  <p class="g-color-gray-dark-v5 g-mb-25">Fusce dolor libero, efficitur et lobortis at. Proin fermentum turpis eget nisi lobortis.</p>

                  <!-- Article Icons -->
                  <div class="g-overflow-hidden g-mb-15">
                    <ul class="list-inline text-center g-font-size-12 g-color-gray-dark-v5 g-brd-top g-brd-bottom g-brd-gray-light-v3 g-mx-minus-25">
                      <li class="list-inline-item g-width-30x g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-022 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 4
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-158 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 2
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-real-estate-017 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 130 sqft
                      </li>
                    </ul>
                  </div>
                  <!-- End Article Icons -->

                  <!-- Article Footer -->
                  <footer class="d-flex justify-content-between align-items-center w-100 text-uppercase">
                    <div class="align-middle">
                      <div class="js-rating d-block d-md-inline-block g-color-primary g-font-size-12 g-mr-5"
                           data-rating="3.5"></div>
                      <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover g-font-size-10" href="#">12 Reviews</a>
                    </div>

                    <div class="align-middle g-font-size-18 g-font-weight-700 text-right g-letter-spacing-1">$2.500.000</div>
                  </footer>
                  <!-- End Article Footer -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>

            <div class="col-md-6 col-lg-4">
              <!-- Article -->
              <article class="g-pos-rel">
                <!-- Article Image -->
                <img class="w-100 d-block g-rounded-top-5" src="<?php echo $actual_link;?>assets/img-temp/800x541/img6.jpg" alt="Image description">
                <!-- End Article Image -->

                <div class="u-ribbon u-ribbon--left u-ribbon-v1 rounded text-uppercase g-top-20 g-left-20 g-font-weight-700 g-font-size-9 g-color-white g-bg-green g-py-3 g-px-7">For rent</div>

                <!-- Article Content -->
                <div class="g-brd-around g-brd-top-none g-brd-gray-light-v3 g-rounded-bottom-5 g-pa-30">
                  <!-- Article Header -->
                  <header>
                    <h4 class="text-uppercase g-font-size-12 g-color-gray-dark-v5 g-mb-15">
                      <i class="icon-hotel-restaurant-235 align-middle g-font-size-18 g-mr-7"></i> Muffinski's, 5 King St, London WC2E 8HN
                    </h4>
                  </header>
                  <!-- End Article Header -->

                  <!-- Article Title -->
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
                    <a class="g-color-main g-color-primary--hover g-text-underline--none--hover" href="#">Ut pulvinar tellus sed elit luctus</a>
                  </h3>
                  <!-- End Article Title -->
                  <p class="g-color-gray-dark-v5 g-mb-25">Fusce dolor lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi lobortis.</p>

                  <!-- Article Icons -->
                  <div class="g-overflow-hidden g-mb-15">
                    <ul class="list-inline text-center g-font-size-12 g-color-gray-dark-v5 g-brd-top g-brd-bottom g-brd-gray-light-v3 g-mx-minus-25">
                      <li class="list-inline-item g-width-30x g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-022 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 4
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-hotel-restaurant-158 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 2
                      </li>
                      <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
                        <i class="icon-real-estate-017 align-middle u-line-icon-pro g-font-size-18 g-mr-5"></i> 130 sqft
                      </li>
                    </ul>
                  </div>
                  <!-- End Article Icons -->

                  <!-- Article Footer -->
                  <footer class="d-flex justify-content-between align-items-center w-100 text-uppercase">
                    <div class="align-middle">
                      <div class="js-rating d-block d-md-inline-block g-color-primary g-font-size-12 g-mr-5"
                           data-rating="3.5"></div>
                      <a class="g-color-gray-dark-v5 g-color-primary--hover g-text-underline--none--hover g-font-size-10" href="#">12 Reviews</a>
                    </div>

                    <div class="align-middle g-font-size-18 g-font-weight-700 text-right g-letter-spacing-1">
                      $3.500
                      <em class="g-font-style-normal g-font-weight-300 g-font-size-10">/ per month</em>
                    </div>
                  </footer>
                  <!-- End Article Footer -->
                </div>
                <!-- End Article Content -->
              </article>
              <!-- End Article -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Content -->
      <!-- Section Content -->
      <section id="agents" class="g-py-100">
        <div class="container text-center g-max-width-770 g-mb-60">
          <div class="u-heading-v2-2--top g-brd-primary g-mb-20">
            <h2 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-700 g-font-size-26 mb-0">Our agents</h2>
          </div>

          <p class="g-color-gray-dark-v5 mb-0">Ut pulvinar tellus sed elit luctus aliquet. Suspendisse hendrerit sapien a aliquet porttitor. In hendrerit consequat neque eget egestas. In a consectetur felis.</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 g-mb-30 g-mb-0--lg">
              <!-- Figure -->
              <figure>
                <!-- Figure Image -->
                <img class="w-100 g-mb-35" src="<?php echo $actual_link;?>assets/img-temp/400x667/img1.jpg" alt="Image description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-10">Samina Kingstar</h4>
                <p class="g-font-size-default g-color-gray-dark-v5 mb-0">Mauris sodales tellus vel</p>
                <!-- End Info -->

                <hr class="g-brd-gray-light-v3 g-my-15">

                <!-- Contact Info -->
                <ul class="list-unstyled g-font-size-default g-color-gray-dark-v5 mb-0">
                  <li class="g-mb-5">
                    <i class="fa fa-envelope g-mr-5"></i> samina@unify.com
                  </li>
                  <li>
                    <i class="fa fa-comment g-mr-5"></i> +48 555 2566 112
                  </li>
                </ul>
                <!-- End Contact Info -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="col-md-6 col-lg-3 g-mb-30 g-mb-0--lg">
              <!-- Figure -->
              <figure>
                <!-- Figure Image -->
                <img class="w-100 g-mb-35" src="<?php echo $actual_link;?>assets/img-temp/400x667/img2.jpg" alt="Image description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-10">Thomas Flemton</h4>
                <p class="g-font-size-default g-color-gray-dark-v5 mb-0">Integer blandit velit nec purus convallis</p>
                <!-- End Info -->

                <hr class="g-brd-gray-light-v3 g-my-15">

                <!-- Contact Info -->
                <ul class="list-unstyled g-font-size-default g-color-gray-dark-v5 mb-0">
                  <li class="g-mb-5">
                    <i class="fa fa-envelope g-mr-5"></i> thomas@unify.com
                  </li>
                  <li>
                    <i class="fa fa-comment g-mr-5"></i> +48 555 2566 113
                  </li>
                </ul>
                <!-- End Contact Info -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="col-md-6 col-lg-3 g-mb-30 g-mb-0--md">
              <!-- Figure -->
              <figure>
                <!-- Figure Image -->
                <img class="w-100 g-mb-35" src="<?php echo $actual_link;?>assets/img-temp/400x667/img3.jpg" alt="Image description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-10">Samantha Felly</h4>
                <p class="g-font-size-default g-color-gray-dark-v5 mb-0">Proin sollicitudin turpis in massa</p>
                <!-- End Info -->

                <hr class="g-brd-gray-light-v3 g-my-15">

                <!-- Contact Info -->
                <ul class="list-unstyled g-font-size-default g-color-gray-dark-v5 mb-0">
                  <li class="g-mb-5">
                    <i class="fa fa-envelope g-mr-5"></i> samantha@unify.com
                  </li>
                  <li>
                    <i class="fa fa-comment g-mr-5"></i> +48 555 2566 114
                  </li>
                </ul>
                <!-- End Contact Info -->
              </figure>
              <!-- End Figure -->
            </div>

            <div class="col-md-6 col-lg-3">
              <!-- Figure -->
              <figure>
                <!-- Figure Image -->
                <img class="w-100 g-mb-35" src="<?php echo $actual_link;?>assets/img-temp/400x667/img4.jpg" alt="Image description">
                <!-- End Figure Image -->

                <!-- Figure Info -->
                <h4 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-10">Eric Pyton</h4>
                <p class="g-font-size-default g-color-gray-dark-v5 mb-0">Vestibulum pulvinar aliquet egestas</p>
                <!-- End Info -->

                <hr class="g-brd-gray-light-v3 g-my-15">

                <!-- Contact Info -->
                <ul class="list-unstyled g-font-size-default g-color-gray-dark-v5 mb-0">
                  <li class="g-mb-5">
                    <i class="fa fa-envelope g-mr-5"></i> eric@unify.com
                  </li>
                  <li>
                    <i class="fa fa-comment g-mr-5"></i> +48 555 2566 115
                  </li>
                </ul>
                <!-- End Contact Info -->
              </figure>
              <!-- End Figure -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="testimonials" class="g-py-100">
        <div class="container text-center g-max-width-770">
          <div class="u-heading-v2-2--top g-brd-primary g-mb-20">
            <h2 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-700 g-font-size-26 mb-0">From our clients</h2>
          </div>

          <p class="g-color-gray-dark-v5 g-mb-60">Ut pulvinar tellus sed elit luctus aliquet. Suspendisse hendrerit sapien a aliquet porttitor. In hendrerit consequat neque eget egestas. In a consectetur felis.</p>

          <div class="js-carousel g-pb-50"
               data-infinite="true"
               data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-0">
            <div class="js-slide">
              <!-- Testimonial Block -->
              <img class="img-fluid g-width-130 g-rounded-6 mx-auto g-mb-30" src="<?php echo $actual_link;?>assets/img-temp/130x130/img1.jpg" alt="Image description">
              <h4 class="h6 text-uppercase g-font-weight-700 g-mb-20">Spencer's Family</h4>
              <blockquote class="g-color-gray-dark-v5 mb-0">Ut augue diam, lacinia fringilla erat eu, vehicula commodo quam. Aliquam eget accumsan ligula. Maecenas sit amet consectetur lectus. Suspendisse commodo et magna non pulvinar. Quisque et ultricies sem, et vulputate dui. Morbi aliquam leo id ipsum tempus mollis.</blockquote>
              <!-- End Testimonial Block -->
            </div>

            <div class="js-slide">
              <!-- Testimonial Block -->
              <img class="img-fluid g-width-130 g-rounded-6 mx-auto g-mb-30" src="<?php echo $actual_link;?>assets/img-temp/130x130/img2.jpg" alt="Image description">
              <h4 class="h6 text-uppercase g-font-weight-700 g-mb-20">Melani Shnaider</h4>
              <blockquote class="g-color-gray-dark-v5 mb-0">Ut augue diam, lacinia fringilla erat eu, vehicula commodo quam. Aliquam eget accumsan ligula. Morbi aliquam leo id ipsum tempus mollis.</blockquote>
              <!-- End Testimonial Block -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="contact" class="u-bg-overlay g-bg-img-hero g-bg-secondary-opacity-0_85--after g-py-100" style="background-image: url(assets/img-temp/1920x1275/img1.jpg);">
        <div class="container text-center u-bg-overlay__inner g-max-width-770">
          <div class="u-heading-v2-2--top g-brd-primary g-mb-20">
            <h2 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-700 g-font-size-26 g-color-white mb-0">Contact us</h2>
          </div>

          <p class="g-color-white-opacity-0_7 g-mb-90">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. Cras porttitor auctor sapien eu tempus nunc placerat</p>

          <form>
            <div class="row">
              <div class="col-md-6 form-group g-mb-30">
                <input id="inputGroup1_1" class="form-control h-100 g-font-size-14 g-color-white-opacity-0_3 g-color-white--focus g-placeholder-inherit g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_3 g-brd-white--focus g-rounded-4 g-px-10 g-py-13 g-transition-0_2 g-transition--ease-in" type="text" placeholder="Your name">
              </div>

              <div class="col-md-6 form-group g-mb-30">
                <input id="inputGroup1_2" class="form-control h-100 g-font-size-14 g-color-white-opacity-0_3 g-color-white--focus g-placeholder-inherit g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_3 g-brd-white--focus g-rounded-4 g-px-10 g-py-13 g-transition-0_2 g-transition--ease-in" type="tel" placeholder="Your phone">
              </div>

              <div class="col-md-12 form-group g-mb-30">
                <input id="inputGroup1_3" class="form-control h-100 g-font-size-14 g-color-white-opacity-0_3 g-color-white--focus g-placeholder-inherit g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_3 g-brd-white--focus g-rounded-4 g-px-10 g-py-13 g-transition-0_2 g-transition--ease-in" type="text" placeholder="Subject">
              </div>

              <div class="col-md-12 form-group g-mb-30">
                <textarea id="inputGroup1_4" class="form-control g-resize-none g-font-size-14 g-color-white-opacity-0_3 g-color-white--focus g-placeholder-inherit g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_3 g-brd-white--focus g-rounded-4 g-px-10 g-py-13 g-transition-0_2 g-transition--ease-in" rows="6" placeholder="Message"></textarea>
              </div>
            </div>

            <div class="text-center">
              <button class="btn u-btn-primary btn-md btn-block text-uppercase g-font-weight-700 g-font-size-12 g-rounded-4 g-py-12 g-py-15--md g-px-20 g-px-40--md" type="submit" role="button">Send message</button>
            </div>
          </form>
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Footer -->
      <footer class="text-center g-color-gray-dark-v5 g-bg-secondary">
        <div class="g-pt-70 g-pb-40">
          <div class="container">
            <a class="d-block g-width-200 g-opacity-0_3 g-mb-30 mx-auto" href="https://htmlstream.com/">
              <img class="img-fluid" src="<?php echo $actual_link;?>assets/img/logo-foot.png" alt="Logo">
            </a>

            <ul class="list-inline g-mb-20">
              <li class="list-inline-item">
                <a class="u-icon-v2 u-icon-size--xs g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v5 g-brd-primary--hover g-rounded-50x g-mx-5" href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a class="u-icon-v2 u-icon-size--xs g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v5 g-brd-primary--hover g-rounded-50x g-mx-5" href="#"><i class="fa fa-pinterest-p"></i></a>
              </li>
              <li class="list-inline-item">
                <a class="u-icon-v2 u-icon-size--xs g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v5 g-brd-primary--hover g-rounded-50x g-mx-5" href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a class="u-icon-v2 u-icon-size--xs g-width-35 g-height-35 g-font-size-16 g-color-gray-dark-v5 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v5 g-brd-primary--hover g-rounded-50x g-mx-5" href="#"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>

            <div class="row justify-content-center">
              <div class="col-md-8">
                <p class="mb-0">Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi facilisis lobortis. Praesent malesuada facilisis maximus. Donec sed lobortis tortor.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="g-brd-top g-brd-gray-dark-v2 g-py-30">
          <div class="container">
            <p class="mb-0">
              &copy; 2019 All right reserved. Unify Development by
              <a class="g-font-weight-600 g-color-white" href="#">HTML Stream</a>
            </p>
          </div>
        </div>
      </footer>
      <!-- End Footer -->

      <a class="js-go-to u-go-to-v1" href="#"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <!-- JS Global Compulsory -->
    <script src="<?php echo $actual_link;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $actual_link;?>assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="<?php echo $actual_link;?>assets/vendor/popper.js/popper.min.js"></script>
    <script src="<?php echo $actual_link;?>assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?php echo $actual_link;?>assets/vendor/appear.js"></script>
    <script src="<?php echo $actual_link;?>assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="<?php echo $actual_link;?>assets/vendor/master-slider/source/assets/js/masterslider.min.js"></script>

    <!-- JS Unify -->
    <script src="<?php echo $actual_link;?>assets/js/hs.core.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/components/hs.header.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/helpers/hs.hamburgers.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/components/hs.scroll-nav.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/components/hs.rating.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/components/hs.carousel.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="<?php echo $actual_link;?>assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      // initialization of master slider
      var promoSlider = new MasterSlider();

      promoSlider.setup('promoSlider', {
        width: 1400,
        height: 580,
        speed: 70,
        layout: 'fullwidth',
        loop: true,
        autoplay: true,
        overPause: true,
        dir: 'v'
      });

      promoSlider.control('arrows');

      promoSlider.control('lightbox');

      promoSlider.control('thumblist', {
        autohide: false,
        dir: 'v',
        align: 'left',
        width: 200,
        height: 120,
        margin: 0,
        space: 10,
        hideUnder: 500,
        inset: true
      });

      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'), {
          spacing: 2
        });
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700
        });
      });
    </script>
  </body>
</html>