<h3>Order: <?= h($order->id) ?></h3>

<table class="table-striped table-bordered table-condensed table-hover">
    <tr>
        <th><?= __('Id') ?></th>
        <td><?= $order->id; ?></td>
    </tr>
    <tr>
        <th><?= __('First Name') ?></th>
        <td><?= h($order->first_name) ?></td>
    </tr>
    <tr>
        <th><?= __('Last Name') ?></th>
        <td><?= h($order->last_name) ?></td>
    </tr>
    <tr>
        <th><?= __('Email') ?></th>
        <td><?= h($order->email) ?></td>
    </tr>
    <tr>
        <th><?= __('Phone') ?></th>
        <td><?= h($order->phone) ?></td>
    </tr>
    <tr>
        <th><?= __('Billing Address') ?></th>
        <td><?= h($order->billing_address) ?></td>
    </tr>
    <tr>
        <th><?= __('Billing Address2') ?></th>
        <td><?= h($order->billing_address2) ?></td>
    </tr>
    <tr>
        <th><?= __('Billing City') ?></th>
        <td><?= h($order->billing_city) ?></td>
    </tr>
    <tr>
        <th><?= __('Billing Zip') ?></th>
        <td><?= h($order->billing_zip) ?></td>
    </tr>
    <tr>
        <th><?= __('Billing State') ?></th>
        <td><?= h($order->billing_state) ?></td>
    </tr>
    <tr>
        <th><?= __('Billing Country') ?></th>
        <td><?= h($order->billing_country) ?></td>
    </tr>
    <tr>
        <th><?= __('Shipping Address') ?></th>
        <td><?= h($order->shipping_address) ?></td>
    </tr>
    <tr>
        <th><?= __('Shipping Address2') ?></th>
        <td><?= h($order->shipping_address2) ?></td>
    </tr>
    <tr>
        <th><?= __('Shipping City') ?></th>
        <td><?= h($order->shipping_city) ?></td>
    </tr>
    <tr>
        <th><?= __('Shipping Zip') ?></th>
        <td><?= h($order->shipping_zip) ?></td>
    </tr>
    <tr>
        <th><?= __('Shipping State') ?></th>
        <td><?= h($order->shipping_state) ?></td>
    </tr>
    <tr>
        <th><?= __('Shipping Country') ?></th>
        <td><?= h($order->shipping_country) ?></td>
    </tr>
    <tr>
        <th><?= __('Shipping Method') ?></th>
        <td><?= h($order->shipping_method) ?></td>
    </tr>
    <tr>
        <th><?= __('Payment Method') ?></th>
        <td><?= h($order->payment_method) ?></td>
    </tr>
    <tr>
        <th><?= __('Creditcard Number') ?></th>
        <td><?= h($order->creditcard_number) ?></td>
    </tr>
    <tr>
        <th><?= __('Creditcard Code') ?></th>
        <td><?= h($order->creditcard_code) ?></td>
    </tr>
    <tr>
        <th><?= __('Creditcard Year') ?></th>
        <td><?= h($order->creditcard_year) ?></td>
    </tr>
    <tr>
        <th><?= __('Creditcard Month') ?></th>
        <td><?= h($order->creditcard_month) ?></td>
    </tr>
    <tr>
        <th><?= __('Authorization') ?></th>
        <td><?= h($order->authorization) ?></td>
    </tr>
    <tr>
        <th><?= __('Transaction') ?></th>
        <td><?= h($order->transaction) ?></td>
    </tr>
    <tr>
        <th><?= __('Status') ?></th>
        <td><?= h($order->status) ?></td>
    </tr>
    <tr>
        <th><?= __('Ip Address') ?></th>
        <td><?= h($order->ip_address) ?></td>
    </tr>
    <tr>
        <th><?= __('Weight') ?></th>
        <td><?= $order->weight ?></td>
    </tr>
    <tr>
        <th><?= __('Order Item Count') ?></th>
        <td><?= $order->order_item_count ?></td>
    </tr>
    <tr>
        <th><?= __('Subtotal') ?></th>
        <td><?php echo $order->subtotal; ?></td>
    </tr>
    <tr>
        <th><?= __('Tax') ?></th>
        <td><?php echo $order->tax; ?></td>
    </tr>
    <tr>
        <th><?= __('Shipping') ?></th>
        <td><?php echo $order->shipping; ?></td>
    </tr>
    <tr>
        <th><?= __('Total') ?></th>
        <td><?php echo $order->total; ?></td>
    </tr>
    <tr>
        <th><?= __('Comment') ?></th>
        <td><?= $order->comment ?></td>
    </tr>
    <tr>
        <th><?= __('Note') ?></th>
        <td><?= $order->note ?></td>
    </tr>
    <tr>
        <th><?= __('Referer_Cookie') ?></th>
        <td><?= h($order->referer_cookie) ?></td>
    </tr>
    <tr>
        <th><?= __('Referer_Session') ?></th>
        <td><?= h($order->referer_session) ?></td>
    </tr>
    <tr>
        <th><?= __('Request_Uri') ?></th>
        <td><?= h($order->request_uri) ?></td>
    </tr>
    <tr>
        <th><?= __('Created') ?></th>
        <td><?= h($order->created) ?></td>
    </tr>
    <tr>
        <th><?= __('Modified') ?></th>
        <td><?= h($order->modified) ?></td>
    </tr>
</table>

<br />
<br />

<h3><?= __('Actions') ?></h3>
<?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id], ['class' => 'btn btn-default']); ?>
<br />
<br />
<?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>

<br />
<br />

<h4><?= __('Related Orderproducts') ?></h4>
<?php if (!empty($order->orderproducts)): ?>
    <table class="table-striped table-bordered table-condensed table-hover">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Order Id') ?></th>
            <th><?= __('Product Id') ?></th>
            <th><?= __('Productoption Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Productoption Name') ?></th>
            <th><?= __('Quantity') ?></th>
            <th><?= __('Weight') ?></th>
            <th><?= __('Price') ?></th>
            <th><?= __('Subtotal') ?></th>
            <th><?= __('Note') ?></th>
            <th><?= __('Created') ?></th>
            <th class="actions">Actions</th>
        </tr>
        <?php foreach ($order->orderproducts as $orderproducts): ?>
            <tr>
                <td><?= h($orderproducts->id) ?></td>
                <td><?= h($orderproducts->order_id) ?></td>
                <td><?= h($orderproducts->product_id) ?></td>
                <td><?= h($orderproducts->productoption_id) ?></td>
                <td><?= h($orderproducts->name) ?></td>
                <td><?= h($orderproducts->productoption_name) ?></td>
                <td><?= h($orderproducts->quantity) ?></td>
                <td><?= h($orderproducts->weight) ?></td>
                <td><?= number_format($orderproducts->price, 2) ?></td>
                <td><?= number_format($orderproducts->subtotal, 2) ?></td>
                <td><?= h($orderproducts->note) ?></td>
                <td><?= h($orderproducts->created) ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['controller' => 'Orderproducts', 'action' => 'view', $orderproducts->id], ['class' => 'btn btn-default btn-xs']); ?>
                    <?php echo $this->Html->link(__('Edit'), ['controller' => 'Orderproducts', 'action' => 'edit', $orderproducts->id], ['class' => 'btn btn-default btn-xs']); ?>
                    <?php // echo $this->Form->postLink(__('Delete'), ['controller' => 'Orderproducts', 'action' => 'delete', $orderproducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderproducts->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

