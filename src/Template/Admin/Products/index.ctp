<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('Add', ['action' => 'add'], ['class' => 'btn btn-primary']) ?>

<br />
<br />
<script>

$(document).ready(function() {

    $('.category_id').editable({
        type: 'select',
        name: 'category_id',
        url: '/admin/products/editable',
        title: 'Category',
        source: <?php echo json_encode($categories); ?>,
        placement: 'right',
    });

    $('.name').editable({
        type: 'text',
        name: 'name',
        url: '/admin/products/editable',
        title: 'name',
        placement: 'right',
    });

    $('.slug').editable({
        type: 'text',
        name: 'slug',
        url: '/admin/products/editable',
        title: 'slug',
        placement: 'right',
    });

    $('.price').editable({
        type: 'text',
        name: 'price',
        url: '/admin/products/editable',
        title: 'price',
        placement: 'left',
    });

});

</script>

<h3>Products</h3>

<?php echo $this->element('pagination'); ?>

<table class="table-striped table-bordered table-sm table-hover">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('price', 'Moc') ?></th>
			<th><?= $this->Paginator->sort('is_home') ?></th>
            <th><?= $this->Paginator->sort('active') ?></th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><span class="category_id" data-value="<?php echo $product->category_id; ?>" data-pk="<?php echo $product->id; ?>"><?php echo $product->category->name; ?></span></td>
                <td><span class="name" data-value="<?php echo $product->name; ?>" data-pk="<?php echo $product->id; ?>"><?php echo $product->name; ?></span></td>
                <td><?php echo $product->price; ?></span></td>
				<td><?= ($product->is_home == 1) ? 'Yes': 'No'; ?></td>
                <td><?php //echo $this->Html->link('Change To ' . (($product->active == true) ? 'Inactive' : 'Active'), ['controller' => 'products', 'action' => 'toggle', 'active', $product->id], ['class' => 'toggle', 'escape' => false]); ?><?php echo ($product->active == true) ? 'Inactive' : 'Active'; ?></td>
                <td class="actions">
                    <?= $this->Html->link('Edit', ['action' => 'edit', $product->id], ['class' => 'btn btn-default btn-xs']); ?>
					<?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br />

<?php echo $this->element('pagination'); ?>