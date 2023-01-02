<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
        .btn{
            width: 50%;
        }
        .images{
          border-radius: 15px;
        }
        .card {
         box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
       }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">My Account</a>
                    <span></span> Profile
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
                                        Profile 
                                    </div>
                                  </div>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="main-body">
                                          <div class="row gutters-sm">
                                            <div class="col-md-4 mb-3">
                                              <div class="card">
                                                <div class="card-body">
                                                  <div class="d-flex flex-column align-items-center text-center">
                                                @if($user->profile->image)
                                                    <img src="{{asset('assets/imgs/profile')}}/{{$user->profile->image}}" class="images" height="551"/>
                                                @else
                                                    <img src="{{asset('assets/imgs/profile/image1s.jpg')}}" class="rounded-circle"/>
                                                @endif
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-8">
                                              <div class="card mb-3">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="col-sm-3">
                                                      <h6 class="mb-0">Name</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        {{$user->name}}
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-3">
                                                      <h6 class="mb-0">Email</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        {{$user->email}}
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-3">
                                                      <h6 class="mb-0">Phone</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        {{$user->profile->mobile}}
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-3">
                                                      <h6 class="mb-0">Line1</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        {{$user->profile->line1}}
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-3">
                                                      <h6 class="mb-0">Line2</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        {{$user->profile->line2}}
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-3">
                                                      <h6 class="mb-0">City</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        {{$user->profile->city}}    
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-3">
                                                      <h6 class="mb-0">Province</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        {{$user->profile->province}}    
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-3">
                                                      <h6 class="mb-0">Country</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        {{$user->profile->country}}    
                                                    </div>
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                    <div class="col-sm-3">
                                                      <h6 class="mb-0">Zip Code</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        {{$user->profile->zipcode}}
                                                    </div>
                                                  </div>
                                                  <hr>
                                
                                                  <div class="row">
                                                    <div class="col-sm-12">
                                                      <a class="btn btn-info " href="{{route('user.profile_edit')}}">Edit</a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


