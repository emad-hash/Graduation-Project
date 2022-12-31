<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Dashboard</a>
                    <span></span> Add New Coupon
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                              <div class="row">
                                <div class="col-md-6">
                                    Add New Coupon
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.coupons')}}" class="btn btn-success float-end"> All Coupon</a>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                                {{-- @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif --}}
                               <form  wire:submit.prevent="storeCoupon">
                                <div class="mb-3 mt-3">
                                    <label for="code " class="form-label">Coupon Code</label>
                                    <input type="text" name="code " class="form-control" placeholder="Enter Ccoupon Code" wire:model="code" >
                                    {{-- wire:keyup="generateSlug" --}}
                                    @error('code ')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="type" class="form-label">Coupon Type</label>
                                    <select class="form-control" name="type" wire:model="type">
                                        <option value="">Select</option>
                                        <option value="fixed">Fixed</option>
                                        <option value="percent">Percent</option>
                                    </select>
                                    @error('type ')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="value" class="form-label">Coupon Value</label>
                                    <input type="text" name="value " class="form-control" placeholder="Enter Coupon Value" wire:model="value">
                                    @error('value ')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="cart_value" class="form-label">Coupon Cart_Value</label>
                                    <input type="text" name="cart_value " class="form-control" placeholder="Enter Coupon Cart_Value" wire:model="cart_value">
                                    @error('cart_value ')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3" wire:ignore>
                                    <label for="expiry_date" class="form-label">Coupon Expiry Date</label>
                                    <input type="date" name="expiry_date" id="expiry-date" class="form-control" placeholder="Enter Coupon Expiry Date" wire:model="expiry_date">
                                    @error('expiry_date ')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                               <button type="submit" class="btn btn-primary float-en">Submit</button>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


@push('scripts')
    <script>
        $(function(){
            $('#expiry-date').datetimepicker({
                format: 'Y-MM-DD'
            });
            .on('dp.change',function(ev){
                let data = $('#expiry-date').val();
                @this.set('expiry_date',data);
            });
        });
    </script>
@endpush