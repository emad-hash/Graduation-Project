<div>
    <style>
        .Wishlisted{
          background - color: #F15412 !important;
        border: 1px solid transparent !important;
            }
        .Wishlisted i {
          color: #fff !important;
            }
      </style>
      <main class="main">
        <div class="page-header breadcrumb-wrap">
          <div class="container">
            <div class="breadcrumb">
              <a href="/" rel="nofollow">Home</a>
              <span></span> Wishlist
            </div>
          </div>
        </div>
        <section class="mt-50 mb-50">
          <div class="container">
            <div class="row product-grid-3">
                @foreach(Cart::instance('Wishlist')->content() as $item)
<div class="col-lg-3 col-md-3 col-6 col-sm-6">
    <div class="product-cart-wrap mb-30">
        <div class="product-img-action-wrap">
            <div class="product-img product-img-zoom">
                <a href="{{route('product.details',['slug'=>$item->model->slug])}}">
                    <img class="default-img" src="{{asset('assets/imgs/products')}}/{{$item->model->image}}" alt="">

                </a>
            </div>
        <div class="product-badges product-badges-position product-badges-mrg">
            <span class="hot">New</span>
        </div>
    </div>
    <div class="product-content-wrap">
        <div class="product-category">
            <a href="shop.html">MDF wood panels</a>
        </div>
        <h2><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{ $item->model-> name}}</a></h2>
        <div class="rating-result" title="90%">
            <span>
                <span>90%</span>
            </span>
        </div>
        <div class="product-price">
            <span>{{ $item->model-> regular_price}} JD</span>
            {{-- < span class="old-price">29 JD</> --}}
    </div>
    <div class="product-action-1 show">
        <a aria-label="Remove From Wishlist" class="action-btn hover-up Wishlisted" href="#" wire:click.prevent="removeFromWishlist({{ $item->model-> id}})"><i class="fi-rs-heart"></i></a>
     
        {{-- <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$item->model->id}},'{{ $item->model->name}}',{{ $item->model->regular_price}})" ><i class="fi-rs-shopping-bag-add"></i></a> --}}
      </div >
    </div >
                                  </div >
                              </div >
                              @endforeach
            </div>
          </div>
        </section>



            </div>
