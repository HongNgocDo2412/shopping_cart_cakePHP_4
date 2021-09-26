<h2>Edit User</h2>

<div class="row">
    <div class="col-sm-5">
        <?= $this->Form->create($user) ?>
        <?php echo $this->Form->input('role', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('first_name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('last_name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('phone', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('email', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('login_count', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('active', ['type' => 'checkbox']); ?>
        <br />
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<br />
<br />

