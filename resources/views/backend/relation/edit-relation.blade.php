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
                            <li class="breadcrumb-item"><a href="{{route('backend.relation-list')}}">Relation List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Relation</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-customer">
                            <h6>Edit Relation</h6>
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
                            <!-- Card for creating relations -->

                            <div class="card">
                                <div class="card-header">
                                    Update Relation
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('backend.update-relation', $relation->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="relation">Relation</label>
                                                <input type="text" name="relation" class="form-control @error('relation') is-invalid @enderror" value="{{ $relation->relation }}" placeholder="Enter Relation">
                                                @error('relation')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Relation</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
