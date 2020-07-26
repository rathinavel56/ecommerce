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
<!--https://htmlstream.com/preview/unify-v2.6.2/e-commerce/page-single-product-1.html-->
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="shortcut icon" href="favicon.ico">

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

    <!-- CSS Template -->
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/css/styles.op-real-estate.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo $actual_link;?>assets/css/custom.css">
</head>
<body>
	<main class="g-pt-110">
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

    <!-- JS Unify -->
    <script src="<?php echo $actual_link;?>assets/js/hs.core.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/components/hs.header.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/helpers/hs.hamburgers.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/components/hs.scroll-nav.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/components/hs.rating.js"></script>
    <script src="<?php echo $actual_link;?>assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="<?php echo $actual_link;?>assets/js/custom.js"></script>
  </body>
</html>