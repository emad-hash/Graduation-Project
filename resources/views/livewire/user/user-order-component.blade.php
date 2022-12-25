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
        th{
            text-align: center;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> My Account
                    <span></span> My Orders

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
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>OrderId</th>
                                            <th>Sub Total</th>
                                            <th>Discount</th>
                                            <th>Tax</th>
                                            <th>Totel</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Order Date</th>      
                                            <th>Action<th>                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order )
                                        <tr>
                                          <td>{{$order->id}}</td>
                                          <td>{{$order->subtotal}}</td>
                                          <td>{{$order->discount}}</td>
                                          <td>{{$order->tax}}</td>
                                          <td>{{$order->total}}</td>
                                          <td>{{$order->firstname}}</td>
                                          <td>{{$order->lastname}}</td>
                                          <td>{{$order->mobile}}</td>
                                          <td>{{$order->email}}</td>
                                          <td>{{$order->status}}</td>
                                          <td>{{$order->created_at}}</td>
                                          <td>
                                            <a href="{{route('user.order.details',['order_id'=>$order->id])}}" class="btn btn-info btn-black">view</a>
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
