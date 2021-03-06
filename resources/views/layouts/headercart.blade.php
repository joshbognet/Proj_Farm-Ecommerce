<!DOCTYPE html>
<html lang="zxx">

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Open Hands Farm</title>
		
		<meta name="keywords" content="Organic, Fresh Food, Farm Store">
		<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
		<meta name="author" content="tivatheme">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('libs/font-material/css/material-design-iconic-font.min.css') }}">
		<link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/nivo-slider.css')}}">
		<link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/animate.css')}}">
		<link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/style.css')}}">
		<link rel="stylesheet" href="{{ asset('libs/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ asset('libs/slider-range/css/jslider.css')}}">
			<!-- Template CSS -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" href="{{asset('css/reponsive.css')}}">
	    <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css" integrity="sha256-SMGbWcp5wJOVXYlZJyAXqoVWaE/vgFA5xfrH3i/jVw0=" crossorigin="anonymous" />
 	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		@livewireStyles
</head>    
    <body class="home home-1">
		<div id="all">
			<!-- Header -->
			<header id="header">
				<!-- Topbar -->
				<div class="topbar">
					<!-- Close Topbar -->
					<div class="close-topbar">
						<i class="zmdi zmdi-close"></i>
					</div>
					
					<!-- Topbar Content -->
					<div class="container topbar-content">
						<div class="row">
							<!-- Topbar Left -->
							<div class="col-md-7 col-sm-7 col-xs-12">
								<div class="topbar-left d-flex">
									<div class="email">
										<i class="fa fa-envelope" aria-hidden="true"></i>Email: tivatheme@gmail.com
									</div>
									<div class="skype">
										<i class="fa fa-skype" aria-hidden="true"></i>Skype: tivatheme
									</div>
								</div>
							</div>
							
							<!-- Topbar Right -->
							<div class="col-md-5 col-sm-5 col-xs-12">
								<div class="topbar-right d-flex justify-content-end">
									{{-- <!-- My Account -->
									<div class="dropdown account">
										<div class="dropdown-toggle" data-toggle="dropdown">
											My Account
										</div>
										<div class="dropdown-menu">									
											<div class="item">
												<a href="" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
											</div>
											<div class="item">
												<a href="/login" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
											</div>
											<div class="item">
												<a href="/register" title="Register Account"><i class="fa fa-user"></i>Register</a>
											</div>
											<div class="item">
												<a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My Wishlists</a>
											</div>
										</div>
									</div>
									 --}}
									<!-- Language -->
									<div class="dropdown language">
										<div class="dropdown-toggle" data-toggle="dropdown">
											<img src="img/language-en.jpg" alt="Language English">
										</div>
										<div class="dropdown-menu">
											<div class="item">
												<a href="#" title="Language English"><img src="img/language-en.jpg" alt="Language English"> English</a>
											</div>
											<div class="item">
												<a href="#" title="Language French"><img src="img/language-fr.jpg" alt="Language French"> French</a>
											</div>
										</div>
									</div>
									
									<!-- Currency -->
									<div class="dropdown currency">
										<div class="dropdown-toggle" data-toggle="dropdown">
											USD
										</div>
										<div class="dropdown-menu">
											<div class="item">
												<a href="#" title="NGN">NGN</a>
											</div>
											<div class="item">
												<a href="#" title="USD">USD</a>
											</div>
											<div class="item">
												<a href="#" title="EUR">EUR</a>
											</div>
											
										</div>
									</div>
									@if(Route::has('login'))
                                    @auth
                                        @if(Auth::user()->utype === 'ADM')
                                            <!-- My Account -->
                                            <div class="dropdown account">
                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                    My Account({{Auth::user()->name}})
                                                </div>
                                                <div class="dropdown-menu">									
                                                    <div class="item">
                                                        <a href="{{route('admin.dashboard')}}" title="Log in to your dashboard"><i class="fa fa-cog"></i>My Dashboard</a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="{{ route('admin.categories') }}" title="view product category"><i class="fa fa-sign-in"></i>Categories</a>
                                                    </div>
                                                     
                                                </div>
                                            </div>

                                        @else
                                             <!-- My Account -->
                                            <div class="dropdown account">
                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                    My Account({{Auth::user()->name}})
                                                </div>
                                                <div class="dropdown-menu">									
                                                    <div class="item">
                                                        <a href="{{ route('user.dashboard') }}" title="Log in to your dashboard"><i class="fa fa-cog"></i>My Dashboard</a>
                                                    </div>
                                                     <div class="item">
                                                        <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit(); "
                                                        title="Logout your customer account"><i
                                                            class="fa fa-cog"></i>Logout</a>
                                                    </div>
                                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                        @csrf
    
                                                    </form>
                                                </div>
                                            </div>

                                        @endif

                                    @else
                                           
                                        <div class="dropdown account">
                                            <div class="item">
                                                <a href="{{route('login')}}" class="font-primary" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
                                            </div>
                                        </div>
                                        
                                    
                                        <div class="dropdown account">
                                            <div class="item" >
                                                <a href="{{ route('register')}}" class="font-primary" title="Register your customer account"><i class="fa fa-user"></i>Registration</a>
                                            </div>
                                        </div>
                                    @endif
                                @endif
								</div>
							</div>
						</div>
					</div>
					
					<!-- Open Topbar -->
					<div class="container active">
						<div id="toggle-topbar"><i class="zmdi zmdi-plus"></i></div>
					</div>
				</div>
				
				<!-- Header Top -->
				<div class="header-top">
					<div class="container">
						<div class="row">
							<!-- Search -->
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-search">
									<form action="#" method="get">
										<input type="text" class="form-input" placeholder="Search">
										<button type="submit" class="fa fa-search"></button>
									</form>
								</div>
							</div>
							
							<!-- Logo -->
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="logo">
									<a href="/">
										<img class="img-responsive" src="{{ asset('img/logo-4.png') }}" Width="50%" alt="Logo">
									</a>
								</div>
								
								<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
							</div>
							
							
							
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="block-cart dropdown">
									
									<div class="cart-title">
										
											<i class="fa fa-shopping-basket"></i>
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
															<a class="remove" href="#">
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
								</div>
								<div class="block-cart dropdown shift">
									
									<div class="cart-title">
										
											<i class="fa fa-heart"></i>
											@if(Cart::instance('wishlist')->count()>0)
												<span class="index">{{Cart::instance('wishlist')->count()}} item</span>		
	
											@endif
									</div>
									
									
								</div>	
							</div>	
						</div>
					</div>
				</div>
				
				<!-- Main Menu -->
				<div id="main-menu">
					<ul class="menu">
						<li class="dropdown">
							<a href="/" title="Homepage">Home</a>
							
							
						</li>
						
						<li class="dropdown">
							<a href="/shop" title="Shop">Shop</a>
							<div class="dropdown-menu">
								<ul>
									{{-- <li class="has-image">
										<img src="img/product/product-category-1.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Vegetables">Vegetables</a>
									</li>
									<li class="has-image">
										<img src="img/product/product-category-2.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Fruits">Fruits</a>
									</li>
									<li class="has-image">
										<img src="img/product/product-category-3.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Bread">Bread</a>
									</li>
									<li class="has-image">
										<img src="img/product/product-category-4.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Juices">Juices</a>
									</li>
									<li class="has-image">
										<img src="img/product/product-category-5.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Tea and coffee">Tea and coffee</a>
									</li> --}}
								</ul>
							</div>
						</li>
						
						<li class="dropdown">
							<a href="#" title="Page">Page</a>
							<div class="dropdown-menu">
								<ul>
									<li class="dropdown-submenu">
										<a href="product-grid-left-sidebar.html" title="Product List">Product List</a>
										<div class="dropdown-menu level2">
											<ul>
												<li><a href="product-grid-left-sidebar.html" title="Product Grid - Left Sidebar">Product Grid - Left Sidebar</a></li>
												<li><a href="product-grid-right-sidebar.html" title="Product Grid - Right Sidebar">Product Grid - Right Sidebar</a></li>
												<li><a href="product-grid-full-width.html" title="Product Grid - Full Width">Product Grid - Full Width</a></li>
												<li><a href="product-list-left-sidebar.html" title="Product List - Left Sidebar">Product List - Left Sidebar</a></li>
											</ul>
										</div>
									</li>
									<li class="dropdown-submenu">
										<a href="product-detail-left-sidebar.html" title="Product List">Product Detail</a>
										<div class="dropdown-menu level2">
											<ul>
												<li><a href="product-detail-left-sidebar.html" title="Product Detail - Left Sidebar">Product Detail - Left Sidebar</a></li>
												<li><a href="product-detail-full-width-1.html" title="Product List - Full Width 1">Product Detail - Full Width 1</a></li>
												<li><a href="product-detail-full-width-2.html" title="Product List - Full Width 2">Product Detail - Full Width 2</a></li>
											</ul>
										</div>
									</li>
									<li>
										<a href="product-cart.html" title="Cart">Cart</a>
									</li>
									<li>
										<a href="product-checkout.html" title="Checkout">Checkout</a>
									</li>
									<li class="dropdown-submenu">
										<a href="#" title="User">User</a>
										<div class="dropdown-menu level2">
											<ul>
												<li><a href="user-login.html" title="Login">Login</a></li>
												<li><a href="user-register.html" title="Register">Register</a></li>
												<li><a href="#" title="My Account">My Account</a></li>
												<li><a href="#" title="My Wishlists">My Wishlists</a></li>
											</ul>
										</div>
									</li>
									<li>
										<a href="page-404.html" title="Page 404">Page 404</a>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="dropdown">
							<a href="blog-list-left-sidebar-1.html">Blog</a>
							<div class="dropdown-menu">
								<ul class="has-sub">
									<li><a href="blog-list-left-sidebar-1.html" title="Blog List - Left Sidebar 1">Blog List - Left Sidebar 1</a></li>
									<li><a href="blog-list-left-sidebar-2.html" title="Blog List - Left Sidebar 2">Blog List - Left Sidebar 2</a></li>
									<li><a href="blog-grid-full-width.html" title="Blog Grid - Full Width">Blog Grid - Full Width</a></li>
									<li><a href="blog-detail.html" title="Blog Detail">Blog Detail</a></li>
								</ul>
							</div>
						</li>
						
						<li>
							<a href="page-about-us.html">About Us</a>
						</li>
						
						<li>
							<a href="page-contact.html">Contact</a>
						</li>
					</ul>
				</div>
			</header>
                {{ $slot }}	
			<!-- Footer -->
			<footer id="footer">
				<div class="footer">
					<!-- Footer Top -->
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block text">
										<div class="block-content">
											<a href="index.html" class="logo-footer">
												<img src="{{asset('img/logo-4.png')}}" width="50%" alt="Logo">
											</a>
									
											<div class="contact">
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-home"></i>
													</div>
													<div class="item-right">
														<span>23rd Avenue, Rayfield Street, Jos-South, Plateau State
														</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-phone-in-talk"></i>
													</div>
													<div class="item-right">
														<span>080-456-789-10<br>090-362-185-57</span>
													</div>
												</div>
												<div class="item d-flex">
													<div class="item-left">
														<i class="zmdi zmdi-email"></i>
													</div>
													<div class="item-right">
														<span><a href="mailto:support@domain.com">support@domain.com</a><br><a href="mailto:contact@domain.com">contact@domain.com</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block instagram">
										<h2 class="block-title">Photo Instagram</h2>
										
										<div class="block-content">
											<div class="row margin-0">
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{asset('img/instagram-1.png')}}" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{asset('img/instagram-2.png')}}" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{asset('img/instagram-3.png')}}" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{asset('img/instagram-4.png')}}" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{asset('img/instagram-5.png')}}" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{asset('img/instagram-6.png')}}" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{asset('img/instagram-7.png')}}" alt="Instagram Image">
													</a>
												</div>
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding-0">
													<a href="#">
														<img src="{{asset('img/instagram-8.png')}}" alt="Instagram Image">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="block newsletter">
										<h2 class="block-title">Newsletter</h2>
										
										<div class="block-content">
											<p class="description">Sign up for newsletter to receive special offers and exclusive news about FreshMart products</p>
											<form action="#" method="post">
												<input type="text" placeholder="Enter Your Email">
												<button type="submit" class="btn btn-primary">Subscribe</button>
											</form>
										</div>
									</div>
										
									<div class="block social">
										<h2 class="block-title">Follow Us</h2>
										
										<div class="block-content">
											<ul>
												<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
												<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Footer Bottom -->
					<div class="footer-bottom">
						<div class="payment-intro">
							<div class="container">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="{{asset('img/home1-payment-1.png')}}" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Free Shipping item</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="{{asset('img/home1-payment-2.png')}}" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Secured Payment</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="item d-flex">
											<div class="item-left">
												<img src="{{asset('img/home1-payment-3.png')}}" alt="Payment Intro">
											</div>
											<div class="item-right">
												<h3 class="title">Money Back Guarantee</h3>
												<div class="content">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Copyright -->
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<div class="copyright"><a target="_blank" href="https://www.templateshub.net">Code
									Plateau</a></div>
							</div>
							
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
								<div class="payment">
									<span>Payment Accept</span>
									<img src="{{asset('img/payment.png')}}" alt="Payment">
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			
			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fa fa-long-arrow-up"></i>
				</a>
			</div>
			
			<!-- Page Loader -->
			 <div id="page-preloader">
				<div class="page-loading">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>
			
		<!-- Vendor JS -->
		<script src="{{asset('libs/jquery/jquery.js')}}"></script>
		<script src="{{asset('libs/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('libs/jquery.countdown/jquery.countdown.js')}}"></script>
		<script src="{{asset('libs/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
		<script src="{{asset('libs/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('libs/slider-range/js/tmpl.js')}}"></script>
		<script src="{{asset('libs/slider-range/js/jquery.dependClass-0.1.js')}}"></script>
		<script src="{{asset('libs/slider-range/js/draggable-0.1.js')}}"></script>
		<script src="{{asset('libs/slider-range/js/jquery.slider.js')}}"></script>
		<script src="{{asset('libs/elevatezoom/jquery.elevatezoom.js')}}"></script>  

		<!-- Template CSS -->
		 <script src="{{asset('js/main.js')}}"></script> 
		{{-- <script src="{{asset('js/qty.js')}}"></script> --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js" integrity="sha512-1mDhG//LAjM3pLXCJyaA+4c+h5qmMoTc7IuJyuNNPaakrWT9rVTxICK4tIizf7YwJsXgDC2JP74PGCc7qxLAHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
		@livewireScripts
		@stack('scripts')
	</body>


</html>