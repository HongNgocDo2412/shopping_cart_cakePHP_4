<h3>Productoptions</h3>

<?php echo $this->element('pagination'); ?>

<table class="table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('product_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th><?= $this->Paginator->sort('active') ?></th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productoptions as $productoption): ?>
            <tr>
                <td><?= $this->Number->format($productoption->id) ?></td>
                <td><?= $productoption->has('product') ? $this->Html->link($productoption->product->name, ['controller' => 'Products', 'action' => 'view', $productoption->product->id]) : '' ?></td>
                <td><?= h($productoption->name) ?></td>
                <td><?= $this->Number->format($productoption->price) ?></td>
                <td><?= $this->Number->format($productoption->active) ?></td>
                <td class="actions">
                    <?php echo $this->Html->link('View', ['action' => 'view', $productoption->id], ['class' => 'btn btn-default btn-xs']); ?>
                    <?php echo $this->Html->link('Edit', ['action' => 'edit', $productoption->id], ['class' => 'btn btn-default btn-xs']); ?>
                    <?php // echo $this->Form->postLink('Delete', ['action' => 'delete', $productoption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoption->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br />

<?php echo $this->element('pagination'); ?>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('New', ['action' => 'add'], ['class' => 'btn btn-default']) ?>

<br />
<br />
