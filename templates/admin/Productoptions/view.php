<h3><?= h($productoption->name) ?></h3>

<table class="table-striped table-bordered table-condensed table-hover">
    <tr>
        <th>Id</th>
        <td><?= $this->Number->format($productoption->id) ?></td>
    </tr>
    <tr>
        <th>Product</th>
        <td><?= $productoption->has('product') ? $this->Html->link($productoption->product->name, ['controller' => 'Products', 'action' => 'view', $productoption->product->id]) : '' ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?= h($productoption->name) ?></td>
    </tr>
    <tr>
        <th>Price</th>
        <td><?= $this->Number->format($productoption->price) ?></td>
    </tr>
    <tr>
        <th>Active</th>
        <td><?= $this->Number->format($productoption->active) ?></td>
    </tr>
</table>

<h3>Actions</h3>

<?= $this->Html->link('Edit Productoption', ['action' => 'edit', $productoption->id], ['class' => 'btn btn-default']); ?>

<br />
<br />

<?= $this->Form->postLink('Delete Productoption', ['action' => 'delete', $productoption->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $productoption->id)]) ?>

<br />
<br />