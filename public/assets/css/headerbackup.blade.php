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
                                                        <a href="{{route('admin.dashboard')}}" title="Log in to your dashboard"><i class="fa fa-cog"></i>My Dashboard</a>
                                                    </li>
                                                    <li class="menu-item" >
                                                        <a href="{{ route('admin.categories') }}" title="Categories"><i class="fa fa-list-alt"></i>Categories</a>
                                                    </li>
                                                    <li class="menu-item" >
                                                        <a href="{{ route('admin.products') }}" title="All Products"><i class="fa fa-product-hunt"></i>All Products</a>
                                                    </li>
                                                    <li class="menu-item" >
                                                        <a href="{{ route('admin.homeslider') }}" title="Manage Home Slider"><i class="fa fa-cog"></i>Manage Slider </a>
                                                    </li>
                                                    <li class="menu-item" >
                                                        <a href="{{ route('admin.homecategories') }}" title="Mange Home Categories"><i class="fa fa-cog"></i>Manage Categories </a>
                                                    </li>
                                                    <li class="menu-item" >
                                                        <a href="{{ route('admin.sale') }}" title="Mange Sale Settings"><i class="fa fa-cog"></i>Sale Settings </a>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                    

                    <div class="container">
                        <div class="mid-section main-info-area">
    
                            <div class="wrap-logo-top left-section">
                                <a href="index.html" class="link-to-home"><img src="assets/images/logo-top-1.png" alt="mercado"></a>
                            </div>
    
                                @livewire('header-search-component')
    
                            <div class="wrap-icon right-section">
                                @livewire('cart-count-component')

                            
                                @livewire('wishlist-count-component')
        
                                
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
                                                        <a href="{{ route('admin.homeslider') }}" title="Manage Home Slider"><i class="fa fa-cog"></i>Manage Slider </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="{{ route('admin.homecategories') }}" title="Mange Home Categories"><i class="fa fa-cog"></i>Manage Categories </a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="{{ route('admin.sale') }}" title="Mange Sale Settings"><i class="fa fa-cog"></i>Sale Settings </a>
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
                            
                            @livewire('cart-count-component')

                            
                            @livewire('wishlist-count-component')
        
                           
                            @livewire('header-search-component')
                        
                        </div>	
                       
                    </div>
                </div>
            </div>
        </header>