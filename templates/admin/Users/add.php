<h2>Add User</h2>

<div class="row">
    <div class="col-sm-5">

        <?= $this->Form->create($user) ?>
        <?php echo $this->Form->control('role', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('first_name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('last_name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('phone', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('email', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('active', ['type' => 'checkbox']); ?>
        <br />
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>

    </div>
</div>

<br />
<br />