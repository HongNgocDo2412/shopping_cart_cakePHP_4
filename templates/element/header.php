<div class="header-content">
		<div class="container relative">
			<div class=" col-md-2 hidden-sm hidden-xs">
				<div class="logo">
					
					<a href="" class="logo-wrapper ">
						<img src="//bizweb.dktcdn.net/100/282/917/themes/637314/assets/logo.png?1600540725432" alt="logo ">
					</a>
					

				</div>
			</div>
			<div class=" col-md-10">
				<div class="topbar a-center hidden-sm hidden-xs">
					<ul class="list-inline">
						
						<li><a href="/collections/all">All Books</a></li>
						
						<li><a href="/about-boa-bookstore">About BOA Bookstore</a></li>
						
						<li><a href="/order-books">Order Books</a></li>
						
						<li><a href="/book-donation">Book Donation</a></li>
						
						<li><a href="/book-review">Book Review</a></li>
						
					</ul>
				</div>
				<div class="header-main">
					<div class="row row-noGutter">
						<div class="col-xs-12 col-md-12">
							<div class="top-cart-contain f-right navfixmobile">
								<div class="header-block-item mini-cart text-xs-center pull-right">
									<div class="heading-cart header-cricle">																	
										<a href="http://localhost:8888/bookstore/products/cart" class="cart-label header-icon">
											<span class="lnr lnr-cart"></span>
											<?php if($this->request->getSession()->read('Shop')) : ?>
											<div class="cart-info">
												<span class="cartCount count_item_pr" id="cart-total"><?php echo $this->request->getSession()->read('Shop.Order.quantity'); ?></span>
											</div>
											<?php endif; ?>
										</a>
										<span class="block">Giỏ hàng</span>
									</div>
									<!-- <div class="top-cart-content hidden-md hidden-sm hidden-xs">
										<ul id="cart-sidebar" class="mini-products-list count_li"><div class="no-item">
									
										</div></ul>
									</div> -->
								</div>
								<div class="header-block-item mini-cart  account margin-right-20 text-xs-center pull-right">
									<div class="header-cricle">
										<a href="javascript:;" class="cart-label header-icon">
											<span class="lnr lnr-user"></span>
										</a>
										<span class="block">Tài khoản</span>
									</div>
									<div class="top-cart-content">
										<ul>
											
											<li><a href="<?= $this->Url->build(['controller'=>'Users','action'=>'login'])?>"><i class="fa fa-sign-in"></i> Đăng nhập
												</a></li>
											<li><a href="<?= $this->Url->build(['controller'=>'Users','action'=>'signup'])?>"><i class="fa fa-edit"></i> Đăng ký
												</a></li>
											
										</ul>
									</div>
								</div>
								
								<div class="header-block-item mini-cart account margin-right-20 text-xs-center pull-right">
									<div class="header-cricle">
										<a href="javascript:;" data-customer-id="0" class="cart-label header-icon iWishView">
											<span class="lnr lnr-heart"></span>
										</a>
										<span class="block">Yêu thích</span>
									</div>
								</div>
								
								<div class="pull-left dropdown-toggle hidden-md hidden-lg">
									<div class="header_search">
										<div class="icon-search-mobile  hidden-md hidden-lg">
											<i class="fa fa-search"></i>
										</div>
										<form class="input-group search-bar" action="/search" method="get" role="search">
											<input type="search" name="query" value="" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text" autocomplete="off">
											<span class="input-group-btn">
												<button class="btn icon-fallback-text">
													<i class="fa fa-search"></i>
												</button>
											</span>
										</form>
									</div>
								</div>
								<div class="header-block-item header-search hidden-sm hidden-xs">
									<form action="/search" method="get" role="search">
										<input type="search" name="query" value="" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text" autocomplete="off">

										<button tyle="submit " class="btn icon-fallback-text">
											<i class="fa fa-search"></i>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-bar hidden-md hidden-lg">
				<img src="//bizweb.dktcdn.net/100/282/917/themes/637314/assets/menu-bar.png?1600540725432" alt="menu bar">
			</div>
		</div>
		<div class="menu-mobile hidden-lg hidden-md relative">
			<div class="logo">
				
				<a href="/" class="logo-wrapper ">
					<img src="//bizweb.dktcdn.net/100/282/917/themes/637314/assets/logo.png?1600540725432" alt="logo ">
				</a>
				

			</div>
		</div>
		<div class="container">
			<div class=" nav hidden-md hidden-lg">
				<nav>
					<ul id="nav-mobile">
						


						
						<li class="nav-item ">
							<a href="/books-media" class="nav-link">Books &amp; Media <i class="fa faa fa-angle-right"></i></a>

							<ul class="dropdown-menu">
								
								
								<li class="dropdown-submenu nav-item-lv2">
									<a class="nav-link" href="/fiction-books">Fiction <i class="fa faa fa-angle-right"></i></a>

									<ul class="dropdown-menu">
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/view-all-fiction">View all Fiction</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/award-winners">Award Winners</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/lgbt-books">LGBT</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/crime-thriller">Crime &amp; Thriller</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/science-fiction-fantasy">Science Fiction &amp; Fantasy</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/romance">Romance</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/short-story-books">Short Story Books</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/asian-literature">Asian Literature</a>
										</li>
										
									</ul>
								</li>
								
								
								
								<li class="dropdown-submenu nav-item-lv2">
									<a class="nav-link" href="/non-fiction">Non-Fiction <i class="fa faa fa-angle-right"></i></a>

									<ul class="dropdown-menu">
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/biography-memoirs">Biography &amp; Memoirs</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/business-economics-books">Business &amp; Economics</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/finance-investment-books">Finance &amp; Investment</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/motivational-inspirational">Motivational &amp; Inspirational</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/history-books">History &amp; War</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/religion-spirituality">Religion &amp; Spirituality</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/philosophy">Philosophy</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/psychology">Psychology</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/education-teaching">Education &amp; Teaching</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/health-fitness-dieting">Health, Fitness &amp; Dieting</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/art-photography">Art &amp; Photography</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/travel">Travel &amp; Guidebooks</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/vietnam-culture-history">Vietnam Culture &amp; History</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/food-drink">Food &amp; Drink</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/performing-arts">Performing Arts</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/political-science">Political Science</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/cook-books">Cook Books</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/craft-hobbies">Craft &amp; Hobbies</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/science">Science</a>
										</li>
										
									</ul>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/classics">Classics</a>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/poetry-drama">Poetry</a>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/books-into-movies">Books Into Movies</a>
								</li>
								
								
								
								<li class="dropdown-submenu nav-item-lv2">
									<a class="nav-link" href="/award-winners">Award Winners <i class="fa faa fa-angle-right"></i></a>

									<ul class="dropdown-menu">
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/pulitzer-prize-winners-finalists">Pulitzer Prize Winners &amp; Finalists</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/man-booker-prize-winners-finalists">Man Booker Prize Winners &amp; Finalists</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/nobel-prize">Nobel Prize</a>
										</li>
										
									</ul>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/children">Children Books</a>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/young-adults">Young Adults</a>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/gre-gmat-books">GRE / GMAT Books</a>
								</li>
								
								
								
								<li class="dropdown-submenu nav-item-lv2">
									<a class="nav-link" href="/books-by-languages">Books By Languages <i class="fa faa fa-angle-right"></i></a>

									<ul class="dropdown-menu">
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/korean-language">Korean Language</a>
										</li>
										
										<li class="nav-item-lv3">
											<a class="nav-link" href="/chinese-language">Chinese Language</a>
										</li>
										
									</ul>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/books-on-sale">Books on Sale</a>
								</li>
								
								

							</ul>

						</li>
						
						


						
						<li class="nav-item "><a class="nav-link" href="/rare-collectibles">Rare &amp; Collectibles</a></li>
						
						


						
						<li class="nav-item "><a class="nav-link" href="/gifts-apparel">Gifts &amp; Apparel</a></li>
						
						


						
						<li class="nav-item "><a class="nav-link" href="/corporate-services">Corporate Services</a></li>
						
						


						
						<li class="nav-item "><a class="nav-link" href="/wholesale-books">Wholesale</a></li>
						
						


						
						<li class="nav-item active">
							<a href="/" class="nav-link">More.. <i class="fa faa fa-angle-right"></i></a>

							<ul class="dropdown-menu">
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/about-boa-bookstore">About BOA Bookstore</a>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/book-review">Book Review</a>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/book-donation">Book Donation</a>
								</li>
								
								
								
								<li class="nav-item-lv2">
									<a class="nav-link" href="/order-books">Order Books</a>
								</li>
								
								

							</ul>

						</li>
						
						

					</ul>
				</nav>
			</div>
		</div>
	</div>