<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Open Hands Farm - Organic, Fresh Food, Tools, Farm Store</title>

    <meta name="keywords" content="Organic, Fresh Food, Tools, Farm Store">
    <meta name="description" content="Open Hands Farm - Organic, Fresh Food, Tools, Farm Store">
    <meta name="author" content="Code Plateau">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
    
    
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.css') }}">
    <link   href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"  type="text/css">
    <link rel="stylesheet" href="{{ asset('libs/font-material/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/slider-range/css/jslider.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/chosen.min.css') }}"> --}}
	
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/reponsive.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/owl.carousel.min.css') }}">
    
   
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css" integrity="sha256-SMGbWcp5wJOVXYlZJyAXqoVWaE/vgFA5xfrH3i/jVw0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
    
   
    
    @livewireStyles
</head>

<body class="home home-2">
    <div id="all">
        <div class="mercado-clone-wrap">
            <div class="mercado-panels-actions-wrap">
                <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
            </div>
            <div class="mercado-panels"></div>
        </div>
         <header id="header" class="header header-style-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="topbar-menu-area">
                        <div class="container">
                            <div class="topbar-menu left-menu">
                                <ul>
                                    <li class="menu-item" >
                                        <a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topbar-menu right-menu">
                                <ul>
                                    
                                    <li class="menu-item lang-menu menu-item-has-children parent">
                                        <a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="submenu lang" >
                                            <li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="assets/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
                                            <li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="assets/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
                                            <li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="assets/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
                                            <li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="assets/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children parent" >
                                        <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="submenu curency" >
                                            <li class="menu-item" >
                                                <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                            </li>
                                            <li class="menu-item" >
                                                <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @if(Route::has('login'))
                                        @auth
                                            @if(Auth::user()->utype === 'ADM')
                                                <li class="menu-item menu-item-has-children parent" >
                                                    <a title="my account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                    <ul class="submenu curency" >
                                                        <li class="menu-item" >
                                                            <a href="{{route('admin.dashboard')}}" title="Log in to your dashboard">My Dashboard</a>
                                                        </li>
                                                        <li class="menu-item" >
                                                            <a href="{{ route('admin.categories') }}" title="Categories">Categories</a>
                                                        </li>
                                                        <li class="menu-item" >
                                                            <a href="{{ route('admin.products') }}" title="All Products">All Products</a>
                                                        </li>
                                                        <li class="menu-item" >
                                                            <a href="{{ route('admin.homeslider') }}" title="Manage Home Slider">Manage Slider </a>
                                                        </li>
                                                        <li class="menu-item" >
                                                            <a href="{{ route('admin.homecategories') }}" title="Mange Home Categories">Manage Categories </a>
                                                        </li>
                                                        <li class="menu-item" >
                                                            <a href="{{ route('admin.sale') }}" title="Mange Sale Settings">Sale Settings </a>
                                                        </li>
                                                        <li class="menu-item" >
                                                            <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit(); "
                                                            title="Logout your Admin account">Logout</a>
                                                        </li>
                                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </li>
                                            @else
                                                <li class="menu-item menu-item-has-children parent" >
                                                    <a title="my account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                    <ul class="submenu curency" >
                                                        <li class="menu-item" >
                                                            <a href="{{route('admin.dashboard')}}" title="Log in to your dashboard"><i class="fa fa-cog"></i>My Dashboard</a>
                                                        </li>
                                                        <li class="menu-item" >
                                                            <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit(); "
                                                            title="Logout your Admin account"><i
                                                                class="fa fa-cog"></i>Logout</a>
                                                        </li>
                                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </li>
                                            @endif
                                        @else
                                            <li class="menu-item" ><a title="Register or Login" href="{{route('login') }}">Login</a></li>
                                            <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Register</a></li>
                    
                                        @endif
                                    @endif    
                                </ul>
                            </div>
                        </div>
                    </div>
                    

                    <div class="container">
                        <div class="mid-section main-info-area">
    
                            <div class="wrap-logo-top left-section">
                                <a href="index.html" class="link-to-home"><img src="{{asset('img/logo-4.png')}}" alt="mercado"></a>
                            </div>
                            <div class="wrap-search center-section">
                                @livewire('header-search-component')
                            </div> 
                            <div class="wrap-icon right-section">
                               
                                @livewire('wishlist-count-component')
                            
                                
                                @livewire('cart-count-component')
                                
                                <div class="wrap-icon-section show-up-after-1024">
                                    <a href="#" class="mobile-navigation">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="nav-section header-sticky">
                        
    
                        <div class="primary-nav-section">
                            <div class="container">
                                <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                                    <li class="menu-item home-icon">
                                        <a href="index.html" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="about-us.html" class="link-term mercado-item-title">About Us</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="shop.html" class="link-term mercado-item-title">Shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="cart.html" class="link-term mercado-item-title">Cart</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="checkout.html" class="link-term mercado-item-title">Checkout</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
                                    </li>																	
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
                {{ $slot }}	
	    <!-- Footer -->
		<footer id="footer">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
							<div class="block text">
								<div class="block-content">
									<a href="/" class="logo-footer">
										<img src="{{asset('img/logo-4.png')}}" width="50%" alt="Logo">
									</a>

									<p>
										Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.<br>
										Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut
										aliquip.
									</p>
								</div>
							</div>

							<div class="block social">
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

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
							<div class="block menu">
								<h2 class="block-title">Information</h2>

								<div class="block-content">
									<ul>
										<li><a href="#">Specials</a></li>
										<li><a href="#">New products</a></li>
										<li><a href="#">Best sellers</a></li>
										<li><a href="#">Terms and conditions</a></li>
										<li><a href="#">Our stores</a></li>
										<li><a href="#">Contact us</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
							<div class="block menu">
								<h2 class="block-title">Your Account</h2>

								<div class="block-content">
									<ul>
										<li><a href="#">My orders</a></li>
										<li><a href="#">My merchandise returns</a></li>
										<li><a href="#">My credit slips</a></li>
										<li><a href="#">My addresses</a></li>
										<li><a href="#">My personal info</a></li>
										<li><a href="#">My vouchers</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
							<div class="block text">
								<h2 class="block-title">Contact Us</h2>

								<div class="block-content">
									<div class="contact">
										<div class="item d-flex">
											<div>
												<i class="zmdi zmdi-home"></i>
											</div>
											<div>
												<span>23rd Avenue, Rayfield Street, Jos-South, Plateau State
													</span>
											</div>
										</div>
										<div class="item d-flex">
											<div>
												<i class="zmdi zmdi-phone-in-talk"></i>
											</div>
											<div>
												<span>080-456-789-10<br>090-362-185-57</span>
											</div>
										</div>
										<div class="item d-flex">
											<div>
												<i class="zmdi zmdi-email"></i>
											</div>
											<div>
												<span><a href="mailto:support@domain.com">support@domain.com</a><br><a
														href="mailto:contact@domain.com">contact@domain.com</a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Copyright -->
			<div class="footer-copyright text-center">
				<div class="container">
					<div class="payment">
						<img src="{{asset('img/payment.png')}}" alt="Payment">
					</div>

					<div class="copyright"><a target="_blank" href="https://www.templateshub.net">Code
							Plateau</a></div>
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
		<script src="{{ asset('libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.js') }}"></script>
        
        <script src="{{ asset('libs/jquery.countdown/jquery.countdown.js') }}"></script>
        <script src="{{ asset('libs/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
        <script src="{{ asset('libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('libs/slider-range/js/tmpl.js') }}"></script>
        <script src="{{ asset('libs/slider-range/js/jquery.dependClass-0.1.js') }}"></script>
        <script src="{{ asset('libs/slider-range/js/draggable-0.1.js') }}"></script>
        <script src="{{ asset('libs/slider-range/js/jquery.slider.js') }}"></script>
        <script src="{{ asset('libs/elevatezoom/jquery.elevatezoom.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
        <script src="{{ asset('js/main.js') }}"></script>
        
        <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{asset('assets/js/functions.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js" integrity="sha512-1mDhG//LAjM3pLXCJyaA+4c+h5qmMoTc7IuJyuNNPaakrWT9rVTxICK4tIizf7YwJsXgDC2JP74PGCc7qxLAHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.tiny.cloud/1/d6atu3ca12gfbv992r9fze3n2koehhf2b11hjs4cqr2tlf7x/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
       
	@livewireScripts
</body>


</html>