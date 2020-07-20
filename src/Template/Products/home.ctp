<?php
use Cake\Routing\Router; 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
?>
      <section id="home">
        <div class="master-slider ms-promo-2" id="promoSlider">
		<?php if(!empty($productBanners)) {
				foreach ($productBanners as $productBanner) {
					$imgUrl = !empty($productBanner->attachments) ? $this->App->imageResize('1400', 'Products', $productBanner->attachments[0]): $this->App->siteUrl().'/images/no_image.png';
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
            </div>
          </div>
		 <?php
				}
			}
		 ?>
        </div>
      </section>
	 <?php if(!empty($productOffers->toArray())) {?>
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
				   $imgUrl = !empty($productOffer->attachments) ? $this->App->imageResize('400', 'Products', $productOffer->attachments[0]): $this->App->siteUrl().'/images/no_image.png';?>
            <div class="js-slide">
              <!-- Article -->
			  <div class="g-bg-secondary mx-0" style="border: 1px solid #ccc;">
              <article class="row">
				<div class="col-md-6 col-lg-6">
					<div class="g-bg-size-cover g-min-height-250">
						<div class="offerProductImg text-center" style="background-color: #FFF !important;">
							<img class="w-100 d-block g-rounded-top-5" src="<?php echo $imgUrl;?>" alt="Image description">
						</div>
					</div>
				</div>
                <div class="col-md-6 col-lg-6 g-pa-30">
					<div style="margin-top: 50px;" >
					  <h3 class="text-uppercase g-font-weight-700 g-font-size-16 g-mb-20">
						<?php echo $this->Html->link((strlen($productOffer->name) > 27) ? substr($productOffer->name,0,24).'...' : $productOffer->name, ['action' => 'view', $productOffer->slug, '_full' => true], ['class' => 'g-color-white']); ?>
					  </h3>
					  <!-- End Article Title -->
					  <p class="g-color-white-opacity-0_3 g-mb-25"><?php echo $productOffer->description;?></p>

					  <!-- Article Icons -->
					  <?php if ($productOffer->is_tool == false) { ?>
					  <div class="g-overflow-hidden g-mb-15 <?php echo ($productOffer->is_tool === true) ? 'hide' : '';?>" style="padding-bottom: 50px;">
						<ul class="list-inline text-center g-font-size-12 g-brd-top g-brd-bottom g-brd-white-opacity-0_1 g-mx-minus-25">
						  <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-pa-12-5-7 mx-0 g-my-5">
							Head <?php echo $productOffer->head;?>
						  </li>
						  <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-brd-left g-brd-white-opacity-0_1 g-pa-12-5-7 mx-0 g-my-5">
							Discharge <?php echo $productOffer->power_source;?> M3/hr
						  </li>
						  <li class="list-inline-item g-width-30x g-color-white-opacity-0_3 g-brd-left g-brd-white-opacity-0_1 g-pa-12-5-7 mx-0 g-my-5">
							Motor Power <?php echo $productOffer->motor_speed;?> BKW/MKW
						  </li>
						</ul>
					  </div>
					  <?php } ?>
					  <!-- End Article Icons -->

					  <!-- Article Footer -->
					  <footer class="d-flex justify-content-between">
						<div class="align-self-center">
						  <div class="g-font-weight-700 g-font-size-16">
							<span class="g-color-white-opacity-0_3 g-mr-15">MOC <?php echo $productOffer->price;?></span>
							<?php /*<s class="g-color-white-opacity-0_3 g-mr-15"><i class="fa fa-inr"></i> <?php echo $productBanner->price;?></s>
							<span class="g-color-primary"><i class="fa fa-inr"></i> <?php echo $productBanner->offer_price;?></span> */?>
						  </div>
						</div>

						<div class="align-self-center">
						  <a class="btn btn-lg text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-color-white-opacity-0_7 g-py-12 g-py-15--md g-px-20 g-px-40--md" href="#contact">Enquiry Now</a>
						</div>
					  </footer>
					  <!-- End Article Footer -->
					  </div>
                </div>
              </article>
			  </div>
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
					<div class="homeProductImg text-center">
						<?php $imgUrl = !empty($product->attachments) ? $this->App->imageResize('350', 'Products', $product->attachments[0]): $this->App->siteUrl().'/images/no_image.png';?>
						<img class="w-100 d-block g-rounded-top-5" src="<?php echo $imgUrl;?>" alt="Image description">
					</div>
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
					  <?php if ($product->is_tool == false) { ?>
					  <div class="g-overflow-hidden g-mb-15 ">
						<ul class="list-inline text-center g-font-size-12 g-color-gray-dark-v5 g-brd-top g-brd-bottom g-brd-gray-light-v3 g-mx-minus-25">
						  <li class="list-inline-item g-width-30x g-pa-12-5-7 mx-0 g-my-5">
							Head <?php echo $product->head;?>
						  </li>
						  <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
							Discharge <?php echo $product->power_source;?> M3/hr
						  </li>
						  <li class="list-inline-item g-width-30x g-brd-left g-brd-gray-light-v3 g-pa-12-5-7 mx-0 g-my-5">
							Motor Power <?php echo $product->motor_speed;?> BKW/MKW
						  </li>
						</ul>
					  </div>
					  <?php } ?>
					  <!-- End Article Icons -->

					  <!-- Article Footer -->
					  <footer class="d-flex justify-content-between align-items-center w-100 text-uppercase">
						<div class="align-middle">
						 <?php echo $product->category->name;?>
						</div>
						<div class="align-middle">
						  <?php /*<i class="fa fa-inr"></i> <?php $price = (strtotime(date('Y-m-d')) <= strtotime($product->offer_date)) ? $product->offer_price: $product->price;
						  echo $price;?>
						  <em class="g-font-style-normal g-font-weight-300 g-font-size-10">/ Unit</em> */?>
						  MOC <?php echo $product->price;?>
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