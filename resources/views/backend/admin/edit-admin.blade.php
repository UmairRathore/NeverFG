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
                            <li class="breadcrumb-item"><a href="{{route('backend.index')}}"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Admin</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Edit Admin</h6>
                        </div>
                        <div class="ms-panel-body">
                            @if(Session('info_updated'))
                                <div class="alert alert-success" role="Alert">
                                    {{Session('info_updated')}}
                                </div>
                            @endif
                            @if(Session('required_fields_empty'))
                                <div class="alert alert-danger" role="Alert">
                                    {{Session('required_fields_empty')}}
                                </div>
                            @endif

                            <form  method="POST" action="{{ route ('backend.update-admin', $admin->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$admin->id}}">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name">First Name</label>
                                        <div class="input-group">
                                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"  value="{{$admin->first_name}}" placeholder="Enter First Name" >
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Last Name</label>
                                        <div class="input-group">
                                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{$admin->last_name}}" placeholder="Enter Last Name" >
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$admin->email}}" placeholder="Enter Email" readonly>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="password">Password</label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control "  placeholder="Enter password" >
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


@endsection




