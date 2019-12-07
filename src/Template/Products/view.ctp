<div class="container g-py-50">
   <div class="row">
      <div class="col-lg-7">
         <!-- Carousel -->
         <div id="carouselCus1" class="js-carousel g-pt-10 g-mb-10 slick-initialized slick-slider" data-infinite="true" data-fade="true" data-arrows-classes="u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle" data-arrow-left-classes="fa fa-angle-left g-left-40" data-arrow-right-classes="fa fa-angle-right g-right-40" data-nav-for="#carouselCus2">
            <div class="js-prev u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle fa fa-angle-left g-left-40 slick-arrow" style=""></div>
            <div class="slick-list draggable">
               <div class="slick-track" style="opacity: 1; width: 1905px;">
                  <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 635px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; height: auto; transition: opacity 500ms ease 0s;">
                     <img class="img-fluid w-100" src="https://htmlstream.com/preview/unify-v2.6.2/e-commerce/assets/img-temp/650x750/img1.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 635px; position: relative; left: -635px; top: 0px; z-index: 998; opacity: 0; height: auto; transition: opacity 500ms ease 0s;">
                     <img class="img-fluid w-100" src="https://htmlstream.com/preview/unify-v2.6.2/e-commerce/assets/img-temp/650x750/img2.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 635px; position: relative; left: -1270px; top: 0px; z-index: 999; opacity: 1; height: auto;">
                     <img class="img-fluid w-100" src="<?php echo $this->App->imageResize('650', 'Products', $product->attachments[0]);?>" alt="Image Description">
                  </div>
               </div>
            </div>
            <div class="js-next u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle fa fa-angle-right g-right-40 slick-arrow" style=""></div>
         </div>
         <div id="carouselCus2" class="js-carousel text-center u-carousel-v3 g-mx-minus-5 slick-initialized slick-slider slick-transform-off" data-infinite="true" data-center-mode="true" data-slides-show="3" data-is-thumbs="true" data-focus-on-select="false" data-nav-for="#carouselCus1">
            <div class="slick-list draggable" style="padding: 0px;">
               <div class="slick-track" style="opacity: 1; width: 645px; transform: translate3d(-430px, 0px, 0px);">
                  <div class="js-slide g-cursor-pointer g-px-5 slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 215px; height: auto;">
                     <img class="img-fluid" src="https://htmlstream.com/preview/unify-v2.6.2/e-commerce/assets/img-temp/250x170/img1.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide g-cursor-pointer g-px-5 slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 215px; height: auto;">
                     <img class="img-fluid" src="https://htmlstream.com/preview/unify-v2.6.2/e-commerce/assets/img-temp/250x170/img2.jpg" alt="Image Description">
                  </div>
                  <div class="js-slide g-cursor-pointer g-px-5 slick-slide slick-current slick-center" data-slick-index="2" aria-hidden="true" tabindex="0" style="width: 215px; height: auto;">
                     <img class="img-fluid" src="https://htmlstream.com/preview/unify-v2.6.2/e-commerce/assets/img-temp/250x170/img3.jpg" alt="Image Description">
                  </div>
               </div>
            </div>
         </div>
         <!-- End Carousel -->
      </div>
      <div class="col-lg-5">
         <div class="g-px-40--lg g-pt-70 no-pad-top">
            <!-- Product Info -->
            <div class="g-mb-30">
               <h1 class="g-font-weight-300 mb-4"><?php echo $product->name;?></h1>
               <p><?php echo $product->description;?></p>
            </div>
            <!-- End Product Info -->
            <!-- Price -->
            <div class="g-mb-30">
               <h2 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-12 text-uppercase mb-2">Price</h2>
			   <?php if(strtotime(date('Y-m-d')) <= strtotime($product->offer_date)) {?>
				<span class="g-color-black g-font-weight-500 g-font-size-30 mr-2"><i class="fa fa-inr"></i> <?php echo $product->offer_price;?></span>
				<s class="g-color-gray-dark-v4 g-font-weight-500 g-font-size-16"><i class="fa fa-inr"></i> <?php echo $product->price;?></s>
			   <?php } else { ?>
				<span class="g-color-black g-font-weight-500 g-font-size-30 mr-2"><i class="fa fa-inr"></i> <?php echo $product->price;?></span>
			   <?php } ?>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Type</h5>
               <label><?php echo $product->category->name;?></label>
            </div>
            <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Head</h5>
			   <label><?php echo $product->head;?></label>               
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Power Source</h5>
			   <label><?php echo $product->power_source;?></label>               
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Brand</h5>
			   <label><?php echo $product->brand;?></label>               
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Max Flow Rate</h5>
               <label><?php echo $product->max_flow_rate;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Motor Speed</h5>
               <label><?php echo $product->motor_speed;?> HP</label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Pump Size</h5>
               <label><?php echo $product->pump_size;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Temperature</h5>
               <label><?php echo $product->temperature;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Frequency</h5>
               <label><?php echo $product->frequency;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Discharge Size Millimeter</h5>
               <label><?php echo $product->discharge_size_millimeter;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Flanges</h5>     
				<label><?php echo $product->flanges;?></label>
            </div>
            <div class="row g-mx-minus-5 g-mb-20">
               <div class="col g-px-5 g-mb-10">
                  <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                  <a href="#contact" class="view-contact">Contact Us</a> <i class="align-middle ml-2 icon-finance-100 u-line-icon-pro"></i>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>