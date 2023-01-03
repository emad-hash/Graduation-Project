<div>
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                @foreach ($slides as $slide )
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">{{$slide->top_title}}</h4>
                                    <h2 class="animated fw-900">{{$slide->title}}</h2>
                                    <h1 class="animated fw-900 text-brand">{{$slide->sub_title}}</h1>
                                    <p class="animated">{{$slide->offer}}</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="{{$slide->link}}"> Shop Now
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1"src="{{asset('assets/imgs/slider')}}/{{$slide->image}}" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-1.png" alt="">
                                <h4 class="bg-1">Delivery speed</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-2.png" alt="">
                                <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-3.png" alt="">
                                <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-4.png" alt="">
                                <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-5.png" alt="">
                                <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-6.png" alt="">
                                <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab"
                                data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one"
                                aria-selected="true">Featured</button>
                        </li>
                        
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three"
                                type="button" role="tab" aria-controls="tab-three" aria-selected="false">New
                                added</button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i
                        class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            {{-- @php
                               $witems = Cart::instance('Wishlist')->content()->pluck('id');
                             @endphp --}}
                            @foreach ($fproducts as $fproduct)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$fproduct->slug])}}">
                                                <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$fproduct->image}}" alt="">
                                            </a>
                                        </div>
                                        
                                        
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Fabulous</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                            
                                        <a href="#">{{$fproduct->category->name }}</a>

                                    </div>
                                    <h2><a href="{{route('product.details',['slug'=>$fproduct->slug])}}">{{$fproduct->name}}</a></h2>
                                    {{-- <div class="rating-result" title="90%">
                                        <span>
                                            <span>90%</span>
                                        </span>
                                    </div> --}}
                                    <div class="product-price">
                                        <span>{{$fproduct->regular_price}} JD </span>
                                        {{-- <span class="old-price">46 JD</span> --}}
                                    </div>
                                    <div class="product-action-1 show">
                                        {{-- @if ($witems->contains($fproduct->id))
                                        <a aria-label="Remove From Wishlist" class="action-btn hover-up Wishlisted" href="#" wire:click.prevent="removeFromWishlist({{ $fproduct->id}})"><i class="fi-rs-heart"></i></a>
                                        @else
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="AddToWishlist({{ $fproduct->id}}, '{{ $fproduct-> name}}','{{ $fproduct-> regular_price}}')"><i class="fi-rs-heart"></i></a>
                                      @endif --}}
                                       
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$fproduct->id}},'{{ $fproduct->name}}',{{ $fproduct->regular_price}})"><i
                                            class="fi-rs-shopping-bag-add"></i></a>
                                        </div> 
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                    <!--End product-grid-4-->
                </div>

                <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                    <div class="row product-grid-4">
                        @foreach ($nproducts as $nproduct)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$nproduct->slug])}}">
                                                <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$nproduct->image}}" alt="">
                                            </a>
                                        </div>
                                        
                                        
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Fabulous</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                            
                                        <a href="#">{{$nproduct->category->name }}</a>

                                    </div>
                                    <h2><a href="{{route('product.details',['slug'=>$nproduct->slug])}}">{{$nproduct->name}}</a></h2>
                                    {{-- <div class="rating-result" title="90%">
                                        <span>
                                            <span>90%</span>
                                        </span>
                                    </div> --}}
                                    <div class="product-price">
                                        <span>{{$nproduct->regular_price}} JD </span>
                                        {{-- <span class="old-price">46 JD</span> --}}
                                    </div>
                                    <div class="product-action-1 show">
                                        {{-- @if ($witems->contains($fproduct->id))
                                        <a aria-label="Remove From Wishlist" class="action-btn hover-up Wishlisted" href="#" wire:click.prevent="removeFromWishlist({{ $fproduct->id}})"><i class="fi-rs-heart"></i></a>
                                        @else
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="AddToWishlist({{ $fproduct->id}}, '{{ $fproduct-> name}}','{{ $fproduct-> regular_price}}')"><i class="fi-rs-heart"></i></a>
                                      @endif --}}
                                       
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$nproduct->id}},'{{ $nproduct->name}}',{{ $nproduct->regular_price}})"><i
                                            class="fi-rs-shopping-bag-add"></i></a>
                                        </div> 
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab three (New added)-->
            </div>
            <!--End tab-content-->
        </div>
    </section>


    <!-- New Arrivals -->
    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows">
                </div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                      @foreach ($lproducts  as $lproduct )     
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{route('product.details',['slug'=>$lproduct->slug])}}">
                                    <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$lproduct->image}}"  alt="">
                                </a>
                            </div>
                            {{-- <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                    href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div> --}}
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Fabulous</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="{{route('product.details',['slug'=>$lproduct->slug])}}">{{$lproduct->name}}</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>{{$lproduct->regular_price}} JD </span>
                                {{-- <span class="old-price">29 JD</span> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End product-cart-wrap-2-->
                </div>
            </div>
        </div>
    </section>
    <!-- end New Arrivals -->

    <!-- Canvas Paintings -->
    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>Canvas </span>Paintings</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-7-columns-2-arrows">
                </div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-7-columns-2">
                    @foreach ($cproducts  as $cproduct )     
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{route('product.details',['slug'=>$cproduct->slug])}}">
                                    <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$cproduct->image}}"  alt="">
                                </a>
                            </div>
                            {{-- <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                    href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div> --}}
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Fabulous</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="{{route('product.details',['slug'=>$cproduct->slug])}}">{{$cproduct->name}}</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>{{$cproduct->regular_price}} JD </span>
                                {{-- <span class="old-price">28 JD</span> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End product-cart-wrap-2-->
                </div>
            </div>
        </div>
    </section>
    <!-- end  Canvas Paintings -->
    <!-- MDF Wood Panels -->
    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>MDF Wood  </span>Panels</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-8-columns-2-arrows">
                </div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-8-columns-2">
                    @foreach ($mproducts  as $mproduct )     
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{route('product.details',['slug'=>$mproduct->slug])}}">
                                    <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$mproduct->image}}"  alt="">
                                </a>
                            </div>
                            {{-- <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                    href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div> --}}
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Fabulous</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="{{route('product.details',['slug'=>$mproduct->slug])}}">{{$mproduct->name}}</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>{{$mproduct->regular_price}} JD </span>
                                {{-- <span class="old-price">28 JD</span> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End product-cart-wrap-2-->
                </div>
            </div>
        </div>
    </section>
    <!-- end  MDF Wood Panels -->
    <!-- WATCHES -->
    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>WATCHES</span></h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-9-columns-2-arrows">
                </div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-9-columns-2">
                    @foreach ($wproducts  as $wproduct )     
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{route('product.details',['slug'=>$wproduct->slug])}}">
                                    <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$wproduct->image}}"  alt="">
                                </a>
                            </div>
                            {{-- <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                    href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div> --}}
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Fabulous</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="{{route('product.details',['slug'=>$wproduct->slug])}}">{{$wproduct->name}}</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>{{$wproduct->regular_price}} JD </span>
                                {{-- <span class="old-price">28 JD</span> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End product-cart-wrap-2-->
                </div>
            </div>
        </div>
    </section>
    <!-- end WATCHES -->
    <!-- Large Murals -->
    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>Large </span>Murals</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-10-columns-2-arrows">
                </div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-10-columns-2">
                    @foreach ($laproducts  as $laproduct )     
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{route('product.details',['slug'=>$laproduct->slug])}}">
                                    <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$laproduct->image}}"  alt="">
                                </a>
                            </div>
                            {{-- <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                    href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div> --}}
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Fabulous</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="{{route('product.details',['slug'=>$laproduct->slug])}}">{{$laproduct->name}}</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>{{$laproduct->regular_price}} JD </span>
                                {{-- <span class="old-price">28 JD</span> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End product-cart-wrap-2-->
                </div>
            </div>
        </div>
    </section>
    <!-- end Large Murals -->
    <!-- three-piece plate -->
    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>Three-piece  </span>Plate</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-11-columns-2-arrows">
                </div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-11-columns-2">
                    @foreach ($tproducts  as $tproduct )     
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="{{route('product.details',['slug'=>$tproduct->slug])}}">
                                    <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$tproduct->image}}"  alt="">
                                </a>
                            </div>
                            {{-- <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                    href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div> --}}
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Fabulous</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="{{route('product.details',['slug'=>$tproduct->slug])}}">{{$tproduct->name}}</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>{{$tproduct->regular_price}} JD </span>
                                {{-- <span class="old-price">28 JD</span> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End product-cart-wrap-2-->
                </div>
            </div>
        </div>
    </section>
    <!-- end  three-piece plate -->

</main>

</div >
