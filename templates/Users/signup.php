<h1>Sign Up</h1>

<br />

<div class="row">
    <div class="col-sm-5">

        <?php echo $this->Form->create($user, ['novalidate' => true]); ?>

        <?php echo $this->Form->control('first_name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('last_name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('phone', ['type' => 'tel', 'class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('email', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('password', ['label' => 'Choose a Password', 'class' => 'form-control']); ?>

        <br />
        <small>By clicking Sign Up, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</small>
        <br />
        <br />
        <?php echo $this->Form->button('SIGN UP', ['class' => 'btn btn-default btn-block']); ?>
        <?php echo $this->Form->end(); ?>

    </div>
</div>

<br />
