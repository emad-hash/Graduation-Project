<div>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
        <div class="row align-items-center">
        <div class="col-xl-3 col-lg-4">
        <div class="header-info">
            <ul>
                <li>
           <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
            <ul class="language-dropdown">
             <li><a href="#"><img src="{{asset('assets/imgs/theme/555637.png')}}" alt="">Arabic</a>
            </ul>
            </li>
            </ul>
            </div>
            </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great discounts with up to 30% off<a href="shop.html">View details</a></li>
                                    <li>Save more with coupons</li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">                         
                        <div class="header-info header-info-right">
                            @auth
                            <ul>
     <li><i class="fi-rs-key"></i>{{Auth::user()->name}} / 
         <form  method="POST" action="{{route('logout')}}">
            @csrf
    <a href="{{route('logout')}}" onclick="event.prevrntDefault(); this.closest('form').submit();">Logout</a>
   </form> 
    </li> 
                            </ul>
                              @else
                            <ul>
        <li><i class="fi-rs-key"></i><a href="{{route('login')}}">Log In </a> / <a href="{{route('register')}}">Sign Up</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{route('home.index')}}"><img src="{{asset('assets/imgs/theme')}}/{{$setting->image}}"  alt="logo"></a>
                    </div>
                    <div class="header-right">
                        @livewire('header-search-component')

                        <div class="header-action-right">
                            <div class="header-action-2">
                                @livewire('wishlist-icon-component')
                                @livewire('cart-icon-component')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="{{route('home.index')}}"><img src="{{asset('assets/imgs/theme')}}/{{$setting->image}}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    @foreach ( $categories as $category )
                                        
                                    <li class="{{count($category->subCategories) > 0 ? 'has-children':''}}">
                                        <a href="{{route('product.category',['slug'=>$category->slug])}}"><i class="surfsidemedia-font-dress"></i>{{ $category-> name}}</a>
                                        @if(count($category->subCategories)>0)
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                @foreach($category->subCategories as $scategory)
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="{{route('product.category',['slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block" style="margin-left: 60px ;">
                            <nav>
                                <ul>
                                    {{-- {{dd(Request::url())}} --}}
                                    <li><a class="{{str_contains(Request::url(), '/') ? 'active' : ''}}" href="{{route('home.index')}}">Home </a></li>
                                    <li><a class="{{str_contains(Request::url(), '/about') ? 'active' : ''}}" href="{{route('about.index')}}">About</a></li>
                                    <li><a class="{{str_contains(Request::url(), '/shop') ? 'active' : ''}}" href="/shop">Shop</a></li>
                                    
                                    <li class="position-static"><a href="#">Our Collections <i
                                                class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            @foreach ( $categories as $category )
                                            <li class=" sub-mega-menu-width-22 {{count($category->subCategories) > 0 ? 'sub-mega-menu':''}}">
                                                <a class="menu-title" href="#">{{$category->name}}</a>
                                        @if(count($category->subCategories)>0)
                                                <ul>
                                                    @foreach($category->subCategories as $scategory)
                                                    <li><a href="{{route('product.category',['slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                        @endif
                                            </li>  
                                            @endforeach                                          
                                        </ul>
                                    </li>
                                    
                                    <li><a class="{{str_contains(Request::url(), '/contact') ? 'active' : ''}}" href="/contact">Contact</a></li>
                                    @auth
                                    @if(Auth::user()->utype == 'ADM')
                                    <li><a href="#">Dashboard<i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                            <li><a href="{{route('admin.products')}}">Products</a></li>
                                            <li><a href="{{route('admin.categories')}}">Categories</a></li>
                                            <li><a href="{{route('admin.slide')}}">Manage Slider</a></li>
                                            <li><a href="{{route('admin.coupons')}}">All Coupons</a></li>
                                            <li><a href="{{route('admin.order')}}">All Orders</a></li>
                                            <li><a href="{{route('admin.contactmassege')}}">All Comment</a></li>
                                            <li><a href="{{route('admin.setting')}}">Settings</a></li>
                                            <li><a href="#">Customers</a></li>
                                            <li><a href="{{route('logout')}}" onclick="event.prevrntDefault(); this.closest('form').submit();">Logout</a></li>
                                        </ul>
                                        @else
                                        <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('user.profile')}}">Profile</a></li>
                                                <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                                <li><a href="{{route('user.order')}}">My Orders</a></li>
                                                <li><a href="{{route('user.changepassword')}}">Change Password</a></li>
                                                <li><a href="{{route('logout')}}" onclick="event.prevrntDefault(); this.closest('form').submit();">Logout</a></li>
                                        @endif
                                      
                                    </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-smartphone"></i><span>Call Us</span> (+962) {{$setting->phone}} </p>
                    </div>
                    
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img alt="" src="{{asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="cart.html">
                                    <img alt="" src="">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt=""
                                                        src=""></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">test</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt=""
                                                        src=""></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">test</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="cart.html">View cart</a>
                                            <a href="shop-checkout.php">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="{{route('home.index')}}"><img src="{{asset('assets/imgs/theme/logo.png')}}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    {{-- <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form> --}}
                    @livewire('header-search-component')
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="shop.html"><i class="surfsidemedia-font-dress"></i>CANVAS PAINTINGS</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>MFD Wood Panels</a></li>
                                <li> <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> WATCHES</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Large Murals</a>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Three-Piece Plate</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="{{route('home.index')}}">Home</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="{{route('shop')}}">shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our
                                    Collections</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">CANVAS PAINTINGS</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Modern</a></li>
                                            <li><a href="product-details.html">ISlamic & Decorations</a></li>
                                            <li><a href="product-details.html">Expressions</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">MFD Wood Panels</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Modern</a></li>
                                            <li><a href="product-details.html">ISlamic & Decorations</a></li>
                                            <li><a href="product-details.html">Expressions</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">WATCHES</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Arcylic Watches</a></li>
                                            <li><a href="product-details.html">Wooden Decorative Clocks</a></li>
                                            <li><a href="product-details.html">Sticker Watches</a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                           
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Arabic</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="{{route('login')}}">Log In </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="{{route('register')}}">Sign Up</a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+962) 778084911 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
