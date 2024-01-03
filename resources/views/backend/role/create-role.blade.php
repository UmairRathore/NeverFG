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
                            <li class="breadcrumb-item"><a href="{{route('backend.role-list')}}">Roles List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Role</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Add Role</h6>
                            {{--                             <a href="{{route('backend.symptom')}}" class="ms-text-primary">Symptom--}}
                            {{--                            </a>--}}
                        </div>
                        <div class="ms-panel-body">
                            @if(Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                    {{ Session::get('message') }}</p>
                            @endif
                            @if(Session('required_fields_empty'))
                                <div class="alert alert-danger" role="alert">
                                    {{Session('required_fields_empty')}}

                                </div>
                            @endif

                            <form method="POST" action="{{route('backend.add-role')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name">Roles</label>
                                        <div class="input-group">
                                            <input type="text" name="name" class="form-control  @error('roles') is-invalid @enderror" value="{{old('roles')}}" placeholder="Enter Role">
                                            @error('roles')
                                            <span class="invalid-feedback" role="alert">

                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <strong>Permission:</strong>--}}
{{--                                        <br/>--}}
{{--                                        @foreach($permission as $value)--}}
{{--                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}--}}
{{--                                                {{ $value->name }}</label>--}}
{{--                                            <br/>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div>
                                    <input type="Submit" class="btn btn-primary" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
