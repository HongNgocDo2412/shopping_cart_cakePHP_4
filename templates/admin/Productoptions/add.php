<h2>Add Productoption</h2>

<br />
<br />

<div class="row">
    <div class="col-sm-5">
        <?= $this->Form->create($productoption) ?>
        <?php echo $this->Form->control('product_id', ['options' => $products, 'empty' => true, 'class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('price', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->control('active', ['type' => 'checkbox']); ?>
        <br />
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<br />
<br />
