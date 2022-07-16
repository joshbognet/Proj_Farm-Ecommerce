

    {{-- <div class="block-cart dropdown">
									
        <div class="cart-title">
            
               <a href="/cart"> <i class="fa fa-shopping-basket"></i></a>
                @if(Cart::instance('cart')->count()>0)
                <span class="cart-count">{{ Cart::instance('cart')->count() }}</span>
                @endif
        </div>
        
        <div class="dropdown-content">
            <div class="cart-content">
                <table>
                    @if(Cart::instance('cart')->count()>0)
                    <tbody>
                        @foreach(Cart::content() as $item)
                        <tr>
                            <td class="product-image">
                                <a href="{{route('product.details', ['slug' => $item->model->slug])}}">
                                    <img src="{{ asset('img/product') }}/{{ $item->model->image }}" alt="Product">
                                </a>
                            </td>
                            <td>
                                <div class="product-name">
                                    <a href="product-detail-left-sidebar.html">Organic Strawberry Fruits</a>
                                </div>
                                <div>	
                                    <div class="product-quantity">
                                        <div class="qty">
                                            <div class="input-group">
                                                <input type="text" name="qty" value="{{ $item->qty }}" data-max="120" pattern="[0-9]*">
                                                <span class="adjust-qty">
                                                    <button href="#" class="btn adjust-btn plus" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"><span class="btn adjust-btn plus">+</span></button>
                                                    <button href="#"class="btn adjust-btn minus" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"><span class="btn adjust-btn minus">-</span></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="product-price">=N={{ $item->model->regular_price }}</span>
                                </div>
                            </td>
                            <td class="action">
                                 <a class="remove" href="#"wire:click.prevent="destroy('{{ $item->rowId }}')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        
                        <tr class="total">
                            <td>Total:</td>
                            <td colspan="2">=N={{ $item->subtotal }}</td>
                        </tr>
                        
                        <tr>
                            <td colspan="3">
                                <div class="cart-button">
                                    <a class="btn btn-primary"  href="/cart" title="View Cart">View Cart</a>
                                    <a class="btn btn-primary" href="product-checkout.html" title="Checkout">Checkout</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @else
                        <p>No Item in Cart</p>
                    @endif
                </table>
            </div>
        </div>
    </div> --}}
    <div class="wrap-icon-section minicart">
        <a href="{{ route('product.cart')}}" class="link-direction">
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
            <div class="left-info">
                @if(Cart::instance('cart')->count()>0)
                   <span class="index">{{Cart::instance('cart')->count()}} item</span>		
                @endif
                <span class="title">CART</span>
            </div>
        </a>
    </div>
