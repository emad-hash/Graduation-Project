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
                    <span></span> Edit slides
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
                                    Edit slides
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.slide')}}" class="btn btn-success float-end"> All slides</a>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                               <form  wire:submit.prevent="UpdateHomeSlider">
                                <div class="mb-3 mt-3">
                                    <label for="top_title" class="form-label">Top Title</label>
                                    <input type="text" name="top_title" class="form-control" placeholder="Enter Top Title" wire:model="top_title" >
                                    @error('top_title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title" wire:model="title">
                                    @error('title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="sub_title" class="form-label">Sub Title</label>
                                    <input type="text" name="sub_title" class="form-control" placeholder="Enter Sub Title" wire:model="sub_title">
                                    @error('sub_title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="offer" class="form-label">Offer</label>
                                    <input type="text" name="offer" class="form-control" placeholder="Enter Offer" wire:model="offer">
                                    @error('offer')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="text" name="link" class="form-control" placeholder="Enter Link" wire:model="link">
                                    @error('link')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" class="form-control" wire:model="status">
                                        <option value="">Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" wire:model="newimage" >
                                    @if ($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120">
                                        @else
                                        <img src="{{asset('assets/imgs/slider')}}/{{$image}}" width="120">
                                    @endif
                                    @error('newimage')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div> 
                                
                               <button type="submit" class="btn btn-primary float-en">Update</button>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>