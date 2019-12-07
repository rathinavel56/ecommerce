<?php
use Cake\Routing\Router; 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
?>
      <section id="home">
        <div class="master-slider ms-promo-2" id="promoSlider">
		<?php if(!empty($productBanners)) {
				foreach ($productBanners as $productBanner) {
					$imgUrl = !empty($productBanner->attachments) ? $this->App->imageResize('original', 'Products', $productBanner->attachments[0]): $this->App->siteUrl().'/images/no_image.png';
		?>
          <div class="ms-slide">
            <img src="<?php echo $actual_link;?>assets/img/blank.gif" alt="Image description"
                 data-src="<?php echo $imgUrl;?>">

            <div class="ms-layer text-center g-absolute-centered g-max-width-550"
                 data-origin="ml"
                 data-type="text"
                 data-effect="fade()"
                 data-ease="easeOutExpo"
                 data-duration="2200">
              <h3 class="h6 text-uppercase g-font-weight-700 g-font-size-32--md g-color-white g-mb-10 g-mb-25--md"><i class="fa fa-inr"></i> <?php echo $productBanner->price;?>
                <small class="g-font-size-12 g-valign-middle">/ unit</small>
              </h3>
              <h2 class="text-uppercase g-line-height-1_2 g-font-weight-700 g-font-size-20 g-font-size-46--md g-color-white mb-0 g-mb-35--md"><?php echo $productBanner->name;?></h2>
              <a class="btn btn-lg g-hidden-md-down text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-py-15 g-px-40" href="#contact">Contact Us</a>
            </div>
          </div>
		 <?php
				}
			}
		 ?>
        </div>
      </section>
	  <?php if(!empty($productOffers)) {?>
      <section id="specialOffers">
		<div class="container text-center g-max-width-770 g-mb-60">
          <div class="u-heading-v2-2--top g-brd-primary g-mb-20">
            <h2 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-700 g-font-size-26 mb-0">Special offer</h2>
          </div>
        </div>
        <div class="container">
          <div class="js-carousel"
               data-infinite="true"
               data-arrows-classes="u-arrow-v1 g-pos-abs g-right-0 g-bottom-100x g-width-35 g-width-45--md g-height-35 g-height-45--md g-font-size-18 g-color-gray-light-v1 g-color-white--hover g-bg-primary--hover g-brd-around g-brd-gray-light-v1 g-brd-primary--hover g-rounded-50x g-mb-65 g-transition-0_2 g-transition--ease-in"
               data-arrow-left-classes="fa fa-angle-left g-mr-40 g-mr-60--md"
               data-arrow-right-classes="fa fa-angle-right">
			   <?php foreach ($productOffers as $productOffer) {
				   $imgUrl = !empty($productBanner->attachments) ? $this->App->imageResize('688', 'Products', $productBanner->attachments[0]): $this->App->siteUrl().'/images/no_image.png';?>
            <div class="js-slide">
              <!-- Article -->
              <article class="row g-bg-secondary mx-0">
                <div class="col-md-6 col-lg-7 g-bg-size-cover g-min-height-250"
                     data-bg-img-src="<?php echo $imgUrl;?>"></div>

                <div class="col-md-6 col-lg-5 g-pa-30">
                  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
                    <a class="g-color-white" href="#"><?php echo $productBanner->name;?></a>
                  </h3>
                  <!-- End Article Title -->
                  <p class="g-color-white-opacity-0_3 g-mb-25"><?php echo $productBanner->description;?></p>

                  <!-- Article Icons -->
                  <div class="g-overflow-hidden g-mb-15">
                    <ul class="list-inline text-center g-font-size-12 g-brd-top g-brd-bottom g-brd-white-opacity-0_1 g-mx-minus-25">
                      <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-pa-12-5-7 mx-0 g-my-5">
                        <?php echo $productBanner->power_source;?>
                      </li>
                      <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-brd-left g-brd-white-opacity-0_1 g-pa-12-5-7 mx-0 g-my-5">
                        Stage <?php echo $productBanner->stages;?>
                      </li>
                      <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-brd-left g-brd-white-opacity-0_1 g-pa-12-5-7 mx-0 g-my-5">
                        <?php echo $productBanner->motor_speed;?> HP
                      </li>
                    </ul>
                  </div>
                  <!-- End Article Icons -->

                  <!-- Article Footer -->
                  <footer class="d-flex justify-content-between">
                    <div class="align-self-center">
                      <div class="g-font-weight-700 g-font-size-16">
                        <s class="g-color-white-opacity-0_3 g-mr-15"><i class="fa fa-inr"></i> <?php echo $productBanner->price;?></s>
                        <span class="g-color-primary"><i class="fa fa-inr"></i> <?php echo $productBanner->offer_price;?></span>
                      </div>
                    </div>

                    <div class="align-self-center">
                      <a class="btn btn-lg text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-color-white-opacity-0_7 g-py-12 g-py-15--md g-px-20 g-px-40--md" href="#contact">Contact Us</a>
                    </div>
                  </footer>
                  <!-- End Article Footer -->
                </div>
              </article>
              <!-- End Article -->
            </div>
			   <?php } ?>
          </div>
        </div>
      </section>
	  <?php } ?>
      <!-- End Section Content -->

      <!-- Section Content -->
	  <?php if(!empty($products)) { ?>
      <section id="ourProducts" class="g-py-80">
        <div class="container text-center g-max-width-770 g-mb-60">
          <div class="u-heading-v2-2--top g-brd-primary g-mb-20">
            <h2 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-700 g-font-size-26 mb-0">Our New Products</h2>
          </div>
        </div>

        <div class="container">
          <div class="row">
			<?php 
				foreach ($products as $product): ?>
				<div class="col-md-6 col-lg-4 g-mb-30">
				  <!-- Article -->
				  <article class="g-pos-rel">
					<!-- Article Image -->
					<?php $imgUrl = !empty($product->attachments) ? $this->App->imageResize('350', 'Products', $product->attachments[0]): $this->App->siteUrl().'/images/no_image.png';?>
					<img class="w-100 d-block g-rounded-top-5 homeProductImg" src="<?php echo $imgUrl;?>" alt="Image description">
					<!-- End Article Image -->

					<!-- Article Content -->
					<div class="g-brd-around g-brd-top-none g-brd-gray-light-v3 g-rounded-bottom-5 g-pa-30">
					  <!-- Article Title -->
					  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
						<?php echo $this->Html->link((strlen($product->name) > 27) ? substr($product->name,0,24).'...' : $product->name, ['action' => 'view', $product->slug, '_full' => true], ['class' => 'g-color-main g-color-primary--hover g-text-underline--none--hover']); ?>
					  </h3>
					  <!-- End Article Title -->
					  <?php $desc = strip_tags($product->description);?>
					  <p class="g-color-gray-dark-v5 g-mb-25"><?php echo (strlen($desc) > 40) ? substr($desc,0,37).'...' : $desc;?></p>

					  <!-- Article Icons -->
					  <div class="g-overflow-hidden g-mb-15">
						<ul class="list-inline text-center g-font-size-12 g-color-gray-dark-v5 g-brd-top g-brd-bottom g-brd-gray-light-v3 g-mx-minus-25">
						  <li class="list-inline-item g-width-30x g-pa-12-5-7 mx-0 g-my-5">
							<?php echo $product->power_source;?>
						  </li>
						  <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
							Stage <?php echo $product->stages;?>
						  </li>
						  <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
							<?php echo $product->motor_speed;?> HP
						  </li>
						</ul>
					  </div>
					  <!-- End Article Icons -->

					  <!-- Article Footer -->
					  <footer class="d-flex justify-content-between align-items-center w-100 text-uppercase">
						<div class="align-middle">
						 <?php echo $product->category->name;?>
						</div>
						<div class="align-middle g-font-size-18 g-font-weight-700 text-right g-letter-spacing-1">
						  <i class="fa fa-inr"></i> <?php $price = (strtotime(date('Y-m-d')) <= strtotime($product->offer_date)) ? $product->offer_price: $product->price;
						  echo $price;?>
						  <em class="g-font-style-normal g-font-weight-300 g-font-size-10">/ Unit</em>
						</div>
					  </footer>
					  <!-- End Article Footer -->
					</div>
					<!-- End Article Content -->
				  </article>
				  <!-- End Article -->
				</div>
				<?php endforeach; ?>
				<?php echo $this->element('pagination'); ?>
          </div>
        </div>
      </section>
	  <?php } ?>
      <!-- End Section Content -->