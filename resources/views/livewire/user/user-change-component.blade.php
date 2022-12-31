<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">My Account</a>                    
                    <span></span> Change Password
                </div>
            </div>
        </div>
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6" style="margin: 0 auto ;">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Change Password</h3>
                                        </div>
                                        @if (Session::has('password_succes'))
                                        <div class="alert alert-success" role="alert">{{Session::get('password_succes')}}</div>
                                         @endif
                                         @if (Session::has('password_error'))
                                         <div class="alert alert-success" role="alert">{{Session::get('password_error')}}</div>
                                          @endif
                                        <form  wire:submit.prevent="changePassword">
                                            @csrf
                                            <!-- EmailAddress -->
                                            <div>
                                                <label for="Current Password">Current Password</label>
                                                <input class="block mt-1 w-full" type="password" name="current_password" placeholder="Current Password" wire:model="current_password" />
                                                @error('current_password ')
                                                   <p class="text-danger">{{$message}}</p>
                                                 @enderror
                                            </div>
                                
                                            <!-- New Password -->
                                            <div class="mt-4">
                                                <label for="Current Password">New Password</label>
                                                <input class="block mt-1 w-full" type="password" name="password" placeholder="New Password" wire:model="password" />
                                                @error('password ')
                                                   <p class="text-danger">{{$message}}</p>
                                                 @enderror
                                            </div>
                                
                                            <!-- Confirm Password -->
                                            <div class="mt-4">
                                                <label for="Current Password">Confirm Password</label>
                                                <input class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirm Password" wire:model="password_confirmation" />
                                                @error('password_confirmation ')
                                                   <p class="text-danger">{{$message}}</p>
                                                 @enderror
                                            </div>
                                
                                            <div class="flex items-center justify-end mt-4">
                                               <button type="submit">Submit</button>
                                            </div>
                                        </form>
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