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
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> All Coupons
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
                                        All Coupons <strong class="text-brand">{{$coupons-> total()}}</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.coupons.add')}}" class="btn btn-success float-end"> Add New Coupons
                                        </a>
                                    </div>
                                  </div>
                            </div>
                            <div class="card-body">
                                 @if(Session::has('massege'))
                                 <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                 @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>code</th>
                                            <th>type</th>
                                            <th>value</th>
                                            <th>cart_value</th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($coupons->currentPage()-1)*$coupons->perPage();
                                        @endphp
                                        @foreach ($coupons as $coupon )
                                    <tr >
                                        <td>{{++$i}}</td>
                                        <td>{{$coupon->code}}</td>
                                        <td>{{$coupon->type}}</td>
                                        @if ($coupon->type == 'fixed')
                                        <td>{{$coupon->value}} JD</td>
                                        @else
                                        <td>{{$coupon->value}}%</td>
                                        @endif
                                        <td>{{$coupon->cart_value}}</td>
                                        <td>{{$coupon->created_at}}</td>
                                        <td>{{$coupon->updated_at}}</td>

                                        <td>
                                        <a href="{{route('admin.coupons.edit',['coupon_id'=>$coupon->id])}}" class="text-info">Edit</a>
                                    <a href="#" class="text-danger" onclick="deleteConfirmation({{$coupon->id}})"  style="margin-left: 20px">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$coupons->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">Do you want to delete this record ?</h4>
                        <div type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</div>
                        <div type="button" class="btn btn-danger" onclick= "deletecoupon()">Delete</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function deleteConfirmation(id)
    {
        @this.set('coupons_id',id);
        $('#deleteConfirmation').modal('show');
    }

    function deletecoupon(){
        @this.call('deletecoupon');
        $('#deleteConfirmation').modal('hide');
    }
</script>
    
@endpush