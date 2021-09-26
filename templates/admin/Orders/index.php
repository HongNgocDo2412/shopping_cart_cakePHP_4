<script>

$(document).ready(function() {

    $('.note').editable({
        type: 'textarea',
        name: 'note',
        url: '/admin/orders/editable',
        title: 'note',
        placement: 'left',
    });

});

</script>

<h3>Orders</h3>

<?php echo $this->element('pagination'); ?>

<table class="table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('phone') ?></th>
            <th><?= $this->Paginator->sort('total') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('note') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->id) ?></td>
                <td><?= h($order->first_name) ?></td>
                <td><?= h($order->last_name) ?></td>
                <td><?= h($order->email) ?></td>
                <td><?= h($order->phone) ?></td>
                <td>$<?= h($order->total) ?></td>
                <td><?= h($order->created) ?></td>
                <td><span class="note" data-value="<?php echo $order->note; ?>" data-pk="<?php echo $order->id; ?>"><?php echo $order->note; ?></span></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->id], ['class' => 'btn btn-default btn-xs']); ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id], ['class' => 'btn btn-default btn-xs']); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->element('pagination'); ?>