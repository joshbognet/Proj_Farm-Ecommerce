
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
                                    <h3 class="filter-title">By Price <span class="text-info">&#8358;{{$min_price}} - &#8358;{{$max_price}}</span></h3>
                                    
                                    <div class="block-content">
                                        <div id="slider" wire:ignore></div>
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
                                                        <option value="default" selected="selected">Default Sorting</option>
                                                        <option value="price">Price: Lowest first</option>
                                                        <option value="price-desc">Price: Highest first</option>
                                                        <option value="date">New</option>
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </form>
                                            <form action="#" class="pull-right">
                                                <div class="select">
                                                    <select class="form-control" wire:model="pagesize">
                                                        
                                                        <option selected="selected"value="12" >12 per page</option>
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
                              <style>
                                 .product-wish{
                                    position:absolute;
                                      top:10%;
                                      z-index:99;
                                      left:0;
                                      right:30px;
                                      padding-top:0;
                                      text-align:right;

                                 }
                                 .product-wish .fa:hover{
                                   color:#636400;
                                 }
                                 .product-wish .fa{
                                    color: #cbcbcb;
                                    font-size:32px;
                                 }
                                 .fill-heart{
                                      color:green !important;
                                    
                                  }
                              </style>
                                
                                
                                <div class="tab-pane active" id="products-grid">
                                    <div class="products-block">
                                        <div class="row">
                                            @php
                                                $witems = Cart::instance('wishlist')->content()->pluck('id');
                                            @endphp

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
                                                            <span class="sale-price">&#8358;{{$product->regular_price}}</span>
                                                        
                                                        </div>
                                                        <div class="product-wish">
                                                            @if($witems->contains($product->id))
                                                                <a class="add-wishlist " href="#" wire:click.prevent ="removeFromWishlist({{ $product->id}})">
                                                                    <i class="fa fa-heart fill-heart" aria-hidden="true"></i>												
                                                                </a>
                                                            @else
                                                                <a class="add-wishlist " href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})" >
                                                                    <i class="fa fa-heart " aria-hidden="true"></i>												
                                                                </a>
                                                            @endif
                                                        </div>
                                                        <div class="product-buttons">
                                                            <a class="add-to-cart" href="#" wire:click.prevent="store({{ $product->id}}, '{{$product->name}}', {{ $product->regular_price }})">
                                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
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
                                
                               
                                
                            </div>
                        
                            <div class="pagination-bar">
                                
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="text">Showing 1-12 of 20 item(s)</div>
                                    </div>
                                    
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="pagination">
                                            {{$products->links()}}
                                            {{-- <ul class="page-list"> 
                                               
                                                  <li><a href="#" class="prev">Previous</a></li> 
                                                 <li><a href="#" class="current">1</a></li>
                                                
                                                <li><a href="#">2</a></li>
                                                <li><a href="#" class="next">Next</a></li>  
                                            </ul> --}}
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

@push('scripts')
    <script>
        var slider = document.getElementById('slider');
        noUiSlider.create(slider,{
            start : [1,1000],
            connect:true,
            range :{
                'min' : 1,
                'max' : 1000
            },
            pips:{
                mode:'steps',
                stepped:true,
                density:4
            }
        });

        slider.noUiSlider.on('update',function(value){
            @this.set('min_price',value[0]);
            @this.set('max_price',value[1]);
        });
    </script>
@endpush