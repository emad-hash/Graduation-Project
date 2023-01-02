<div>
    <style>
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
                                    <div class="col-md-6">
                                        <a href="{{route('user.profile')}}" class="btn btn-success float-end">Profile
                                        </a>
                                    </div>
                                  </div>
                            </div>
                            
<div class="container-xl px-4 mt-4">
    @if(Session::has('message'))
    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    @endif
    <div class="row">
        <div class="col-xl-4">
            <form wire:submit.prevent="updateProfile">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    @if($newimage)
                    <img src="{{$newimage->temporaryUrl()}}" class="img-account-profile rounded-circle mb-2" />
                @elseif($image)
                    <img src="{{asset('assets/imgs/profile')}}/{{$user->profile->image}}" class="img-account-profile rounded-circle mb-2" />
                @else
                    <img src="{{asset('assets/imgs/profile/images.jpg')}}" class="img-account-profile rounded-circle mb-2" />
                @endif
                
                 <input type="file" class="form-control" wire:model="newimage" />
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">
                        Account Details
                </div>
                <div class="card-body">
                    
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label>Name :</label>
                            <input class="form-control" name="name" type="text" wire:model="name"/>
                          </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Email :</label>
                                <input  class="form-control" name="name" type="text" value="{{$email}}" disabled />
                            </div>
                            <div class="col-md-6">
                                <label>Phone :</label>
                                <input class="form-control" name="name" type="text" wire:model="mobile"/>
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label>Line1 :</label>
                                <input  class="form-control" name="name" type="text" wire:model="line1"/>
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label>Line2 :</label>
                                <input  class="form-control" name="name" type="text" wire:model="line2"/>
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label>City :</label>
                            <input  class="form-control" name="name" type="text" wire:model="city"/>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label>Province :</label>
                                <input  class="form-control" name="name" type="text" wire:model="province"/>
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-4">
                                <label>Country :</label>
                                <input  class="form-control" name="name" type="text" wire:model="country"/>
                            </div>
                            <div class="col-md-4">
                                <label>Zip Code :</label>
                                        <input  class="form-control" name="name" type="text" wire:model="zipcode"/>
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button type="submit" class="btn2 ">Update</button>
                    </form>
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

























