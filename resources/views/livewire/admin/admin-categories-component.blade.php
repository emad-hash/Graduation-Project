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
       .sclist{
        list-style: none;
       }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Dashboard</a>
                    <span></span> All Categories
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
                                        All Categories <strong class="text-brand">{{ $categories-> total()}}</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.category.add')}}" class="btn btn-success float-end"> Add New Category
                                        </a>
                                    </div>
                                  </div>
                            </div>
                            <div class="card-body">
                                 @if(Session::has('massege'))
                                 <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                 @endif
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>slug</th>
                                            <th>Sub Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($categories->currentPage()-1)*$categories->perPage();
                                        @endphp
                                        @foreach ($categories as $category )
                                    <tr >
                                        <td>{{++$i}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            <ul class="sclist">
                                                @foreach ($category->subcategories as $scategory )
                                                    <li><i class="fa fa-caret-right"></i> {{$scategory->name}} <a href="{{route('admin.category.edit',['category_id'=>$category->id ,'scategory_id'=>$scategory->id])}}" class="text-info">Edit</a>
                                                        <a href="#" class="text-danger" onclick="confirm('Are you sure , You want to delete this subcategory?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSubcategory({{$scategory->id}})"  style="margin-left: 20px">Delete</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                        <a href="{{route('admin.category.edit',['category_id'=>$category->id])}}" class="text-info">Edit</a>
                                    <a href="#" class="text-danger" onclick="deleteConfirmation({{$category->id}})"  style="margin-left: 20px">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$categories->links()}}
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
                        <div type="button" class="btn btn-danger" onclick= "deleteCategory()">Delete</div>
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
        @this.set('category_id',id);
        $('#deleteConfirmation').modal('show');
    }

    function deleteCategory(){
        @this.call('deleteCategory');
        $('#deleteConfirmation').modal('hide');
    }
</script>
    
@endpush