<?php
$title_for_layout = 'CakePHP 3 Shopping Cart';
$description = 'CakePHP 3 Shopping Cart';
$keywords = 'CakePHP 3 Shopping Cart';
$this->set(compact('title_for_layout', 'description', 'keywords'));
?>


<section class="awe-section-3 clearfix">
	
<div class="section section_tab_product a-center products-view-grid">
	<div class="container">
		<div class="section-title">
			<h2>
				Must-Read Books
			</h2>
		</div>
		<div class="e-tabs not-dqtab">
			<div class="row row-noGutter">
				<div class="col-sm-12">
					<div class="content">
						<div>
							<ul class="tabs tabs-title tab-mobile clearfix hidden-sm hidden-md hidden-lg">
								<li class="prev current"><i class="fa fa-angle-left"></i></li>
								<li class="tab-link tab-title hidden-sm hidden-md hidden-lg current" id="tab-titlexx" data-tab="tab-1">
									<span>New Arrivals</span>
								</li>
								<li class="next"><i class="fa fa-angle-right"></i></li>
							</ul>
							<ul class="tabs tabs-title clearfix hidden-xs">
								
								
								
								
								<li class="tab-link current" data-tab="tab-1">
									<span>New Arrivals</span>
								</li>
								
								
								
								
								
								<li class="tab-link" data-tab="tab-2">
									<span>New Releases</span>
								</li>
								
								
								
								
								
								<li class="tab-link" data-tab="tab-3">
									<span>Best Sellers</span>
								</li>						
							</ul>	
							
							<div id="tab-1" class="tab-content current">
								<div class="products products-view-grid ">
									<div class="row row-noGutter">
										<div class="col-sm-12 col-md-6 hidden-sm hidden-xs">
											<div class="banner">
												<a href="">
													<img src="//bizweb.dktcdn.net/100/282/917/themes/637314/assets/featured_banner_1.png?1600540725432" alt="New Arrivals">
												</a>
											</div>
										</div>
										<?php foreach ($products as $products): ?>
										<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                            										
                                       
                                            <div class="product-box">
                                                <div class="product-thumbnail relative">
                                                    <div class="reviews absolute">
                                                        <div class="bizweb-product-reviews-badge" data-id="22083784"><div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div><div><img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17"></div></div>
                                                    </div>
                                                    
                                                    <a href="/bookstore/shop/<?php echo $products->id?>">
                                                        
                                                    <img src="http://localhost:8888/bookstore/webroot/img/<?php echo $products->image;?>" data-lazyload="http://localhost:8888/bookstore/webroot/img/<?php echo $products->image;?>" alt="World History 101: From Ancient Mesopotamia and the Viking Conquests to NATO and WikiLeaks, An Essential Primer on World History (Adams 101) by">
                                                        
                                                    </a>

                                                    <div class="product-action clearfix">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-22083784" enctype="multipart/form-data">
                                                            <div>
                                                                
                                                                <input type="hidden" name="variantId" value="47724381">
                                                                <button class="btn-buy btn-cart btn btn-circle left-to add_to_cart " data-toggle="tooltip" title="Thêm vào giỏ hàng">
                                                                    <i class="lnr lnr-cart"></i>
                                                                </button>
                                                                

                                                                
                                                                <a data-toggle="tooltip" title="Yêu thích" class="btn btn-circle iWishAdd iwishAddWrapper" href="javascript:;" data-customer-id="0" data-product="22083784" data-variant="47724381"><i class="fa fa-heart-o"></i></a>
                                                                <a data-toggle="tooltip" title="Bỏ yêu thích" class="btn btn-circle iWishAdded iwishAddWrapper iWishHidden" href="javascript:;" data-customer-id="0" data-product="22083784" data-variant="47724381"><i class="fa fa-heart"></i></a>
                                                                
                                                                
                                                                <a data-toggle="tooltip" title="Xem nhanh" href="#" data-handle="world-history-101-from-ancient-mesopotamia-and-the-viking-conquests-to-nato-and-wikileaks-an-essential-primer-on-world-history-adams-101-by" class="btn-circle btn_view btn  right-to quick-view">
                                                                    <i class="lnr lnr-move"></i>
                                                                </a>
                                                                

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product-info a-center">
                                                    <h3 class="product-name"><a href="/world-history-101-from-ancient-mesopotamia-and-the-viking-conquests-to-nato-and-wikileaks-an-essential-primer-on-world-history-adams-101-by" title="World History 101: From Ancient Mesopotamia and the Viking Conquests to NATO and WikiLeaks, An Essential Primer on World History (Adams 101) by"><?php echo $products->name?></a></h3>
                                                    
                                                    <span>Hardcover</span>
                                                    
                                                    
                                                    
                                                    <div class="price-box clearfix">

                                                        <div class="special-price">
                                                            <span class="price product-price"><span class="money"><?php echo $products->price?></span></span>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>


                                            </div>
                                            
										</div>
										<?php endforeach; ?>
										
										<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
											<div class="product-box">
												<div class="product-thumbnail relative">													
													<a href="/notable-books" title="Xem thêm">
														<i class="fa fa-caret-right" style="font-size: 72px;color: #5c5c5c;"></i>
													</a>


												</div>
												<div class="product-info a-center">
													<h3 class="product-name"><a href="/notable-books" title="Xem thêm">Xem thêm sản phẩm</a></h3>


												</div>


											</div>
										</div>
									</div>
								</div><!-- /.products -->
							</div>
					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>