<?php $this->set('title_for_layout', 'Address'); ?>

<?php echo $this->Html->script(['order_address.js'], ['block' => 'script']); ?>

<h1>Address</h1>

<?php echo $this->Form->create($order); ?>

<hr>

<div class="row">
    <div class="col col-sm-4">

        <?php echo $this->Form->control('first_name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('last_name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('email', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('phone', ['class' => 'form-control']); ?>
        <br />
        <br />

    </div>
    <div class="col col-sm-4">

        <?php echo $this->Form->control('shipping_address', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('billing_address2', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('billing_city', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('shipping_state', ['options' => $this->Site->states(), 'empty' => 'Please Select', 'class' => 'form-control']); ?>
        <br />
        <br />

        

    </div>
    <!-- <div class="col col-sm-4">

        <?php// echo $this->Form->control('shipping_address', ['class' => 'form-control']); ?>
        <br />
        <?php //echo $this->Form->control('shipping_address2', ['class' => 'form-control']); ?>
        <br />
        <?php //echo $this->Form->control('shipping_city', ['class' => 'form-control']); ?>
        <br />
        <?php //echo $this->Form->control('shipping_state', ['options' => $this->Site->states(), 'empty' => 'Please Select', 'class' => 'form-control']); ?>
        <br />
        <br />

    </div> -->
</div>

<br />

<?php echo $this->Form->button(' Continue', ['class' => 'btn btn-success btn-sm', 'escape' => false]);?>
<?php echo $this->Form->end(); ?>

