<h2>Add Product</h2>

<br />
<br />
<!-- https://blueimp.github.io/jQuery-File-Upload/ -->
<div class="row">
    <div class="col-sm-5">
        <?= $this->Form->create($product) ?>
        <?php echo $this->Form->input('category_id', ['options' => $categories, 'empty' => true, 'class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('slug', ['class' => 'form-control', 'rows' => 8]); ?>
        <br />
        <?php echo $this->Form->input('title', ['class' => 'form-control', 'rows' => 8]); ?>
        <br />
        <?php echo $this->Form->input('keyword', ['class' => 'form-control', 'rows' => 8]); ?>
        <br />
        <?php echo $this->Form->input('meta_description', ['class' => 'form-control', 'rows' => 8]); ?>
        <br />
        <?php echo $this->Form->input('description', ['class' => 'form-control', 'rows' => 8]); ?>
        <br />
        <?php echo $this->Form->input('price', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('weight', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('quantity', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('motor_phase', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('stages', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('head', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('power_source	', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('brand', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('max_flow_rate', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('motor_speed', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('pump_size', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('temperature', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('frequency', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('discharge_size_millimeter', ['class' => 'form-control']);?>
        <br/>
        <?php echo $this->Form->input('flanges', ['class' => 'form-control']);?>
        <br />
        <?php echo $this->Form->input('active', ['type' => 'checkbox']); ?>
        <br />
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<br />
<br />