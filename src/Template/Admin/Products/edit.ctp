<h2>Edit Product</h2>

<br />
<br />

<div class="row">
    <div class="col-sm-5">
        <?= $this->Form->create($product, ['class' => 'form-horizontal' , 'enctype' => 'multipart/form-data']) ?>
        <div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('category_id', ['options' => $categories, 'default' => 1, 'class' => 'form-control', 'label' => 'Pump Type']); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('name', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Pump Model']); ?>
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
			  <?php echo $this->Form->input('power_source', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Discharge M3/hr']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('brand', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Efficiency']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('max_flow_rate', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Suction and Delivery']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('motor_speed', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Motor Power BKW']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('pump_size', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required', 'label' => 'Power MKW']);?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('temperature', ['class' => 'form-control', 'type'=> 'text', 'required' => 'required']);?>
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
				<table>
					<tr>
						<td><b>Images</b><br><br></td>
					</tr>
					<tr>
					<?php
						if ($product->attachments) {
							$i = 0;
							foreach($product->attachments as $attachments) {
								if($i % 3 == 0) {
									echo '</tr><tr>';
								}
								echo '<td><img src="'.$this->App->imageResize('304', 'Products', $attachments).'" class="img-thumbnail"/><br><br><center><button type="button" class="btn btn-danger delete-attachment" attr-id="'.$attachments->id.'">Delete</button></center><td>';
								$i++;
							}
						} else {
							echo '<td>No Images</td>';
						}
					  ?>
					 </tr> 
				</table>	 
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
			  <?php echo $this->Form->input('Attachments[]', ['label' => false, 'type'=> 'file', 'multiple' => 'multiple' ]);?>
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
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<br />
<br />
