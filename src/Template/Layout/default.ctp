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
		<?php echo $this->element('header'); ?>
			<?= $this->Flash->render(); ?>
			<?= $this->fetch('content') ?>
		<?php echo $this->element('footer'); ?>	
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