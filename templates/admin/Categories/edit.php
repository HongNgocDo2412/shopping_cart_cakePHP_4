<h2>Edit Category</h2>

<br />
<br />

<div class="row">
    <div class="col-sm-5">
        <?= $this->Form->create($category) ?>

        <?php echo $this->Form->input('name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('slug', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('description', ['class' => 'form-control', 'rows' => 8]); ?>
        <br />
        <?php echo $this->Form->input('sort', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('active', ['type' => 'checkbox']); ?>
        <br />
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<br />
<br />