<?php
$title_for_layout = 'Order Review';
$description = 'Order Review';
$keywords = 'Order, Review';
$this->set(compact('title_for_layout', 'description', 'keywords'));
?>

<?php echo $this->Html->script(['jquery.validate.js', 'additional-methods.js', 'order_review.js'], ['block' => 'script']); ?>

<h1>Review And Place Your Order</h1>

<hr>

<div class="row">
    <div class="col col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Customer Info
            </div>
            <div class="panel-body">
                <?php echo $shop['Order']['first_name'];?> <?php echo $shop['Order']['last_name'];?><br />
                Email: <?php echo $shop['Order']['email'];?><br />
                Phone: <?php echo $shop['Order']['phone'];?>
                <br />
                <br />
            </div>
        </div>
    </div>
    <div class="col col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Billing Address
            </div>
            <div class="panel-body">
                <?php echo $shop['Order']['first_name'];?> <?php echo $shop['Order']['last_name'];?><br />
                <?php echo $shop['Order']['shipping_address'];?><br />
                <?php echo $shop['Order']['billing_address2'];?><br />
                <?php echo $shop['Order']['billing_city'];?>,  <?php //echo $shop['Order']['billing_state'];?> <br />

            </div>
        </div>
    </div>
    <!-- <div class="col col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Shipping Address
            </div>
            <div class="panel-body">
                <?php // echo $shop['Order']['first_name'];?> <?php //echo $shop['Order']['last_name'];?><br />
                <?php //echo $shop['Order']['shipping_address'];?><br />
                <?php //echo $shop['Order']['shipping_address2'];?><br />
                <?php //echo $shop['Order']['shipping_city'];?>,  <?php echo $shop['Order']['shipping_state'];?><br />
            </div>
        </div>
    </div> -->
</div>

<hr>

<div class="row small">
    <div class="col col-sm-1">#</div>
    <div class="col col-sm-8">ITEM</div>
    <div class="col col-sm-1">PRICE</div>
    <div class="col col-sm-1" style="text-align: right;">QUANTITY</div>
    <div class="col col-sm-1" style="text-align: right;">SUBTOTAL</div>
</div>

<br />
<br />

<?php foreach ($shop['Orderproducts'] as $item): ?>
<div class="row">
    <div class="col col-sm-1"><?php echo $this->Html->image( $item['image'], ['height' => 60, 'class' => 'img-fluid']); ?></div>
    <div class="col col-sm-8">
    <?php echo $item['name']; ?>
    <?php if(isset($item['productoption_name'])) : ?>
    <br />
    <small><?php echo $item['productoption_name']; ?></small>
    <?php endif; ?>
    </div>
    <div class="col col-sm-1">$<?php echo $item['price']; ?></div>
    <div class="col col-sm-1" style="text-align: right;"><?php echo $item['quantity']; ?></div>
    <div class="col col-sm-1" style="text-align: right;">$<?php echo $item['subtotal']; ?></div>
</div>
<?php endforeach; ?>

<hr>

<div class="row">
    <div class="col col-sm-12 tr">
        <strong>Order Summary:</strong><br />
        Subtotal: $<?php echo $shop['Order']['subtotal']; ?><br />
        Sales Tax: $<?php echo $shop['Order']['tax']; ?><br />
        <br />
        <big><strong>Order Total: <span class="textred">$<?php echo $shop['Order']['total']; ?></span></strong></big><br />
    </div>
</div>

<hr>

<br />

<?php echo $this->Form->create($order, ['id' => 'OrderReviewForm']); ?>

<div class="row">
    <div class="col col-sm-4">
        <?php echo $this->Form->control('comment', ['label' => 'Add comments about your order', 'rows' => 3, 'class' => 'form-control ccinput']); ?>
    </div>
</div>

<br />
<br />

<br />
<br />

<?php echo $this->Form->button(' Place your order', ['class' => 'btn btn-success', 'ecape' => false]); ?>

<?php echo $this->Form->end(); ?>

<br />
<br />
