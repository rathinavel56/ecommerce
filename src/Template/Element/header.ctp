<?php
use Cake\Routing\Router; 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
?> 
 <!-- Header -->
      <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
              data-header-fix-moment="200"
              data-header-fix-effect="slide">
        <div class="text-center text-lg-left u-header__section u-header__section--hidden u-header__section--light g-bg-white g-brd-bottom g-brd-gray-light-v4 g-py-20">
          <div class="container">
            <div class="row flex-lg-row align-items-center justify-content-lg-start">
              <div class="col-6 col-sm-3 col-lg-2">
                <!-- Logo -->
                <a href="<?php echo $actual_link;?>" class="js-go-to navbar-brand"
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
                      <strong class="d-block g-pl-25">+918048878227 (Sivakumar S)</strong>
                    </div>
                  </div>

                  <div class="col-sm g-hidden-lg-down g-brd-right--sm g-brd-gray-light-v4">
                    <div class="g-pa-10--lg">
                      <span class="icon icon-clock g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
                      <span class="text-uppercase g-font-size-13">Opening time</span>
                      <strong class="d-block g-pl-25">Mon-Sat: 08.00 AM - 06.00 PM</strong>
                    </div>
                  </div>

                  <div class="col-sm g-hidden-sm-down g-brd-right--sm g-brd-gray-light-v4">
                    <div class="g-pa-10--lg">
                      <span class="icon icon-envelope g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
                      <span class="text-uppercase g-font-size-13">Email us</span>
                      <strong class="d-block g-pl-25">siva.66shiva@gmail.com</strong>
                    </div>
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
                  <li style="margin-top: 1px;" class="nav-item g-mr-15--lg g-mb-7 g-mb-0--lg active">
                    <a href="<?php echo Router::url('/');?>#home" class="nav-link g-color-primary--hover p-0">Home
                      <span class="sr-only">(current)</span></a>
                  </li>
                  <li style="margin-top: 1px;" class="nav-item g-mx-10--lg g-mx-15--xl g-mb-7 g-mb-0--lg">
                    <a href="<?php echo Router::url('/');?>#ourProducts" class="nav-link g-color-primary--hover p-0">Pumps</a>
                  </li>
				  <li class="nav-item g-ml-10--lg g-ml-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut" data-position="right" style="margin-top: -1px;">
					   <div class="btn-group">
							<a id="mega-menu-label-3" class="nav-link g-color-primary--hover p-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						   Categories
						   <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
						   </a>	
							<div class="dropdown-menu dropdown-menu-left">
								<ul class="home_drop">
								<?php
									foreach ($this->App->getCategory() as $key=>$value) {
										echo '<li>'.$this->Html->link( $value, array('controller'=>'products','action'=>'index','cat_id' =>$key,'cat_name' =>$value ), array('escape'=>false)).'</li>';
									}
								?>
								</ul>
							  </div>						   
						</div>
					</li>
					 <li class="nav-item g-ml-10--lg g-ml-15--xl" style="margin-top: 1px;">
                    <a href="#contact" class="nav-link g-color-primary--hover p-0">Contact Us</a>
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