<div class="container g-py-50">
   <div class="row">
      <div class="col-lg-7">
			<div id="carouselCus1" class="js-carousel g-pt-10 g-mb-10"
                 data-infinite="true"
                 data-fade="true"
                 data-arrows-classes="u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle"
                 data-arrow-left-classes="fa fa-angle-left g-left-40"
                 data-arrow-right-classes="fa fa-angle-right g-right-40">
				 <?php if ($product->attachments) {
							$i = 0;
							foreach($product->attachments as $attachments) {?>
							  <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after view-img-border">
								<img class="img-fluid w-100" src="<?php echo $this->App->imageResize('650', 'Products', $attachments);?>" alt="Image Description">
							  </div>
					<?php $i++;} } ?>
            </div>
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
           <?php /*  <div class="g-mb-30">
               <h2 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-12 text-uppercase mb-2">MOC</h2>
			   <?php if(strtotime(date('Y-m-d')) <= strtotime($product->offer_date)) {?>
				<span class="g-color-black g-font-weight-500 g-font-size-30 mr-2"><i class="fa fa-inr"></i> <?php echo $product->offer_price;?></span>
				<s class="g-color-gray-dark-v4 g-font-weight-500 g-font-size-16"><i class="fa fa-inr"></i> <?php echo $product->price;?></s>
			   <?php } else { ?>
				<span class="g-color-black g-font-weight-500 g-font-size-30 mr-2"><i class="fa fa-inr"></i> <?php echo $product->price;?></span>
			   <?php } ?>
            </div> */?>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Model</h5>
               <label><?php echo $product->category->name;?></label>
            </div>
            <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Head</h5>
			   <label><?php echo $product->head;?></label>               
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Discharge</h5>
			   <label><?php echo $product->power_source;?> M3/hr</label>               
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Motor Power</h5>
               <label><?php echo $product->motor_speed;?> BKW/MKW</label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">MOC</h5>
               <label><?php echo $product->price;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Section Delivery</h5>
               <label><?php echo $product->max_flow_rate;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Power MKW</h5>
               <label><?php echo $product->pump_size;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">RPM</h5>
               <label><?php echo $product->temperature;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Liquid</h5>
               <label><?php echo $product->frequency;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Specific Gravity</h5>
               <label><?php echo $product->discharge_size_millimeter;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Flanges</h5>     
				<label><?php echo $product->flanges;?></label>
            </div>
			<div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
               <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Efficency</h5>
			   <label><?php echo $product->brand;?></label>               
            </div>
            <div class="row g-mx-minus-5 g-mb-20">
               <div class="col g-px-5 g-mb-10">
                  <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                  <a href="#contact" class="view-contact">Enquiry Now</a>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>