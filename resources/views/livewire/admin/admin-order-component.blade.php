<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
        td{
            text-align: center;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> All Orders
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
                                        All Orders 
                                        <strong class="text-brand">{{ $orders-> total()}}</strong>
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
                                            <th>OrderId</th>
                                            <th>SubTotal</th>
                                            <th>Discount</th>
                                            <th>Tax</th>
                                            <th>Total</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Zipcode</th>
                                            <th>Status</th>
                                            <th>Order Date</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($orders->currentPage()-1)*$orders->perPage();
                                        @endphp
                                        @foreach ($orders as $order )
                                    <tr >
                                        <td>{{++$i}}</td>
                                        <td>{{$order->subtotal}} JD</td>
                                        <td>{{$order->discount}} JD</td>
                                        <td>{{$order->tax }} JD</td>
                                        <td>{{$order->total}} JD</td>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->lastname}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->zipcode}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>

                                        <td>
                                            {{-- <a href="{{route('admin.order.edit',['order_id'=>$order->id])}}" class="text-info">Edit</a>
                                            <a href="#" class="text-danger" onclick="deleteConfirmation({{$order->id}})"  style="margin-left: 20px">Delete</a> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$orders->links()}}
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
                        <div type="button" class="btn btn-danger" onclick="deleteOrder()">Delete</div>
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
        @this.set('order_id',id);
        $('#deleteConfirmation').modal('show');
    }

    function deleteOrder(){
        @this.call('deleteOrder');
        $('#deleteConfirmation').modal('hide');
    }
</script>

@endpush