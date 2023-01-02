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
                    <span></span> All slides
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
                                        All slides 
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.slide.add')}}" class="btn btn-success float-end"> Add New slides
                                        </a>
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
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Top Title</th>
                                            <th>Title</th>
                                            <th>Subv Title</th>
                                            <th>Offer</th>
                                            <th>Link</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($slides as $slide )
                                    <tr >
                                        <td>{{++$i}}</td>
                                        <td><img src="{{asset('assets/imgs/slider')}}/{{$slide->image}}" width="80px"></td>
                                        <td>{{$slide->top_title}}</td>
                                        <td>{{$slide->title}}</td>
                                        <td>{{$slide->sub_title}}</td>
                                        <td>{{$slide->offer}}</td>
                                        <td>{{$slide->link}}</td>
                                        <td>{{$slide->status == 1 ? 'Active' : 'Inactive'}}</td>
                                        <td>
                                        <a href="{{route('admin.slide.edit',['slide_id'=>$slide->id])}}" class="text-info">Edit</a>
                                    <a href="#" class="text-danger" onclick="deleteConfirmation({{$slide->id}})"  style="margin-left: 20px">Delete</a>
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
                        <div type="button" class="btn btn-danger" onclick= "deleteslide()">Delete</div>
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
        @this.set('slide_id',id);
        $('#deleteConfirmation').modal('show');
    }

    function deleteslide(){
        @this.call('deleteslide');
        $('#deleteConfirmation').modal('hide');
    }
</script>
    
@endpush