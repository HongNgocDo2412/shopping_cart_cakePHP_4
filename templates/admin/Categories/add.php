<h2>Add Category</h2>

<br />
<br />

<div class="row">
    <div class="col-sm-5">
        <?= $this->Form->create($category) ?>

        <?php echo $this->Form->control('name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('slug', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('description', ['class' => 'form-control', 'rows' => 8]); ?>
        <br />
        <?php echo $this->Form->control('sort', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('active', ['type' => 'checkbox']); ?>
        <br />
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<br />
<br />

