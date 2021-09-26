<h2>Add Product</h2>

<br />
<br />

<div class="row">
    <div class="col-sm-5">
        <?= $this->Form->create($product) ?>
        <?php echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true, 'class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('slug', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('description', ['class' => 'form-control', 'rows' => 8]); ?>
        <br />
        <?php echo $this->Form->control('image', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('price', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('weight', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('quantity', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('active', ['type' => 'checkbox']); ?>
        <br />
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<br />
<br />

