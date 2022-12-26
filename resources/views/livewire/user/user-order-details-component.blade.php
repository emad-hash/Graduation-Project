<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> My Account
                    <span></span> My Orders
                    <span></span> Details
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-md-12">
                        @if(Session::has('order_message'))
                                 <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Ordered Details 
                                    </div>
                                    <div class="col-md-6">
                                        @if ($order->status == 'ordered')  
                                        <a href="#" class="btn btn-success float-end " style="background-color: red;" wire:click.prevent="cancelOrder">Cancel Order</a>
                                        @endif
                                        <a href="{{route('user.order')}}" class="btn btn-success float-end mr-10"> All Order</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table shopping-summery text-center clean">
                                        <thead>
                                            <tr class="main-heading">
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Status</th>
                                                @if ($order->status == 'delivered')  
                                                <th scope="col">Delivery Date</th>
                                                @elseif ($order->status == 'canceled')
                                                <th scope="col">Cancellation Date</th>
                                                @endif
                                                
                                            </tr>
                                        </thead>
                                        
                                            <tr>
                                                <td class="image product-thumbnail">
                                                    {{$order->id}}
                                                 </td>
                                                <td class="product-des product-name">
                                                    {{$order->created_at}}
                                                </td>
                                                <td class="text-center" data-title="Stock">
                                                    {{$order->status}}
                                                   
                                                </td>
                                                @if ($order->status == 'delivered')  
                                                <td class="text-right" data-title="Cart">
                                                    {{$order->delivered_date}}
                                                </td>
                                                @elseif ($order->status == 'canceled')
                                                <td class="text-right" data-title="Cart">
                                                    {{$order->canceled_date}}
                                                </td>
                                                @endif

                                            </tr>
                                
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-30">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Ordered Items 
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table shopping-summery text-center clean">
                                        <thead>
                                            <tr class="main-heading">
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Subtotal * Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $order->orderItems as $item )     
                                            <tr>
                                                <td class="image product-thumbnail">
                                                   {{$item->id}}
                                                </td>
                                                <td class="image product-thumbnail">
                                    <img src="{{asset('assets/imgs/products')}}/{{$item->product->image}}" alt="#"> 
                                                 </td>
                                                <td class="product-des product-name">
                                                    <h5 class="product-name"><p>{{$item->product->name}}</p></h5> 
                                                </td>
                                    <td class="price" data-title="Price"><span>{{$item->product->regular_price}}JD </span></td>
                                                <td class="text-center" data-title="Stock">
                                                    <div class="detail-qty border radius  m-auto">
                                                             <p>{{$item->quantity}}</p>
                                                    </div>
                                                </td>
                                                <td class="text-right" data-title="Cart">
                                                    <div class="detail-qty border radius  m-auto">
                                                    <span>{{$item->regular_price * $item->quantity }} JD </span>
                                                </div>
                                                </td>
                                                @if($order->status == 'delivered' && $item->rstatus == false)
                                                <td >
                                                <a href="{{route('user.reviews',['order_item_id'=>$item->id])}}">Write Review</a>
                                                </td>
                                                @endif
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <table class=" table-striped" >
                                    <tbody>
                                        <tr >
                                            <td class="cart_total_label" >Cart Subtotal</td>
                                            <td class="cart_total_amount" ><span class="font-lg fw-900 text-brand"> 
                                            {{$order->subtotal}} JD</span></td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Discount</td>
                                            <td class="cart_total_amount"><span class="font-lg fw-900 text-brand"> 
                                            {{$order->discount}} JD</span></td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Tax</td>
                                            <td class="cart_total_amount"><span class="font-lg fw-900 text-brand"> 
                                             {{$order->tax}} JD</span></td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Shipping</td>
                                            <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Total</td>
                                            <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand"> 
                                            {{$order->total}} JD</span></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-30">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Billing Details
                                    </div>
                                  </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Line1</th>
                                            <th>Line2</th>
                                            <th>City</th>
                                            <th>Province</th>
                                            <th>Country</th>
                                            <th>Zipcode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->lastname}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->line1}}</td>
                                        <td>{{$order->line2}}</td>
                                        <td>{{$order->city}}</td>
                                        <td>{{$order->province}}</td>
                                        <td>{{$order->country}}</td>
                                        <td>{{$order->zipcode}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               @if ($order->is_shipping_different)    
               <div class="row mb-30">
                   <div class="col-md-12">
                       <div class="card">
                           <div class="card-header">
                               <div class="row">
                                   <div class="col-md-6">
                                       Shipping Details
                                   </div>
                                 </div>
                           </div>
                           <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Line1</th>
                                        <th>Line2</th>
                                        <th>City</th>
                                        <th>Province</th>
                                        <th>Country</th>
                                        <th>Zipcode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$order->shipping->firstname}}</td>
                                    <td>{{$order->shipping->lastname}}</td>
                                    <td>{{$order->shipping->email}}</td>
                                    <td>{{$order->shipping->mobile}}</td>
                                    <td>{{$order->shipping->line1}}</td>
                                    <td>{{$order->shipping->line2}}</td>
                                    <td>{{$order->shipping->city}}</td>
                                    <td>{{$order->shipping->province}}</td>
                                    <td>{{$order->shipping->country}}</td>
                                    <td>{{$order->shipping->zipcode}}</td>
                                </tr>
                                </tbody>
                            </table>
                           </div>
                       </div>
                   </div>
               </div>
               @endif
               @if($this->paymentmode == 'cod')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Transaction
                                    </div>
                                  </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Transaction Mode</th>
                                            <th>Status</th>
                                            <th>Transaction Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$order->transaction->mode}}</td>
                                        <td>{{$order->transaction->status}}</td>
                                        <td>{{$order->transaction->created_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               @endif
            </div>
        </section>
    </main>
</div>
