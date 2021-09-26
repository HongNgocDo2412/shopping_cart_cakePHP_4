<h3><?= h($product->name) ?></h3>

<table class="table-striped table-bordered table-condensed table-hover">
    <tr>
        <th><?= __('Id') ?></th>
        <td><?= $this->Number->format($product->id) ?></td>
    </tr>
    <tr>
        <th><?= __('Category') ?></th>
        <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
    </tr>
    <tr>
        <th><?= __('Name') ?></th>
        <td><?= h($product->name) ?></td>
    </tr>
    <tr>
        <th><?= __('Slug') ?></th>
        <td><?= h($product->slug) ?></td>
    </tr>
    <tr>
        <th><?= __('Description') ?></th>
        <td><?= h($product->description) ?></td>
    </tr>
    <tr>
        <th><?= __('Image') ?></th>
        <td><?= h($product->image) ?></td>
    </tr>
    <tr>
        <th><?= __('Price') ?></th>
        <td><?= $this->Number->format($product->price) ?></td>
    </tr>
    <tr>
        <th><?= __('Weight') ?></th>
        <td><?= $this->Number->format($product->weight) ?></td>
    </tr>
    <tr>
        <th><?= __('Quantity') ?></th>
        <td><?= $this->Number->format($product->quantity) ?></td>
    </tr>
    <tr>
        <th><?= __('Created') ?></th>
        <td><?= h($product->created) ?></td>
    </tr>
    <tr>
        <th><?= __('Modified') ?></th>
        <td><?= h($product->modified) ?></td>
    </tr>
    <tr>
        <th><?= __('Active') ?></th>
        <td><?= $product->active; ?></td>
    </tr>
</table>

<br />
<br />


<h3>Actions</h3>

<?= $this->Html->link('Edit Product', ['action' => 'edit', $product->id], ['class' => 'btn btn-default']); ?>

<br />
<br />

<?= $this->Form->postLink('Delete Product', ['action' => 'delete', $product->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>

<br />
<br />


<h4>Related Productoptions</h4>

<?php if (!empty($product->productoptions)): ?>
    <table class="table-striped table-bordered table-condensed table-hover">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Product Id') ?></th>
            <th><?= __('Attribute Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Price') ?></th>
            <th><?= __('Price Prefix') ?></th>
            <th><?= __('Active') ?></th>
            <th class="actions">Actions</th>
        </tr>
        <?php foreach ($product->productoptions as $productoptions): ?>
            <tr>
                <td><?= h($productoptions->id) ?></td>
                <td><?= h($productoptions->product_id) ?></td>
                <td><?= h($productoptions->attribute_id) ?></td>
                <td><?= h($productoptions->name) ?></td>
                <td><?= h($productoptions->price) ?></td>
                <td><?= h($productoptions->price_prefix) ?></td>
                <td><?= h($productoptions->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link('View', ['controller' => 'Productoptions', 'action' => 'view', $productoptions->id], ['class' => 'btn btn-default btn-xs']); ?>
                    <?= $this->Html->link('Edit', ['controller' => 'Productoptions', 'action' => 'edit', $productoptions->id], ['class' => 'btn btn-default btn-xs']); ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productoptions', 'action' => 'delete', $productoptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoptions->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>