<h2>Admin Edit User Password</h2>

<br />

<div class="row">
    <div class="col-sm-4">

        <?php echo $this->Form->create($user);?>
        <?php echo $this->Form->input('id', ['class' => 'form-control']); ?>
        <?php echo $this->Form->input('password', ['class' => 'form-control input-sm', 'value' => '']); ?>
        <br />
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']) ;?>
        <?php echo $this->Form->end();?>

    </div>
</div>