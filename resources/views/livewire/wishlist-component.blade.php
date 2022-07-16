<div id="all">
    
    <div id="content" class="site-content">
        <!-- Breadcrumb -->
        <div id="breadcrumb">
            <div class="container">
                <h2 class="title">Wishlist</h2>
                
                <ul class="breadcrumb">
                    <li><a href="/" title="Home">Home</a></li>
                    <li><a href="/wishlist" title="Shop">Wishlist</a></li>
                    {{-- <li><span>Tomato</span></li> --}}
                </ul>

            </div>
        </div>
  </div>
  
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
      color:  green;
    }
    .product-wish .fa{
       color: #cbcbcb;
       font-size:32px;
    }
    .fill-heart{
         color:#636400 !important;
       
     }
     .adj{
        text-align: center;
     }
 </style>
  
  
  <div class="tab-content">
    <div class="tab-pane active" id="products-grid">
        <div class="products-block">
            <div class="row">
                @if(Cart::instance('wishlist')->content()->count()>0)
                    @foreach (Cart::instance('wishlist')->content() as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                            
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-detail-left-sidebar.html">
                                        <img class="img-responsive" src="{{ asset('img/product') }}/{{$item->model->image  }}" alt="{{ $item->model->image }}">
                                    </a>
                                </div>
                                
                                <div class="product-title">
                                    <a href="product-detail-left-sidebar.html">
                                        {{$item->model->name}}
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
                                    <span class="sale-price">&#8358;{{$item->model->regular_price}}</span>
                                
                                </div>

                                <div class="product-wish">
                                    <a class="add-wishlist " href="#" wire:click.prevent ="removeFromWishlist({{ $item->model->id}})">
                                        <i class="fa fa-heart fill-heart" aria-hidden="true"></i>												
                                    </a>
                                    
                                </div>
                                <div class="product-buttons">
                                    <a class="add-to-cart" href="#" wire:click.prevent="moveProductFromWishlistToCart('{{ $item->rowId}}')">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </a>
                                    
                                    <a class="quickview" href="{{route('product.details', ['slug' => $item->model->slug])}}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                <h2 class="adj">No Item in wishlist</h2>
                @endif
            </div>
                
        </div>
    </div>
  </div>
    
</div>