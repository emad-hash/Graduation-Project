<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <form wire:submit.prevent="placeOrder">
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4 class="mb-25">Billing Address</h4>
                            <div >
                                <div class="form-group">
                                    <input type="text" name="fname" value="" placeholder="First name *" wire:model="firstname">
                                    @error('firstname')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
                                    @error('lastname')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Type Your Email"  wire:model="email">
                                    @error('email')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" value="" placeholder="Your Phone"  wire:model="mobile">
                                    @error('mobile')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input  type="text" name="add" value="" placeholder="Address line1"  wire:model="line1">
                                    @error('line1')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input  type="text" name="add" value="" placeholder="Address line2"  wire:model="line2">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="country" value="" placeholder="Country" wire:model="country">
                                    @error('country')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="province" value="" placeholder="Province" wire:model="province">
                                    @error('province')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" value="" placeholder="City name" wire:model="city">
                                    @error('city')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
                                    @error('zipcode')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="ship_detail">
                                    <div class="form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input"  name="different-add" id="differentaddress" value="1" type="checkbox" wire:model="ship_to_different">
                                                <label class="form-check-label label_info" data-bs-toggle="collapse" data-target="#collapseAddress" href="#collapseAddress" aria-controls="collapseAddress" for="differentaddress"><span>Ship to a different address?</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($ship_to_different)
                            <h4 class="mb-25">Shipping Address</h4>
                            <div >
                                <div class="form-group">
                                    <input type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
                                    @error('s_firstname')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
                                    @error('s_lastname')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
                                    @error('s_email')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
                                    @error('s_mobile')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line1">
                                    @error('s_line1')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line2">
                                    @error('s_line2')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="country" value="" placeholder="Country" wire:model="s_country">
                                    @error('s_country')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="province" value="" placeholder="Province" wire:model="s_province">
                                    @error('s_province')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" value="" placeholder="City name" wire:model="s_city">
                                    @error('s_city')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
                                    @error('s_zipcode')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( Cart::instance('cart')->content() as $item ) 
                                        <tr>
                                            <td class="image product-thumbnail"><img src="{{asset('assets/imgs/products')}}/{{$item->model->image}}" alt="#"></td>
                                            <td>
                                                <h5><a href="product-details.html">{{$item->model->name}}</a></h5> <span class="product-qty">{{$item->qty}}</span>
                                            </td>
                                            <td>{{$item->subtotal}} JD </td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <div class="payment_method">
                                <div class="mb-25">
                                    <h5>Payment</h5>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" value="cod" type="radio" name="payment-method" id="exampleRadios3" wire:model="paymentmode">
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>                                        
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" value="card" type="radio" name="payment-method" id="exampleRadios4" wire:model="paymentmode">
                                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment">Card Payment</label>                                        
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" value="paypal" type="radio" name="payment-method" id="exampleRadios5" wire:model="paymentmode">
                                        <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Paypal</label>                                        
                                    </div>
                                </div>
                                @error('paymentmode')  <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                            @if(Session::has('checkout'))
                               <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">{{Session::get('checkout')['total']}} JD</span></p>                                       
                             @endif  
                            @if($errors->isEmpty())
                               <div wire:ignore id="processing" style="font-size:22px; margin-bottom:20px;padding-left:37px;color:green;display:none;">
                                  <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                     <span>Processing...</span>
                                </div>
                             @endif
                             <button type="submit" class="btn btn-medium">Place order now </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         </form>
    </main></div>