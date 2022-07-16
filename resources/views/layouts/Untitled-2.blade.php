<main id="main" class="main-site">
		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<form action="" wire:submit.prevent="placeOrder">
					<div class="row">
						<div class="col-md-12">
							<div class="wrap-address-billing">
								<h3 class="box-title">Billing Address</h3>
								<div class="billing-address" >
									<p class="row-in-form">
										<label for="fname">first name<span>*</span></label>
										<input  type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
										@error('firstname') <span class="text-danger">{{ message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="lname">last name<span>*</span></label>
										<input  type="text" name="lname" value="" placeholder="Your last name"wire:model="lastname">
										@error('lastname') <span class="text-danger">{{ message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="email">Email Addreess:</label>
										<input  type="email" name="email" value="" placeholder="Type your email" wire:model="email">
										@error('email') <span class="text-danger">{{ message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="phone">Phone number<span>*</span></label>
										<input  type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
										@error('mobile') <span class="text-danger">{{ message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="add">Line 1:</label>
										<input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line1">
										@error('line1') <span class="text-danger">{{ message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="add">Line 2:</label>
										<input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line2">
									</p>
									<p class="row-in-form">
										<label for="country">Country<span>*</span></label>
										<input  type="text" name="country" value="" placeholder="United States" wire:model="country">
										@error('country') <span class="text-danger">{{ message}}</span> @enderror
									</p>

									
									<p class="row-in-form">
										<label for="city">State<span>*</span></label>
										<input type="text" name="state" value="" placeholder="State name" wire:model="state" >
										@error('state') <span class="text-danger">{{ message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="city">Town / City<span>*</span></label>
										<input type="text" name="city" value="" placeholder="City name" wire:model="city">
										@error('city') <span class="text-danger">{{ message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="zip-code">Postcode / ZIP:</label>
										<input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
										@error('zipcode') <span class="text-danger">{{ message}}</span> @enderror
									</p>
									<p class="row-in-form fill-wife">
										
										<label class="checkbox-field">
											<input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
											<span>Ship to a different address?</span>
										</label>
									</p>
								</div>
							</div>
						</div>
						@if($ship_to_different)
							<div class="col-md-12">
								<div class="wrap-address-billing">
									<h3 class="box-title">Shipping Address</h3>
									<div class="billing-address" >
										<p class="row-in-form">
											<label for="fname">first name<span>*</span></label>
											<input  type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
											@error('s_firstname') <span class="text-danger">{{ message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="lname">last name<span>*</span></label>
											<input  type="text" name="lname" value="" placeholder="Your last name"wire:model="s_lastname">
											@error('s_lastname') <span class="text-danger">{{ message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="email">Email Addreess:</label>
											<input  type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
											@error('s_email') <span class="text-danger">{{ message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="phone">Phone number<span>*</span></label>
											<input  type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
											@error('s_mobile') <span class="text-danger">{{ message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="add">Line 1:</label>
											<input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line1">
											@error('s_line1') <span class="text-danger">{{ message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="add">Line 2:</label>
											<input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line2">
										</p>
										<p class="row-in-form">
											<label for="country">Country<span>*</span></label>
											<input  type="text" name="country" value="" placeholder="United States" wire:model="s_country">
											@error('s_country') <span class="text-danger">{{ message}}</span> @enderror
										</p>
										
										<p class="row-in-form">
											<label for="city">State<span>*</span></label>
											<input type="text" name="state" value="" placeholder="State name" wire:model="s_state" >
											@error('s_state') <span class="text-danger">{{ message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="city">Town / City<span>*</span></label>
											<input type="text" name="city" value="" placeholder="City name" wire:model="s_city">
											@error('s_city') <span class="text-danger">{{ message}}</span> @enderror
										</p>
										<p class="row-in-form">
											<label for="zip-code">Postcode / ZIP:</label>
											<input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
											@error('s_zipcode') <span class="text-danger">{{ message}}</span> @enderror
										</p>
																	</div>
								</div>
							</div>
						@endif
					</div>
					
					<div class="summary summary-checkout">
						<div class="summary-item payment-method">
							<h4 class="title-box">Payment Method</h4>
							<p class="summary-info"><span class="title">Check / Money order</span></p>
							<p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
							<div class="choose-payment-methods">
								<label class="payment-method">
									<input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
									<span>Cash On Delivery</span>
									<span class="payment-desc">Order Now And Pay On Delivery</span>
								</label>
								<label class="payment-method">
									<input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
									<span>Debit/Credit Card</span>
									<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
								</label>
								<label class="payment-method">
									<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
									<span>Paypal</span>
									<span class="payment-desc">You can pay with your credit</span>
									<span class="payment-desc">card if you don't have a paypal account</span>
								</label>
								@error('paymentmode') <span class="text-danger">{{ message}}</span> @enderror
							</div>
							@if(session::has('checkout'))
								<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">&#8358;{{ session::get('checkout')[ 'total'] }}</span></p>
							@endif
							{{-- <a href="thankyou.html" class="btn btn-medium">Place order now</a> --}}
							<button type="submit" class="btn btn-medium">Place order now</button>
						</div>
						<div class="summary-item shipping-method">
							<h4 class="title-box f-title">Shipping method</h4>
							<p class="summary-info"><span class="title">Flat Rate</span></p>
							<p class="summary-info"><span class="title">Fixed &#8358;0</span></p>
							
						</div>
					</div>
	
				</form>
				
			

			</div><!--end main content area-->
		</div><!--end container-->
</main>
{{-- <div id="content" class="site-content">
        <div id="breadcrumb">
            <div class="container">
                <h2 class="title">Checkout</h2>
                <ul class="breadcrumb">
                    <li><a href="#" title="Home">Home</a></li>
                    <li><span>Checkout</span></li>
                </ul>
            </div>
        </div>
    </div> --}}

{{-- <div class="container">

			<div class="page-checkout">
				<div class="row">
					<div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<p>Returning customer? <a class="login" href="user-login.html">Click here to login</a>.</p>
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											Address
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
									<div class="panel-body">
										<form action="#" id="formaddress" method="post" class="form-horizontal">
											<div class="form-group">
												<div class="col-md-12">
													<label>Country</label>
													<select class="form-control">
														<option value="">Select a country</option>
														<option value="australia">Australia</option>
														<option value="brazil">Brazil</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<label>First Name</label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="col-md-6">
													<label>Last Name</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label>Company Name</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label>Address </label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label>City </label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<input type="submit" value="Save" class="btn pull-right">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											Shipping
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="accordion-body collapse" style="height: 0px;">
									<div class="panel-body">
										<form action="#" id="formshipping" method="post" class="form-horizontal">
											<div class="form-group">
												<div class="col-md-12">
													<span class="remember-box checkbox">
														<label>
															<input type="checkbox" checked="checked">Ship to billing address?
														</label>
													</span>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label>Country</label>
													<select class="form-control">
														<option value="">Select a country</option>
														<option value="australia">Australia</option>
														<option value="brazil">Brazil</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-6">
													<label>First Name</label>
													<input type="text" value="" class="form-control">
												</div>
												<div class="col-md-6">
													<label>Last Name</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label>Company Name</label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label>Address </label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label>City </label>
													<input type="text" value="" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<input type="submit" value="Save" class="btn pull-right">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											Payment
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="accordion-body collapse" style="height: 0px;">
									<div class="panel-body">
										<table class="cart-summary table table-bordered">
											<thead>
												<tr>
													<th class="width-80 text-center">Image</th>
													<th>Name</th>
													<th class="width-100 text-center">Unit price</th>
													<th class="width-100 text-center">Qty</th>
													<th class="width-100 text-center">Total</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>
														<a href="product-detail-left-sidebar.html">
															<img width="80" alt="Product Image" class="img-responsive" src="img/product/19.jpg">
														</a>
													</td>
													<td>
														<a href="product-detail-left-sidebar.html" class="product-name">Organic Strawberry Fruits</a>
													</td>
													<td class="text-center">
														$265
													</td>
													<td class="text-center">
														1
													</td>
													<td class="text-center">
														$265
													</td>
												</tr>
												
												<tr>
													<td>
														<a href="product-detail-left-sidebar.html">
															<img width="80" alt="Product Image" class="img-responsive" src="img/product/31.jpg">
														</a>
													</td>
													<td>
														<a href="product-detail-left-sidebar.html" class="product-name">Organic Strawberry Fruits</a>
													</td>
													<td class="text-center">
														$150
													</td>
													<td class="text-center">
														2
													</td>
													<td class="text-center">
														$300
													</td>
												</tr>
											</tbody>
										</table>

										<h4 class="heading-primary">Cart Total</h4>
										<table class="table cart-total">
											<tbody>
												<tr>
													<th>
														Cart Subtotal
													</th>
													<td class="total">
														$431
													</td>
												</tr>
												<tr>
													<th>
														Shipping
													</th>
													<td>
														Free Shipping
													</td>
												</tr>
												<tr>
													<th>
														<strong>Order Total</strong>
													</th>
													<td class="total">
														$431
													</td>
												</tr>
											</tbody>
										</table>

										<h4 class="heading-primary">Payment</h4>
										<form action="#" method="post">
											<div class="item">
												<input type="checkbox">Pay by bank wire (order processing will be longer)
											</div>
											<div class="item">
												<input type="checkbox">Pay by check (order processing will be longer)
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="pull-right">
							<input type="submit" value="Place Order" name="proceed" class="btn btn-primary">
						</div>
					</div>
					
					<div class="checkout-right col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<h4 class="title">Cart Total</h4>
						<table class="table cart-total">
							<tbody>
								<tr class="cart-subtotal">
									<th>
										<strong>Cart Subtotal</strong>
									</th>
									<td>
										<strong><span class="amount">$431</span></strong>
									</td>
								</tr>
								<tr class="shipping">
									<th>
										Shipping
									</th>
									<td>
										Free Shipping<input type="hidden" value="free_shipping" class="shipping-method" name="shipping_method">
									</td>
								</tr>
								<tr class="total">
									<th>
										<strong>Order Total</strong>
									</th>
									<td>
										<strong><span class="amount">$431</span></strong>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div> --}}



    public $ship_to_different;
    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $city;
    public $state;
    public $country;
    public $zipcode;
    
    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_line1;
    public $s_line2;
    public $s_city;
    public $s_state;
    public $s_country;
    public $s_zipcode;
    public $paymentmode;
    public $thankyou;
