
<div id="all">
    
		<div id="content" class="site-content">
			<!-- Breadcrumb -->
			<div id="breadcrumb">
				<div class="container">
					<h2 class="title">Shop</h2>
					
					<ul class="breadcrumb">
						<li><a href="/" title="Home">Home</a></li>
						<li><a href="/shop" title="Shop">Shop</a></li>
						{{-- <li><span>Tomato</span></li> --}}
					</ul>
				</div>
			</div>
            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    <div id="left-column" class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- Block - Product Categories -->
                        <div class="block product-categories">
                            <h3 class="block-title">Categories</h3>
                            
                            <div class="block-content">
                                {{-- @foreach( $categories as $category)
                                <div class="item">
                                    
                                    <span class="arrow collapsed" data-toggle="collapse" data-target="#vegetables" aria-expanded="false" role="button">
                                        <i class="zmdi zmdi-minus"></i>
                                        <i class="zmdi zmdi-plus"></i>
                                    </span>
                                    
                                    <a class="category-title" href="product-grid-left-sidebar.html">{{ $category->name }}</a>
                                    <div class="sub-category collapse" id="vegetables" aria-expanded="true" role="main">
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Tomato</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Broccoli</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Cabbage</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Cucumber</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach --}}
                                @foreach( $categories as $category )                              
                                    <div class="item">
                                        <a class="category-title" href="{{route('product.category',['category_slug'=>$category->slug])}}">{{ $category->name }}</a>
                                    </div> 
                                @endforeach 
                            </div>
                        </div>
                        
                        
                        <!-- Block - Filter -->
                        <div class="block product-filter">
                            <h3 class="block-title">Catalog</h3>
                        
                            <div class="block-content">
                                <div class="filter-item">
                                    <h3 class="filter-title">Categories</h3>
                                    
                                    <div class="filter-content">
                                        <ul>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Tomato <span class="quantity">(20)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Broccoli <span class="quantity">(14)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Cabbage <span class="quantity">(8)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Cucumber <span class="quantity">(12)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Eggplant <span class="quantity">(15)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Pea <span class="quantity">(22)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Pineapple <span class="quantity">(20)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Lettuce <span class="quantity">(10)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="filter-item">
                                    <h3 class="filter-title">Manufacture</h3>
                                    
                                    <div class="filter-content">
                                        <ul>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Samsung <span class="quantity">(20)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Dell <span class="quantity">(14)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Polygon <span class="quantity">(8)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Newment <span class="quantity">(12)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Asus <span class="quantity">(15)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Mac <span class="quantity">(22)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Vaio <span class="quantity">(20)</span></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="check">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </span>
                                                    <a>Lettuce <span class="quantity">(10)</span></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="filter-item">
                                    <h3 class="filter-title">By Price</h3>
                                    
                                    <div class="block-content">
                                        <div id="slider-range" class="tiva-filter">
                                            <div class="filter-item price-filter">
                                                <div class="layout-slider">
                                                    <input id="price-filter" name="price" value="0;100" />
                                                </div>
                                                <div class="layout-slider-settings"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="filter-item">
                                    <h3 class="filter-title">By Color</h3>
                                    
                                    <div class="block-content">
                                        <div class="filter-color">
                                            <div class="left">
                                                <div class="item">
                                                    <label class="color color-1"></label>
                                                    <span class="color-label">Blue</span>
                                                    <span>(3)</span>
                                                </div>
                                                <div class="item">
                                                    <label class="color color-3"></label>
                                                    <span class="color-label">Yellow</span>
                                                    <span>(2)</span>
                                                </div>
                                                <div class="item">
                                                    <label class="color color-5"></label>
                                                    <span class="color-label">Pink</span>
                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                            <div class="right">
                                                <div class="item">
                                                    <label class="color color-2"></label>
                                                    <span class="color-label">Green</span>
                                                    <span>(1)</span>
                                                </div>
                                                <div class="item">
                                                    <label class="color color-4"></label>
                                                    <span class="color-label">Brown</span>
                                                    <span>(3)</span>
                                                </div>
                                                <div class="item">
                                                    <label class="color color-6"></label>
                                                    <span class="color-label">Red</span>
                                                    <span>(10)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product Tags -->
                        <div class="block tags product-tags">
                            <h3 class="block-title">Product Tags</h3>
                        
                            <div class="block-content">
                                <ul>
                                    <li><a href="#" title="Show products matching tag Hot Trend">Hot Trend</a></li>
                                    <li><a href="#" title="Show products matching tag Jewelry">Jewelry</a></li>
                                    <li><a href="#" title="Show products matching tag Man">Man</a></li>
                                    <li><a href="#" title="Show products matching tag Party">Party</a></li>
                                    <li><a href="#" title="Show products matching tag SamSung">SamSung</a></li>
                                    <li><a href="#" title="Show products matching tag Shirt Dresses">Shirt Dresses</a></li>
                                    <li><a href="#" title="Show products matching tag Shoes">Shoes</a></li>
                                    <li><a href="#" title="Show products matching tag Summer">Summer</a></li>
                                    <li><a href="#" title="Show products matching tag Sweaters">Sweaters</a></li>
                                    <li><a href="#" title="Show products matching tag Winter">Winter</a></li>
                                    <li><a href="#" title="Show products matching tag Woman">Woman</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Page Content -->
                    <div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-category-page">
                            <!-- Nav Bar -->
                            <div class="products-bar">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="gridlist-toggle" role="tablist">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#products-grid" data-toggle="tab" aria-expanded="true"><i class="fa fa-th-large"></i></a></li>
                                                <li><a href="#products-list" data-toggle="tab" aria-expanded="false"><i class="fa fa-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="total-products">There are 12 products</div>
                                    </div>
                                    
                                    <div class="col-md-6 col-xs-6">
                                        <div class="filter-bar">
                                            <form action="#" class="pull-right">
                                                <div class="select">
                                                    <select class="form-control" wire:model="sorting">
                                                        <option value="default" selected="selected">Sort By</option>
                                                        <option value="price">Price: Lowest first</option>
                                                        <option value="price-desc">Price: Highest first</option>
                                                        <option value="date">New</option>
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </form>
                                            <form action="#" class="pull-right">
                                                <div class="select">
                                                    <select class="form-control">
                                                        
                                                        <option selected="selected"value="12" wire:model="pagesize">12 per page</option>
                                                        <option value="16">16</option>
                                                        <option value="18">18</option>
                                                        <option value="21">21</option>
                                                        <option value="24">24</option>
                                                        <option value="30">30</option>
                                                        <option value="32">32</option>
                                                        
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-content">
                                
                                
                                
                                <div class="tab-pane active" id="products-grid">
                                    <div class="products-block">
                                        <div class="row">
                                            @foreach ($products as $product)
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                                                    
                                                    <div class="product-item">
                                                        <div class="product-image">
                                                            <a href="product-detail-left-sidebar.html">
                                                                <img class="img-responsive" src="{{ asset('img/product') }}/{{$product->image  }}" alt="{{ $product->image }}">
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="product-title">
                                                            <a href="product-detail-left-sidebar.html">
                                                                {{$product->name}}
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="product-rating">
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on "></div>
                                                            <div class="star on"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                        
                                                        <div class="product-price">
                                                            <span class="sale-price">=N={{$product->regular_price}}</span>
                                                        
                                                        </div>
                                                        
                                                        <div class="product-buttons">
                                                            <a class="add-to-cart" href="#" wire:click.prevent="store({{ $product->id}}, '{{$product->name}}', {{ $product->regular_price }})">
                                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                            </a>
                                                            
                                                            <a class="add-wishlist" href="#">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>												
                                                            </a>
                                                            
                                                            <a class="quickview" href="{{route('product.details', ['slug' => $product->slug])}}">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                          
                                        </div>
                                    </div>
                                </div> 
                                
                                <!-- Products List -->
                                <div class="tab-pane" id="products-list">
                                    <div class="products-block layout-5">
                                        <div class="product-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                
                                                        
                                                    
                                                    <div class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img class="img-responsive" src="img/product/4.jpg" alt="Product Image">
                                                        </a>
                                                </div>
                                                
                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                                    <div class="product-info">
                                                        <div class="product-title">
                                                            <a href="product-detail-left-sidebar.html">
                                                                Organic Strawberry Fruits
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="product-rating">
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on "></div>
                                                            <div class="star on"></div>
                                                            <div class="star"></div>
                                                            <span class="review-count">(3 Reviews)</span>
                                                        </div>
                                                        
                                                        <div class="product-price">
                                                            <span class="sale-price">$80.00</span>
                                                            <span class="base-price">$90.00</span>
                                                        </div>
                                                        
                                                        <div class="product-stock">
                                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock  
                                                        </div>
                                                        
                                                        <div class="product-description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                        </div>
                                                        
                                                        <div class="product-buttons">
                                                            <a class="add-to-cart" href="#">
                                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                            
                                                            <a class="add-wishlist" href="#">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>												
                                                            </a>
                                                            
                                                            <a class="quickview" href="#">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="product-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img class="img-responsive" src="img/product/14.jpg" alt="Product Image">
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                                    <div class="product-info">
                                                        <div class="product-title">
                                                            <a href="product-detail-left-sidebar.html">
                                                                Organic Strawberry Fruits
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="product-rating">
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on "></div>
                                                            <div class="star on"></div>
                                                            <div class="star"></div>
                                                            <span class="review-count">(3 Reviews)</span>
                                                        </div>
                                                        
                                                        <div class="product-price">
                                                            <span class="sale-price">$80.00</span>
                                                            <span class="base-price">$90.00</span>
                                                        </div>
                                                        
                                                        <div class="product-stock">
                                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock  
                                                        </div>
                                                        
                                                        <div class="product-description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                        </div>
                                                        
                                                        <div class="product-buttons">
                                                            <a class="add-to-cart" href="#">
                                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                            
                                                            <a class="add-wishlist" href="#">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>												
                                                            </a>
                                                            
                                                            <a class="quickview" href="#">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="product-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img class="img-responsive" src="img/product/17.jpg" alt="Product Image">
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                                    <div class="product-info">
                                                        <div class="product-title">
                                                            <a href="product-detail-left-sidebar.html">
                                                                Organic Strawberry Fruits
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="product-rating">
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on "></div>
                                                            <div class="star on"></div>
                                                            <div class="star"></div>
                                                            <span class="review-count">(3 Reviews)</span>
                                                        </div>
                                                        
                                                        <div class="product-price">
                                                            <span class="sale-price">$80.00</span>
                                                            <span class="base-price">$90.00</span>
                                                        </div>
                                                        
                                                        <div class="product-stock">
                                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock  
                                                        </div>
                                                        
                                                        <div class="product-description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                        </div>
                                                        
                                                        <div class="product-buttons">
                                                            <a class="add-to-cart" href="#">
                                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                            
                                                            <a class="add-wishlist" href="#">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>												
                                                            </a>
                                                            
                                                            <a class="quickview" href="#">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="product-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img class="img-responsive" src="img/product/8.jpg" alt="Product Image">
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                                    <div class="product-info">
                                                        <div class="product-title">
                                                            <a href="product-detail-left-sidebar.html">
                                                                Organic Strawberry Fruits
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="product-rating">
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on "></div>
                                                            <div class="star on"></div>
                                                            <div class="star"></div>
                                                            <span class="review-count">(3 Reviews)</span>
                                                        </div>
                                                        
                                                        <div class="product-price">
                                                            <span class="sale-price">$80.00</span>
                                                            <span class="base-price">$90.00</span>
                                                        </div>
                                                        
                                                        <div class="product-stock">
                                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock  
                                                        </div>
                                                        
                                                        <div class="product-description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                        </div>
                                                        
                                                        <div class="product-buttons">
                                                            <a class="add-to-cart" href="#">
                                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                            
                                                            <a class="add-wishlist" href="#">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>												
                                                            </a>
                                                            
                                                            <a class="quickview" href="#">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="product-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img class="img-responsive" src="img/product/9.jpg" alt="Product Image">
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                                    <div class="product-info">
                                                        <div class="product-title">
                                                            <a href="product-detail-left-sidebar.html">
                                                                Organic Strawberry Fruits
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="product-rating">
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on "></div>
                                                            <div class="star on"></div>
                                                            <div class="star"></div>
                                                            <span class="review-count">(3 Reviews)</span>
                                                        </div>
                                                        
                                                        <div class="product-price">
                                                            <span class="sale-price">$80.00</span>
                                                            <span class="base-price">$90.00</span>
                                                        </div>
                                                        
                                                        <div class="product-stock">
                                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>In stock  
                                                        </div>
                                                        
                                                        <div class="product-description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sapien urna, commodo ut molestie vitae, feugiat tincidunt ligula...
                                                        </div>
                                                        
                                                        <div class="product-buttons">
                                                            <a class="add-to-cart" href="#">
                                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                                <span>Add To Cart</span>
                                                            </a>
                                                            
                                                            <a class="add-wishlist" href="#">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>												
                                                            </a>
                                                            
                                                            <a class="quickview" href="#">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="pagination-bar">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="text">Showing 1-12 of 20 item(s)</div>
                                    </div>
                                    
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="pagination">
                                            <ul class="page-list">
                                                {{$products->links()}}
                                                 {{-- <li><a href="#" class="prev">Previous</a></li> --}}
                                                {{-- <li><a href="#" class="current">1</a></li>
                                                
                                                <li><a href="#">2</a></li>
                                                <li><a href="#" class="next">Next</a></li>  --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
</div>