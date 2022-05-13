
<div id="content" class="site-content">
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <div class="container">
            <h2 class="title">Shopping Cart</h2>

            <ul class="breadcrumb">
                <li><a href="/" title="Home">Home</a></li>
                <li><span>Shopping Cart</span></li>
            </ul>
        </div>
    </div>

    <div class="container">
       
        <div class="page-cart">
            @if(Session::has('success_message'))
                <div class="alert alert-success">
                    <strong>Success</strong>{{ Session::get('success_message') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="cart-summary table table-bordered">
                    <thead>
                        <tr>
                            <th class="width-20">&nbsp;</th>
                            <th class="width-80 text-center">Image</th>
                            <th>Name</th>
                            <th class="width-100 text-center">Unit price</th>
                            <th class="width-100 text-center">Qty</th>
                            <th class="width-100 text-center">Total</th>
                        </tr>
                    </thead>
                    @if (Cart::count() > 0)
                        <tbody>
                            @foreach (Cart::content() as $item)
                                <tr>
                                    <td class="product-remove">
                                        <a title="Remove this item" class="remove" href="#" wire:click.prevent="destroy('{{ $item->rowId }}')">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('product.details', ['slug' => $item->model->slug]) }}">
                                            <img width="80" alt="{{ $item->model->name }}" class="img-responsive"
                                                src="{{ asset('img/product') }}/{{ $item->model->image }}">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('product.details', ['slug' => $item->model->slug]) }}"
                                            class="product-name">{{ $item->model->name }}</a>
                                    </td>
                                    <td class="text-center">
                                        {{ $item->model->regular_price }}
                                    </td>
                                    <td>
                                        <div class="product-quantity">
                                            <div class="qty">
                                                <div class="input-group">
                                                    <input type="text" name="qty" 
                                                        value="{{ $item->qty }}" data-max="120" pattern="[0-9]*">
                                                    <span class="adjust-qty">
                                                        <button class="btn adjust-btn plus" href="#"
                                                            wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"><span
                                                                class="btn adjust-btn plus">+</span></button>
                                                        <button class="btn adjust-btn minus" href="#"
                                                            wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"><span>-</span></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        {{ $item->subtotal }}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    @else
                        <p>No Item in Cart</p>
                    @endif
                    <tfoot>
                        <tr class="cart-total">
                            <td rowspan="3" colspan="3"></td>
                            <td colspan="2" class="text-right">Total products</td>
                            <td colspan="1" class="text-center">=N={{ Cart::subtotal() }}</td>
                        </tr>
                        <tr class="cart-total">
                            <td colspan="2" class="text-right">Tax</td>
                            <td colspan="1" class="text-center">=N={{ Cart::tax() }}</td>
                        </tr>
                        <tr class="cart-total">
                            <td colspan="2" class="total text-right">Total</td>
                            <td colspan="1" class="total text-center">=N={{ Cart::total() }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="checkout-btn">
                <a href="product-checkout.html" class="btn btn-primary pull-right" title="Proceed to checkout">
                    <span>Proceed to checkout</span>
                    <i class="fa fa-angle-right ml-xs"></i>
                </a>
            </div>
            <div class="checkout-btn">
                <a href="/shop" class="mr btn btn-primary pull-right" title="Proceed to checkout">
                    <span>Continue to Shop</span>
                    <i class="fa fa-angle-right ml-xs"></i>
                </a>
            </div>
        </div>
    </div> 
    
</div>

