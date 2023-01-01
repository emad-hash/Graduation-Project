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
                    <span></span> Settings
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
                                    Settings
                                </div>
                                <div class="col-md-6">
                                    {{-- <a href="{{route('admin.products')}}" class="btn btn-success float-end"> All Settings</a> --}}
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                               <form  wire:submit.prevent="saveSettings">
                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"  wire:model="email">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" wire:model="phone" >
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address" wire:model="address" >
                                    @error('address')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" placeholder="Facebook"wire:model="facebook">
                                    @error('facebook')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="twiter" class="form-label">Twiter</label>
                                    <input type="text" name="twiter" class="form-control" placeholder="Twiter" wire:model="twiter"  >
                                    @error('twiter')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="pinterest" class="form-label">Pinterest</label>
                                    <input type="text" name="pinterest" class="form-control" placeholder="Pinterest"  wire:model="pinterest" >
                                    @error('pinterest')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" name="instagram" class="form-control" placeholder="Instagram"  wire:model="instagram">
                                    @error('instagram')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div> 
                                <div class="mb-3 mt-3">
                                    <label for="youtube" class="form-label" >Youtube</label>
                                    <input type="text" name="youtube" class="form-control" placeholder="Youtube"  wire:model="youtube">
                                    @error('youtube')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="image" class="form-label">Logo</label>
                                    <input type="file" name="image" class="form-control" wire:model="newimage" >
                                    @if ($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120">
                                        @else
                                        <img src="{{asset('assets/imgs/products')}}/{{$image}}" width="120">
                                    @endif
                                    @error('newimage')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>  
                               <button type="submit" class="btn btn-primary float-end">Save</button>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>