<div>
    <style>
        <style>
        
        .comment-form-rating>span{
            font-size: 14px;
            line-height: 20px;
            display: block;
            float: left;
            margin-right: 7px;
            color: #666;
        }
         .comment-form-rating ~ p{
            margin-bottom: 0 !important;
        }
         .comment-form-rating p.stars{
            display: inline-block;
            margin-bottom: 0 !important;
        }
        .comment-form-rating .stars input[type=radio]{
            display: none;
        }
        .comment-form-rating .stars label{
            display: block;
            float: left;
            margin: 0;
            padding: 0 2px;
        }
        .comment-form-rating .stars label::before{
            content: "\f005";
            font-family: FontAwesome;
            font-size: 15px;
            /*color: #e6e6e6;*/
            color: #efce4a;
        }
        .comment-form-rating .stars input[type=radio]:checked ~ label::before{
            color: #e6e6e6 ;
        }
        .comment-form-rating .stars:hover label::before{
            color: #efce4a !important;
        }
        .comment-form-rating .stars label:hover ~ label::before{
            color: #e6e6e6 !important;
        }
        .comment-form-rating{
            margin-bottom: 15px;
        }
        .comments-text{
            padding-bottom: 20px;
        }
        .color-gray{
            color: #e6e6e6;
        }
        .color-gold{
            color: gold;
        }
        .width-80-percent{
            width: 80%;
        }
        .star-rating{
            font-size: 0;
            position: relative;
            display: inline-block;
        }
        @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .star-rating{
          overflow: hidden;
        }
      }
      .star-rating::before{
        content: "\f005\f005\f005\f005\f005";
        font-family: FontAwesome;
         font-size: 15px;
          color: #e6e6e6;
      }
      .star-rating span{
        display: inline-block;
        float: left;
        overflow-x: hidden; 
        position: absolute;
        top: 0;
        left: 0;
      }
      .star-rating span::before{
        content: "\f005\f005\f005\f005\f005";
        font-family: FontAwesome;
        font-size: 15px;
        color: #efce4a;
      }
      .width-0-percent{
        width: 0%;
      }
      .width-20-percent{
        width: 20%;
      }
      .width-40-percent{
        width: 40%;
      }
      .width-60-percent{
        width: 60%;
      }
      .width-80-percent{
        width: 80%;
      }
      .width-100-percent{
        width: 100%;
      }
      .product-extra-link2 .Wishlisted {
        background-color: #F15412;
        }
        .Wishlisted i{
            color: white;   
        }
        
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Details
                    <span></span> {{$product->name}}

                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/products')}}/{{$product->image}}" alt="product image">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-fac')}}ebook.svg" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-twi')}}tter.svg" alt=""></a></li>
                                                        <li class="social-instagram"><a href="#"><img
    
                                                        src="{{ asset('assets/imgs/theme/icons/icon-ins')}}tagram.svg" alt=""></a>
                                            </li>
                                            <li class="social-linkedin"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-pin')}}terest.svg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{$product->name}}</h2>
                                        <div class="product-detail-rating">
                                            <div class="product-rate-cover text-end">
                                                <div class="">
                                                @php
                                                    $avgrating = 0;
                                                @endphp
                                                @foreach ($product->orderItems->where('rstatus',1) as $orderItem )
                                                    @php
                                                        $avgrating = $avgrating + $orderItem->review->rating; 
                                                    @endphp
                                                @endforeach
                                                @for ($i=1;$i<=5;$i++)
                                                @if ($i<=$avgrating)
                                                   <i class="fa fa-star color-gold" aria-hidden="true"></i>
                                                    @else
                                                    <i class="fa fa-star color-gray" aria-hidden="true"></i>
                                                @endif
                                                @endfor
                                                <span class="font-small ml-5 text-muted"> ({{$product->orderItems->where('rstatus',1)->count()}} review)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">{{$product->regular_price}} JD</span></ins>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{$product->short_description}}</p>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            {{-- <div class="detail-qty border radius">
                                                @foreach ( Cart::instance('cart')->content() as $item )
                                                <a href="#" class="qty-down" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">{{$item->qty}}</span>
                                                <a href="#" class="qty-up" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"><i class="fi-rs-angle-small-up"></i></a>
                                                @endforeach
                                            </div> --}}
                                            <div class="product-extra-link2">
                                                @php
                                                $witems = Cart::instance('Wishlist')->content()->pluck('id');
                                         @endphp
                                           <button type="submit" class="button button-add-to-cart" wire:click.prevent="store({{$product->id}},'{{ $product->name}}',{{ $product->regular_price}})">Add to cart</button>
                                           @if ($witems->contains($product->id))
        <a aria-label="Remove From Wishlist" class="action-btn hover-up Wishlisted" href="#" wire:click.prevent="removeFromWishlist({{ $product->id}})"><i class="fi-rs-heart"></i></a>
        @else
        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="AddToWishlist({{ $product->id}}, '{{ $product-> name}}','{{ $product-> regular_price}}')"><i class="fi-rs-heart"></i></a>
      @endif
                                                    
                                            </div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li>Availability:<span class="in-stock text-success ml-5">{{$product->quantity}} Items {{$product->stock_status}}</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Additional info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews ({{$product->orderItems->where('rstatus',1)->count()}})</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                           {{$product->description}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info">
                                        <table class="font-md">
                                            <tbody>
                                                <tr class="stand-up">
                                                    <th>details</th>
                                                    <td>
                                                        <p>MDF wood, thickness of 3 mm, using the latest wood drilling
                                                            equipment and machines.</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-w-wheels">
                                                    <th>The Quality</th>
                                                    <td>
                                                        <p> High quality printable German labels, wipeable or washable.
                                                        </p>
                                                    </td>
                                                </tr>

                                                <tr class="pa_color">
                                                    <th>Encapsulation</th>
                                                    <td>
                                                        <p>5mm thickness carton packing Safe shipping process</p>
                                                    </td>
                                                </tr>
                                                <tr class="pa_size">
                                                    <th>Size</th>
                                                    <td>
                                                        <p>120X80</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                    <div class="comment-list">
                                                        @foreach ($product->orderItems->where('rstatus',1) as $orderItem )
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    @if($orderItem->order->user->profile->image)
                                                    <img src="{{asset('assets/imgs/profile')}}/{{$orderItem->order->user->profile->image}}"/>
                                                @else
                                                    <img src="{{asset('assets/imgs/profile/image1s.jpg')}}" class="rounded-circle"/>
                                                @endif
                                                <h4><a href="#">{{$orderItem->order->user->name}}</a></h4>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="">
                                                                        @php
                                                                        $avgrating = 0;
                                                                    @endphp
                                                                    @foreach ($product->orderItems->where('rstatus',1) as $orderItem )
                                                                        @php
                                                                            $avgrating = $avgrating + $orderItem->review->rating; 
                                                                        @endphp
                                                                    @endforeach
                                                                    @for ($i=1;$i<=5;$i++)
                                                                    @if ($i<=$avgrating)
                                                                       <i class="fa fa-star color-gold" aria-hidden="true"></i>
                                                                        @else
                                                                        <i class="fa fa-star color-gray" aria-hidden="true"></i>
                                                                    @endif
                                                                    @endfor
                                                                    </div>
                                                                    <p>{{$orderItem->review->comment}}</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">{{Carbon\Carbon::parse($orderItem->review->created_at)->format('d F Y g:i A')}}</p>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Related products</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach ($rproducts as $rproduct )
                                            
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                    <a href="{{route('product.details',['slug'=>$rproduct->slug])}}" tabindex="0"><img
                                    class="default-img" src="{{asset('assets/imgs/products')}}/{{$rproduct->image}}"" alt=""></a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                                class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist"
                                                            class="action-btn small hover-up" href="wishlist.php"
                                                            tabindex="0"><i class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                            href="compare.php" tabindex="0"><i
                                                                class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div
                                                        class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">New</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                <h2><a href="{{route('product.details',['slug'=>$rproduct->slug])}}" tabindex="0">{{$rproduct->name}}</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>{{$rproduct->regular_price}} JD </span>
                                                        {{-- <span class="old-price">46 JD</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                              @foreach ($categories as $category)
                              <li><a href="{{route('product.category',['slug'=>$category->slug])}}">{{ $category-> name}}</a></li>
                            @endforeach
                          </ul>
                        </div>
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach ($nproducts as $nproduct )
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="{{asset('assets/imgs/products')}}/{{$nproduct->image}}" alt="#">
                                </div>
                                <div class="content pt-10">
                                    <h5><a href="{{route('product.details',['slug'=>$nproduct->slug])}}">{{$nproduct->name}}</a></h5>
                                    <p class="price mb-0 mt-5">{{$nproduct->regular_price}} JD</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:90%"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
