@extends('layouts.backend.master')

@section('content')



    <!-- Main Content -->
    <main class="body-content">
        <!-- Navigation Bar -->
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ps-0">
                            <li class="breadcrumb-item"><a href="{{route('backend.index')}}"><i class="material-icons">home</i>
                                    Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Role List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Role List</h6>
                                <a href="{{route('backend.add-role')}}" class="btn btn-primary">Add Role </a>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                @if(Session('info_deleted'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('info_deleted')}}
                                    </div>

                                @endif

                                <table id="rolelist" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
                                    <th>name</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{$role->id}}</td>
                                            <td>{{$role->name}}</td>
                                            <td>
                                                    <a class="fa fa-edit" href="{{ route('backend.edit-role',$role->id) }}">Edit Role</a>
                                                    <a class="fas fa-trash alt" href="{{ route('backend.delete-role',$role->id) }}">Delete Role</a>
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
    </main>




@endsection
@section('rolelist')
    <script>
        $(document).ready(function () {
            $('#rolelist').DataTable();
        });
    </script>
@endsection

