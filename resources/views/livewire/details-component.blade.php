<div id="all">
<style>
    .regprice
    {
        font-weight:100px;
        font-size:30px !important;
        color:#aaaaaa !important;
        padding-left:10px;
        text-decoration:line-through;

    }
</style>
    <!-- Main Content -->
    <div id="content" class="site-content">
        <!-- Breadcrumb -->
        <div id="breadcrumb">
            <div class="container">
                <h2 class="title">{{ $product->name  }}</h2>
                
                <ul class="breadcrumb">
                    <li><a href="/" title="Home">Home</a></li>
                    <li><a href="#" title="Fruit">Product Detail</a></li>
                    <li><span>{{$product->name  }}</span></li>
                </ul>
            </div>
        </div>
    
    
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div id="left-column" class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!-- Block - Product Categories -->
                    {{-- <div class="block product-categories">
                        <h3 class="block-title">Categories</h3>
                        
                        <div class="block-content">
                            <div class="item">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#vegetables" aria-expanded="false" role="button">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                
                                <a class="category-title" href="product-grid-left-sidebar.html">Vegetables</a>
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
                            
                            <div class="item">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#fruits" aria-expanded="false" role="button">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                
                                <a class="category-title" href="product-grid-left-sidebar.html">Fruits</a>
                                <div class="sub-category collapse" id="fruits" aria-expanded="true" role="main">
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Orange</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Apple</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Banana</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Strawberry</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#juices" aria-expanded="false" role="button">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                
                                <a class="category-title" href="product-grid-left-sidebar.html">Juices</a>
                                <div class="sub-category collapse" id="juices" aria-expanded="true" role="main">
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Orange Juices</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Tomato Juices</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Apple Juices</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Peaches Juices</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <a class="category-title" href="product-grid-left-sidebar.html">Tea and Coffee</a>
                            </div>
                            
                            <div class="item">
                                <a class="category-title" href="product-grid-left-sidebar.html">Jam</a>
                            </div>
                            
                            <div class="item">
                                <a class="category-title" href="product-grid-left-sidebar.html">SeaFood</a>
                            </div>
                            
                            <div class="item">
                                <a class="category-title" href="product-grid-left-sidebar.html">Fresh Meats</a>
                            </div>
                        </div>
                    </div> --}}
                    
                    
                    <!-- Block - Products -->
                    <div class="block products-block layout-5">
                        <h3 class="block-title">Best Seller</h3>
                    
                        <div class="block-content">
                            @foreach ($popular_products as $p_product)
                                <div class="product-item">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-xs-12 product-left">
                                            <div class="product-image">
                                                <a href="{{route('product.details', ['slug' => $p_product->slug])}}">
                                                    <img class="img-responsive" src="{{asset('img/product')}}/{{$p_product->image}}" alt="{{$p_product->name}}">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-8 col-sm-12 col-xs-12 product-right">
                                            <div class="product-info">
                                                <div class="product-title">
                                                    <a href="{{route('product.details', ['slug' => $p_product->slug])}}">
                                                        {{$p_product->name}}
                                                    </a>
                                                </div>
                                                
                                                <div class="product-rating">
                                                    <div class="star on"></div>
                                                    <div class="star on"></div>
                                                    <div class="star on"></div>
                                                    <div class="star on"></div>
                                                    <div class="star"></div>
                                                    <span class="review-count">(3 Reviews)</span>
                                                </div>
                                                
                                                <div class="product-price">
                                                    <span class="sale-price">&#8358;{{$p_product->regular_price}}</span>
                                                    <span class="base-price">&#8358;38.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                    <div class="product-detail">
                        <div class="products-block layout-5">
                            <div class="product-item">
                                <div class="product-title">
                                {{$product->name}}
                                </div>
                                            
                                <div class="row">
                                    <div class="product-left col-md-5 col-sm-5 col-xs-12">
                                        <div class="product-image horizontal">
                                            <div class="main-image">
                                                <img class="img-responsive" src="{{asset('img/product')}}/{{$product->image}}" alt="Product Image">
                                            </div>
                                            <div class="thumb-images owl-theme owl-carousel">
                                                <img class="img-responsive" src="{{asset('img/product')}}/{{$product->image}}" alt="Product Image">
                                                <img class="img-responsive" src="{{asset('img/product')}}/{{$product->image}}" alt="Product Image">
                                                <img class="img-responsive" src="{{asset('img/product')}}/{{$product->image}}" alt="Product Image">
                                                <img class="img-responsive" src="{{asset('img/product')}}/{{$product->image}}" alt="Product Image">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-right col-md-7 col-sm-7 col-xs-12">
                                        <div class="product-info">
                                            @if($product->sale_price>0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())

                                                <div class="product-price">
                                                    <span class="sale-price">&#8358;{{$product->sale_price}}</span>

                                                    <del><span class="product-price regprice" >&#8358;{{$product->regular_price}}</span></del>
                                                </div>
                                            @else
                                                <div class="product-price">
                                                    <span class="sale-price">&#8358;{{$product->sale_price}}</span>
                                                    
                                                </div>

                                            @endif
                                            <div class="product-stock">
                                                <span class="availability">Availability :</span><i class="fa fa-check-square-o" aria-hidden="true"></i>{{$product->stock_status}}
                                            </div>
                                            
                                            <div class="product-short-description">
                                                {!! $product->short_description !!} 
                                            </div>
                                            
                                            <div class="product-variants border-bottom">
                                                <div class="product-variants-item">
                                                    <span class="control-label">Size :</span>
                                                    <select>
                                                        <option value="1" title="S">S</option>
                                                        <option value="2" title="M">M</option>
                                                        <option value="3" title="L">L</option>
                                                        <option value="4" title="One size">One size</option>
                                                    </select>
                                                </div>

                                                <div class="product-variants-item">
                                                    <span class="control-label">Color :</span>

                                                    <ul>
                                                        <li>
                                                            <input class="input-color" type="radio" value="1">
                                                            <span class="color" style="background-color: #E84C3D"></span>
                                                        </li>
                                                        <li>
                                                            <input class="input-color" type="radio" value="2">
                                                            <span class="color" style="background-color: #5D9CEC"></span>
                                                        </li>
                                                        <li>
                                                            <input class="input-color" type="radio" value="3">
                                                            <span class="color" style="background-color: #A0D468"></span>
                                                        </li>
                                                        <li>
                                                            <input class="input-color" type="radio" value="4">
                                                            <span class="color" style="background-color: #F1C40F"></span>
                                                        </li>
                                                        <li>
                                                            <input class="input-color" type="radio" value="5">
                                                            <span class="color" style="background-color: #964B00"></span>
                                                        </li>
                                                        <li>
                                                            <input class="input-color" type="radio" value="6">
                                                            <span class="color" style="background-color: #FCCACD"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <div class="product-add-to-cart border-bottom">
                                                <div class="product-quantity">
                                                    <span class="control-label">QTY :</span>
                                                    <div class="qty">
                                                        <div class="input-group">
                                                            <input type="text" name="qty" value="1" data-min="1" wire:model="qty">
                                                            <span class="adjust-qty">
                                                                <a  wire:click.prevent="increaseQuantity"><span class="adjust-btn plus">+</span></a>
                                                                <a  wire:click.prevent="decreaseQuantity"><span class="adjust-btn minus">-</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="product-buttons">
                                                    @if($product->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
                                                        <a class="add-to-cart" href="#" wire:click.prevent="store({{ $product->id}}, '{{$product->name}}', {{ $product->sale_price }})">
                                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                            <span>Add To Cart</span>
                                                        </a>
                                                    @else
                                                        <a class="add-to-cart" href="#" wire:click.prevent="store({{ $product->id}}, '{{$product->name}}', {{ $product->regular_price }})">
                                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                            <span>Add To Cart</span>
                                                        </a>
                                                    @endif
                                                    
                                                    
                                                    <a class="add-wishlist" href="#" >
                                                        <i class="fa fa-heart" aria-hidden="true"></i>												
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <div class="product-share border-bottom">
                                                <div class="item">
                                                    <a href="#"><i class="zmdi zmdi-share" aria-hidden="true"></i><span class="text">Share</span></a>
                                                </div>
                                                <div class="item">
                                                    <a href="#"><i class="zmdi zmdi-email" aria-hidden="true"></i><span class="text">Send to a friend</span></a>
                                                </div>
                                                <div class="item">
                                                    <a href="#"><i class="zmdi zmdi-print" aria-hidden="true"></i><span class="text">Print</span></a>
                                                </div>
                                            </div>
                                            
                                            <div class="product-review border-bottom">
                                                <div class="item">
                                                    <div class="product-quantity">
                                                        <span class="control-label">Review :</span>
                                                        <div class="product-rating">
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star on"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                    </div>	
                                                </div>
                                                
                                                <div class="item">
                                                    <a href="#"><i class="zmdi zmdi-comments" aria-hidden="true"></i><span class="text">Read Reviews (3)</span></a>
                                                </div>
                                                
                                                <div class="item">
                                                    <a href="#"><i class="zmdi zmdi-edit" aria-hidden="true"></i><span class="text">Write a review</span></a>
                                                </div>
                                            </div>
                                            
                                            <div class="product-extra">
                                                <div class="item">
                                                    <span class="control-label">Review :</span><span class="control-label">E-02154</span>
                                                </div>
                                                <div class="item">
                                                    <span class="control-label">Categories :</span>
                                                    <a href="#" title="Vegetables"></a>
                                                    
                                                </div>
                                                <div class="item">
                                                    <span class="control-label">Tags :</span>
                                                    <a href="#" title="Vegetables">Hot Trend,</a>
                                                    <a href="#" title="Fruits">Summer</a>			
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="product-tab">
                                    <!-- Tab Navigation -->
                                    <div class="tab-nav">
                                        <ul>
                                            <li class="active">
                                                <a data-toggle="tab" href="#description">
                                                    <span>Description</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#additional-information">
                                                    <span>Additional Information</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#review">
                                                    <span>Review</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <!-- Tab Content -->
                                    <div class="tab-content">
                                        <!-- Description -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="description">
                                            {!! $product->description !!}
                                        </div>
                                        
                                        <!-- Product Tag -->
                                        <div role="tabpanel" class="tab-pane fade" id="additional-information">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        </div>
                                        
                                        <!-- Review -->
                                        <div role="tabpanel" class="tab-pane fade" id="review">
                                            <div class="reviews">
                                                <div class="comments-list">
                                                    <div class="item d-flex">
                                                        <div class="comment-left">
                                                            <div class="avatar">
                                                                <img src="{{asset('img/avatar.jpg')}}" alt="" width="70" height="70">
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-body">
                                                            <div class="comment-meta">
                                                                <span class="author">Peter</span> - <span class="time">June 02, 2018</span>
                                                            </div>
                                                            <div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="item d-flex">
                                                        <div class="comment-left">
                                                            <div class="avatar">
                                                                <img src="{{asset('img/avatar.jpg')}}" alt="" width="70" height="70">
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star on"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-body">
                                                            <div class="comment-meta">
                                                                <span class="author">Merry</span> - <span class="time">June 17, 2018</span>
                                                            </div>
                                                            <div class="comment-content">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="review-form">
                                                    <h4 class="title">Write a review</h4>
                                                    
                                                    <form action="#" method="post" class="form-validate">
                                                        <div class="form-group">
                                                            <div class="text">Your Rating</div>
                                                            <div class="product-rating">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <div class="text">You review<sup class="required">*</sup></div>
                                                            <textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <button class="btn btn-primary">Send your review</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Related Products -->
                    <div class="products-block related-products">
                        <div class="block-title">
                            <h2 class="title">Related <span>Products</span></h2>
                        </div>
                        
                        <div class="block-content">
                            <div class="products owl-theme owl-carousel">
                                @foreach($related_products as $r_product)
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="{{route('product.details', ['slug' => $r_product->slug])}}">
                                                <img src="{{asset('img/product')}}/{{$r_product->image}}" alt="{{ $r_product->name }}">
                                            </a>
                                        </div>
                                        
                                        <div class="product-title">
                                            <a href="{{route('product.details', ['slug' => $r_product->slug])}}">
                                                {{ $r_product->name }}
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
                                            <span class="sale-price">&#8358;{{ $r_product->regular_price }}</span>
                                            <span class="base-price">&#8358;90.00</span>
                                        </div>
                                        
                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>
                                            
                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>												
                                            </a>
                                            
                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                               
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
