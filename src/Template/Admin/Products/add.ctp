<h2>Add Product</h2>

<br />
<br />
<!-- https://blueimp.github.io/jQuery-File-Upload/ -->

        <?= $this->Form->create($product, ['class' => 'form-horizontal' , 'enctype' => 'multipart/form-data']) ?>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('category_id', ['options' => $categories, 'default' => 1, 'class' => 'form-control', 'label' => 'Model']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('name', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('keyword', ['class' => 'form-control', 'rows' => 8, 'required' => 'required']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('meta_description', ['class' => 'form-control', 'rows' => 8, 'required' => 'required']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('description', ['class' => 'form-control', 'rows' => 8, 'required' => 'required']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('price', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('offer_price', ['class' => 'form-control', 'type'=> 'text']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('offer_date', ['class' => 'form-control', 'type'=> 'date']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('weight', ['class' => 'form-control', 'type'=> 'number', 'required' => 'required']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('quantity', ['class' => 'form-control', 'type'=> 'number', 'required' => 'required']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('motor_phase', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('stages', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('head', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('power_source', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Discharge']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('brand', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Efficency']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('max_flow_rate', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Power']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('motor_speed', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Power BKW']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('pump_size', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Power MKW']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('temperature', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'RPM']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('frequency', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Liquid']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('discharge_size_millimeter', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Specific Gravity']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('discharge_size_millimeter', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('flanges', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('Attachments[]', ['label' => false, 'type'=> 'file', 'multiple' => 'multiple']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('is_home', ['type' => 'checkbox']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('is_active', ['type' => 'checkbox']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
			</div>
		</div>     
        <?php echo $this->Form->end(); ?>
<br />
<br />