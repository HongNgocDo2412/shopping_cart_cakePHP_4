<?php
$title_for_layout = $product->name;
$description = $product->name;
$keywords = $product->name;
$this->set(compact('title_for_layout', 'description', 'keywords'));
?>

<?php $this->Breadcrumbs->add('Shop', ['controller' => 'products', 'action' => 'index', '_full' => true]); ?>
<?php $this->Breadcrumbs->add($product->category->name, ['controller' => 'categories', 'action' => 'view', $product->category->slug, '_full' => true]); ?>
<?php $this->Breadcrumbs->add($product->name, ['controller' => 'products', 'action' => 'view', $product->slug, '_full' => true]); ?>

<br />
<br />

<div itemscope itemtype="http://schema.org/Product">
   
    <div class="row">
        <div class="col-md-6 col-sm-12" >
           
            <img src="http://localhost:8888/bookstore/webroot/img/<?php echo $product->image;?> " style = "width:400px; height:550px;">
            <br />
            <br />
        </div>
        <div class="col-md-6 col-sm-12">
            <?php echo $this->Form->create(NULL, ['url' => ['controller' => 'products', 'action' => 'add']]); ?>
            <?php echo $this->Form->input('id', ['type' => 'hidden', 'value' => $product->id]); ?>
           
   
            <?php // print_r($productoptions); ?>

            <?php if(!empty($productoptionlists)): ?>
                <div class="row">
                    <div class="col-sm-12">
                        <?php if(!empty($productoptions)): ?>
                            <?php echo $this->Form->input('productoptionlist', ['label' => false, 'class' => 'form-control']); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <br />
                <input type="hidden" id="modselected" value="" />

            <?php endif;?>
            <h1 itemprop="name"><?php echo $product->name; ?></h1>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

            <strong>Gia:  <span itemprop="priceCurrency" id="pricecurrency" content="USD">$</span><span id="price" itemprop="price" content="<?php echo number_format($product->price, 2); ?>"><?php echo number_format($product->price, 2); ?></span></strong>

            <link itemprop="availability" href="http://schema.org/InStock" />

            </div>

            <br />
            <link rel="stylesheet" type="text/css" href="http://localhost:8888/bookstore/webroot/css/style.css">
            <?php echo $this->Form->button(' Add to Cart', ['class' => 'btn btn-success btn-sm', 'id' => 'addtocart', 'escape' => false]);?>
                <div class="model-container"> 
                    <div class ="model">
                        <h1>Bạn đã thêm sản phảm thành công</h1>
                    
                        <button id = "continue">
                            Continue Shopping
                        </button>
                        <button id = "go-to-cart">
                            Go to Cart
                        </button>
                     </div>
                </div>  
            <?php echo $this->Form->end(); ?>

            <br />

            <span itemprop="description"><?php echo $product->description; ?></span>

            <br />
            <br />

            <small>Category: <?php echo $this->Html->link($product->category->name, ['controller' => 'categories',  'action' => 'view', $product->category->slug]); ?></small>

            <br />
            <br />

            <small><?php echo $product->name; ?></small>

            <br />
            <br />

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <small>

            <?php if(!empty($productoptionlists)): ?>

            <table class="table-bordered table-condensed table-hover">
            <?php foreach($productoptionlists as $key => $value): ?>
            <tr>
                <td>
                    <?php echo $this->Form->create(NULL, ['url' => ['controller' => 'products', 'action' => 'add']]); ?>
                    <?php echo $this->Form->input('id', ['type' => 'hidden', 'value' => $product->id]); ?>
                    <?php echo $this->Form->input('productoptionlist', ['type' => 'hidden', 'value' => $key]); ?>
                    <?php echo $value; ?>
                </td>
                <td>
                    <?php echo $this->Form->button('<i class="fa fa-cart-plus"></i> &nbsp; Add to Cart', ['class' => 'btn btn-success btn-xs', 'id' => 'addtocart', 'escape' => false]);?>
                    <?php echo $this->Form->end(); ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </table>
            <?php endif; ?>

            </small>
        </div>
    </div>
</div>

<input type="hidden" id="product_price" name="product_price" value="<?php echo sprintf('%01.2f', $product->price); ?>" />

<br />








