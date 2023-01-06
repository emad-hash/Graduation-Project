<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
        .card {
         box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
       }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Dashboard</a>
                    <span></span> Edit Product
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
                                    Edit Product
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.products')}}" class="btn btn-success float-end"> All Product</a>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                                {{-- @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif --}}
                               <form  wire:submit.prevent="UpdateProduct">
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" wire:keyup="generateSlug" wire:model="name">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Enter Slug" wire:model="slug" >
                                    @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3" wire:ignore>
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea type="text" name="short_description" id="short_description"  class="form-control" placeholder="Enter Short  Description" wire:model="short_description" ></textarea>
                                    @error('short_description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3" wire:ignore>
                                    <label for="description" class="form-label"> Description</label>
                                    <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter  Description"wire:model="description"></textarea>
                                    @error('description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="regular_price" class="form-label">Regular Price</label>
                                    <input type="number" name="regular_price" class="form-control" placeholder="Enter Regular Price" wire:model="regular_price"  >
                                    @error('regular_price')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="sale_price" class="form-label">Sale Price</label>
                                    <input type="number" name="sale_price" class="form-control" placeholder="Enter Sale Price "  wire:model="sale_price" >
                                    @error('sale_price')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="SKU" class="form-label">SKU</label>
                                    <input type="text" name="SKU" class="form-control" placeholder="Enter SKU"  wire:model="SKU">
                                    @error('SKU')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div> 
                                <div class="mb-3 mt-3">
                                    <label for="stock_status" class="form-label" >Stock Status</label>
                                    <select class="form-control" name="stock_status" wire:model="stock_status">
                                        <option value="">Select</option>
                                        <option value="instock">InStock</option>
                                        <option value="outofstock">Out Of Stock</option>
                                    </select>
                                    @error('stock_status')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 mt-3">
                                    <label for="featured" class="form-label" >Featured</label>
                                    <select class="form-control" name="featured" wire:model="featured">
                                        <option value="">Select</option>
                                        <option value="0" class="form-control" >No</option>
                                        <option value="1" class="form-control">Yes</option>
                                    </select>
                                    @error('featured')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity"  wire:model="quantity">
                                    @error('quantity')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div> 
                                <div class="mb-3 mt-3">
                                    <label for="image" class="form-label">Image</label>
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
                                <div class="mb-3 mt-3">
                                    <label for="category_id " class="form-label">Category</label>
                                    <select class="form-control" name="category_id " wire:model="category_id" wire:change="changeSubcategory">
                                        <option value="" class="form-control" >Select Category</option>
                                        @foreach ($categories as $category )
                                        <option value="{{$category->id}}" class="form-control" >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="category_id " class="form-label">Sub Category</label>
                                    <select class="form-control" name="scategory_id " wire:model="scategory_id" >
                                        < <option value="0" class="form-control" >Select Sub Category</option>
                                        <option value="0" class="form-control" >No Sub Category</option>
                                        @foreach ($scategories as $scategory )
                                        <option value="{{$scategory->id}}" class="form-control" >{{$scategory->name}}</option>
                                        @endforeach
                                    </select>   
                                    @error('scategory_id')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                

                               <button type="submit" class="btn btn-primary float-end" >Update</button>
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
            tinymce.init({
                selector:'#short_description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                        @this.set('short_description',sd_data);
                    });
                }
            });

            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description',d_data);
                    });
                }
            });
        });
    </script>
@endpush