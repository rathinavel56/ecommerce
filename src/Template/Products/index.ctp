
      <section id="ourProducts" class="g-py-80">
        <div class="container text-center g-max-width-770 g-mb-60">
          <div class="u-heading-v2-2--top g-brd-primary g-mb-20">
            <h2 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-700 g-font-size-26 mb-0"><?php echo $cat_name;?></h2>
          </div>
        </div>

        <div class="container">
          <div class="row">
		  <?php if ($this->request->params['paging'][$this->request->params['controller']]['count'] != 0) {  ?>
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
				<?php } else { ?>
				<div class="col-md-12 col-lg-12 g-mb-30 no-record-found" >
					No Records Found
				</div>
				<?php } ?>
          </div>
        </div>
      </section>
	  