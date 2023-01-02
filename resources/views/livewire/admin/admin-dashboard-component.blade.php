<div>

    <div class="content">   
        <style>
          .radius-10 {
    border-radius: 10px !important;
}

.border-info {
    border-left: 5px solid  #0dcaf0 !important;
}
.border-danger {
    border-left: 5px solid  #fd3550 !important;
}
.border-success {
    border-left: 5px solid  #15ca20 !important;
}
.border-warning {
    border-left: 5px solid  #ffc107 !important;
}


.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.bg-gradient-scooter {
    background: #17ead9;
    background: -webkit-linear-gradient( 
45deg
 , #17ead9, #6078ea)!important;
    background: linear-gradient( 
45deg
 , #17ead9, #6078ea)!important;
}
.widgets-icons-2 {
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ededed;
    font-size: 27px;
    border-radius: 10px;
}
.rounded-circle {
    border-radius: 50%!important;
}
.text-white {
    color: #fff!important;
}
.ms-auto {
    margin-left: auto!important;
}
.bg-gradient-bloody {
    background: #f54ea2;
    background: -webkit-linear-gradient( 
45deg
 , #f54ea2, #ff7676)!important;
    background: linear-gradient( 
45deg
 , #f54ea2, #ff7676)!important;
}

.bg-gradient-ohhappiness {
    background: #00b09b;
    background: -webkit-linear-gradient( 
45deg
 , #00b09b, #96c93d)!important;
    background: linear-gradient( 
45deg
 , #00b09b, #96c93d)!important;
}

.bg-gradient-blooker {
    background: #ffdf40;
    background: -webkit-linear-gradient( 
45deg
 , #ffdf40, #ff8359)!important;
    background: linear-gradient( 
45deg
 , #ffdf40, #ff8359)!important;
}
        </style>
        <div class="container mt-50 mb-50">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
                 <div class="card radius-10 border-start border-0 border-3 border-info">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div>
                        <p class="mb-0 text-secondary">Total Revenue</p>
                        <h4 class="my-1 text-info">{{$totalRevenue}} JD</h4>
                      </div>
                      <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-dollar"></i>
                      </div>
                    </div>
                  </div>
                 </div>
                 </div>
                 <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-danger">
                   <div class="card-body">
                     <div class="d-flex align-items-center">
                       <div>
                         <p class="mb-0 text-secondary">Total Sales</p>
                         <h4 class="my-1 text-danger">{{$totalSales}}</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-gift icon-stat-visual"></i>
                       </div>
                     </div>
                   </div>
                </div>
                </div>
                <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-success">
                   <div class="card-body">
                     <div class="d-flex align-items-center">
                       <div>
                         <p class="mb-0 text-secondary">Today Revenue</p>
                         <h4 class="my-1 text-success">{{$todayRevenue}} JD</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="fa fa-dollar"></i>
                       </div>
                     </div>
                   </div>
                </div>
                </div>
                <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-warning">
                   <div class="card-body">
                     <div class="d-flex align-items-center">
                       <div>
                         <p class="mb-0 text-secondary">Today Sales</p>
                         <h4 class="my-1 text-warning">{{$todaySales}}</h4>
                       </div>
                       <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-gift icon-stat-visual"></i>
                       </div>
                     </div>
                   </div>
                </div>
                </div> 
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    Latest Order 
                                </div>
                              </div>
                        </div>
                        <div class="card-body">
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
                                        <th colspan="2">Action</th>                                      
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($orders as $order )
                                <tr >
                                    <td>{{$order->id}}</td>
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
                                <a href="{{route('admin.order.details',['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Details</a>    
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
    </div>
    
</div>
<style>


</style>
