<script>

$(document).ready(function() {

    $('.name').editable({
        type: 'text',
        name: 'name',
        url: '/admin/categories/editable',
        title: 'Name',
        placement: 'right',
    });

});

</script>

<h3>Categories</h3>

<?php echo $this->element('pagination'); ?>

<table class="table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('slug') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('sort') ?></th>
            <th><?= $this->Paginator->sort('active') ?></th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><span class="name" data-value="<?php echo $category->name; ?>" data-pk="<?php echo $category->id; ?>"><?php echo $category->name; ?></span></td>
                <td><?= h($category->slug) ?></td>
                <td><?= h($category->description) ?></td>
                <td><?= $this->Number->format($category->sort) ?></td>
                <td><?php echo $this->Html->link($this->Html->image('icon_' . $category->active . '.png'), ['controller' => 'categories', 'action' => 'toggle', 'active', $category->id], ['class' => 'toggle', 'escape' => false]); ?></td>
                <td class="actions">
                    <?php echo $this->Html->link('View', ['action' => 'view', $category->id], ['class' => 'btn btn-default btn-xs']); ?>
                    <?php echo $this->Html->link('Edit', ['action' => 'edit', $category->id], ['class' => 'btn btn-default btn-xs']); ?>
                   
                    <?php //echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)],['class' => 'btn btn-default btn-xs']); ?>
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
