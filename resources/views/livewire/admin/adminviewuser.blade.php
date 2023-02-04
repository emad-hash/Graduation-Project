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
        .card {
         box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
       }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Dashboard</a>
                    <span></span> All Users
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
                                    <div class="col-md-4">
                                        All Users
                                        <strong class="text-brand">{{ $users-> total()}}</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Search..." wire:model="searchTerm">
                                    </div>

                                  </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>utype</th>
                                            <th>created_at</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @php
                                            $i = ($users->currentPage()-1)*$users->perPage();
                                        @endphp --}}
                                        @foreach ($users as $user )
                                    <tr >
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->utype}}</td>
                                        <td>{{$user->created_at}}</td>

                                        <td>
                                            <a href="#" class="text-danger" onclick="deleteConfirmation({{$user->id}})"  style="margin-left: 20px">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$users->links()}}
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
                        <div type="button" class="btn btn-danger" onclick="deleteUser()">Delete</div>
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
        @this.set('user_id',id);
        $('#deleteConfirmation').modal('show');
    }

    function deleteUser(){
        @this.call('deleteUser');
        $('#deleteConfirmation').modal('hide');
    }
</script>

@endpush
