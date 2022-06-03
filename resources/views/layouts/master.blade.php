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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
    
    
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/font-material/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/nivo-slider/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/slider-range/css/jslider.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}"> --}}
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}"> --}}
<!-- CSS only -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reponsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @livewireStyles
</head>

<body class="home home-2">
    <div id="all">
        <!-- Header -->
        <header id="header">
            <!-- Topbar -->
            <div class="topbar">
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
                        
             
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="topbar-right d-flex justify-content-end">
                                {{-- <!-- Login -->
                                <div class="dropdown account">
                                    <div class="" data-toggle="dropdown">
                                        <a href="#" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
                                    </div>
                                </div>
                                
                                <!-- Registration-->
                                <div class="dropdown account">
                                    <div class="" data-toggle="dropdown">
                                        <a href="#" title="Register your customer account"><i class="fa fa-user"></i>Registration</a>
                                    </div>
                                </div> --}}
                                
                       
                                <div class="dropdown language">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{asset('img/language-en.jpg')}}" alt="Language English">
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="item">
                                            <a href="#" title="Language English"><img src="{{asset('img/language-en.jpg')}}" alt="Language English"> English</a>
                                        </div>
                                        <div class="item">
                                             <a href="#" title="Language French"><img src="{{asset('img/language-fr.jpg')}}" alt="Language French"> French</a>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="dropdown currency">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        USD
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="item">
                                            <a href="#" title="USD">USD</a>
                                        </div>
                                        <div class="item">
                                            <a href="#" title="EUR">EUR</a>
                                        </div>
                                        <div class="item">
                                            <a href="#" title="GBP">GBP</a>
                                        </div>
                                    </div>
                                </div>
                                @if(Route::has('login'))
                                    @auth
                                        @if(Auth::user()->utype === 'ADM')
                                            
                                            <div class="dropdown account">
                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                    My Account({{Auth::user()->name}})
                                                </div>
                                                <div class="dropdown-menu">									
                                                    <div class="item">
                                                        <a href="{{route('admin.dashboard')}}" title="Log in to your dashboard"><i class="fa fa-cog"></i>My Dashboard</a>
                                                    </div>
                                                    
                                                    <div class="item">
                                                        <a href="{{ route('admin.categories') }}" title="Categories"><i class="fa fa-list-alt"></i>Categories</a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="{{ route('admin.products') }}" title="All Products"><i class="fa fa-product-hunt"></i>All Products</a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="{{ route('admin.homeslider') }}" title="Manage Home Slider"><i class="fa fa-cog"></i>Manage Home Slider </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="{{ route('admin.homecategories') }}" title="Mange Home Categories"><i class=""><i>Manage Home Categories </a>
                                                    </div>
                                                                                              
                                                    <div class="item">
                                                        <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit(); "
                                                        title="Logout your Admin account"><i
                                                            class="fa fa-cog"></i>Logout</a>
                                                    </div>
                                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>

                                        @else
                                         
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
                                                <a href="{{route('login')}}" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
                                            </div>
                                        </div>
                                        
                                    
                                        <div class="dropdown account">
                                            <div class="item" >
                                                <a href="{{ route('register')}}" title="Register your customer account"><i class="fa fa-user"></i>Registration</a>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Header Top -->
            <div class="header-top">
                <div class="container">
                    <div class="row margin-0">
                        <div class="col-lg-2 col-md-2 col-sm-12 padding-0">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="home-2.html">
                                    <img class="img-responsive" src="{{asset('img/logo-4.png')}}" alt="Logo">
                                </a>
                            </div>
                            
                            <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                        </div>
                        
                        <div class="col-lg-7 col-md-7 col-sm-12 padding-0">
                            <!-- Main Menu -->
                            <div id="main-menu">
                                <ul class="menu">
                                    <li class="dropdown">
                                        <a href="/" title="Homepage">Home</a>
                                       
                                    </li>
                                    
                                    <li class="dropdown">
                                        <a href="/shop" title="Products">Shop</a>
                                        <div class="dropdown-menu">
                                            {{-- <ul>
                                                <li class="has-image">
                                                    <img src="{{asset('img/product/product-category-1.png')}}" alt="Product Category Image">
                                                    <a href="product-grid-left-sidebar.html" title="Vegetables">Vegetables</a>
                                                    </li>
                                                <li class="has-image">
                                                    <img src="{{asset('img/product/product-category-2.png')}}" alt="Product Category Image">
                                                    <a href="product-grid-left-sidebar.html" title="Fruits">Fruits</a>
                                                </li>
                                                <li class="has-image">
                                                    <img src="{{asset('img/product/product-category-3.png')}}" alt="Product Category Image">
                                                    <a href="product-grid-left-sidebar.html" title="Bread">Bread</a>
                                                </li>
                                                <li class="has-image">
                                                    <img src="{{asset('img/product/product-category-4.png')}}" alt="Product Category Image">
                                                    <a href="product-grid-left-sidebar.html" title="Juices">Juices</a>
                                                </li>
                                                <li class="has-image">
                                                    <img src="{{asset('img/product/product-category-5.png')}}" alt="Product Category Image">
                                                    <a href="product-grid-left-sidebar.html" title="Tea and coffee">Tea and coffee</a>
                                                </li>
                                            </ul> --}}
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
                                                    <a href="/cart" title="Cart">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="/checkout" title="Checkout">Checkout</a>
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
                        </div>
                        
                        <div class="col-lg-3 col-md-3 col-sm-12 padding-0">
                            <!-- Cart -->
                            <div class="block-cart dropdown">
                                <div class="cart-title">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="cart-count">2</span>
                                </div>
                                
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img src="{{asset('img/product/7.jpg')}}" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="product-detail-left-sidebar.html">Organic Strawberry Fruits</a>
                                                        </div>
                                                        <div>	
                                                            2 x <span class="product-price">$28.98</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img src="{{asset('img/product/6.jpg')}}" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="product-detail-left-sidebar.html">Organic Strawberry</a>
                                                        </div>
                                                        <div>	
                                                            1 x <span class="product-price">$35.00</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="total">
                                                    <td>Total:</td>
                                                    <td colspan="2">$92.96</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan="3">
                                                        <div class="cart-button">
                                                            <a class="btn btn-primary" href="product-cart.html" title="View Cart">View Cart</a>
                                                            <a class="btn btn-primary" href="product-checkout.html" title="Checkout">Checkout</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            @livewire('header-search-component')
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
        
        <script src="{{asset('js/functions.js')}}"></script>
<!-- JavaScript Bundle with Popper -->

     
        {{-- <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>   
         
	    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>  --}}
	  
        <!-- Template CSS -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{asset('assets/js/functions.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
        @livewireScripts
        @stack('scripts')
    </body>

    </html>
