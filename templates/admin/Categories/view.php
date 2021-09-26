<h3><?= h($category->name) ?></h3>

<table class="table-striped table-bordered table-condensed table-hover">
    <tr>
        <th><?= __('Id') ?></th>
        <td><?= $this->Number->format($category->id) ?></td>
    </tr>
    <tr>
        <th><?= __('Name') ?></th>
        <td><?= h($category->name) ?></td>
    </tr>
    <tr>
        <th><?= __('Slug') ?></th>
        <td><?= h($category->slug) ?></td>
    </tr>
    <tr>
        <th><?= __('Description') ?></th>
        <td><?= h($category->description) ?></td>
    </tr>
    <tr>
        <th><?= __('Sort') ?></th>
        <td><?= $this->Number->format($category->sort) ?></td>
    </tr>
    <tr>
        <th><?= __('Active') ?></th>
        <td><?= $this->Number->format($category->active) ?></td>
    </tr>
    <tr>
        <th><?= __('Created') ?></th>
        <td><?= h($category->created) ?></td>
    </tr>
    <tr>
        <th><?= __('Modified') ?></th>
        <td><?= h($category->modified) ?></td>
    </tr>
</table>

<br />

<h3>Actions</h3>

<?= $this->Html->link('Edit Category', ['action' => 'edit', $category->id], ['class' => 'btn btn-default']); ?>

<br />
<br />
<?= $this->Form->postLink('Delete Category', ['action' => 'delete', $category->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>

<br />
<br />
<br />
<br />

<h4>Related Products</h4>
<?php if (!empty($category->products)): ?>
    <table class="table-striped table-bordered table-condensed table-hover">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Category Id') ?></th>
            <th><?= __('Slug') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Image') ?></th>
            <th><?= __('Price') ?></th>
            <th><?= __('Weight') ?></th>
            <th><?= __('Quantity') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($category->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->category_id) ?></td>
                <td><?= h($products->slug) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->description) ?></td>
                <td><?= h($products->image) ?></td>
                <td><?= h($products->price) ?></td>
                <td><?= h($products->weight) ?></td>
                <td><?= h($products->quantity) ?></td>
                <td><?= h($products->status) ?></td>
                <td><?= h($products->created) ?></td>
                <td><?= h($products->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id], ['class' => 'btn btn-default btn-xs']); ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id], ['class' => 'btn btn-default btn-xs']); ?>
                    
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

