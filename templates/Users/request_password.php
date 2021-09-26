<br />

<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Reset Password</h3>
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('User'); ?>
                <?php echo $this->Form->input('password', array('label' => 'New Password', 'autofocus'=>'autofocus', 'class' => 'form-control')); ?>
                <br />
                <?php echo $this->Form->button('Reset Password', array('class' => 'btn btn-default')); ?>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>

<br />
<br />

<!-- <div class="btn-group">
    <a href="/login" class="btn btn-default btn-sm active">Sign in</a>
    <a href="/register" class="btn btn-default btn-sm">New Account</a>
</div>
 -->
