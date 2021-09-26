<h2>Edit Productoption</h2>

<br />
<br />

<div class="row">
    <div class="col-sm-5">
        <?= $this->Form->create($productoption) ?>
        <?php echo $this->Form->input('product_id', ['options' => $products, 'empty' => true, 'class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('name', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('price', ['class' => 'form-control']); ?>
        <br />
        <?php echo $this->Form->input('active', ['type' => 'checkbox']); ?>
        <br />
        <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary']); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<br />
<br />
