
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orderproducts'), ['controller' => 'Orderproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orderproduct'), ['controller' => 'Orderproducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
              echo $this->Form->control('first_name');
              echo $this->Form->control('last_name');
              echo $this->Form->control('email');
              echo $this->Form->control('phone');
              echo $this->Form->control('order_item_count');
              echo $this->Form->control('subtotal');
              echo $this->Form->control('tax');
              echo $this->Form->control('shipping');
              echo $this->Form->control('total');
              echo $this->Form->control('authorization');
              echo $this->Form->control('transaction');
              echo $this->Form->control('status');
              echo $this->Form->control('ip_address');
              echo $this->Form->control('comment');
              echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

