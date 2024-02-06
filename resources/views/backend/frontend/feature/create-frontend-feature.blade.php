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
                            <li class="breadcrumb-item"><a href="{{route('frontend_feature.index')}}">Frontend Features List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Frontend Features</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Add Frontend Features</h6>
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

                            <form method="POST" action="{{ route('frontend_feature.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="frontend_feature_title">Title</label>
                                        <div class="input-group">
                                            <input type="text" name="frontend_feature_title" class="form-control @error('frontend_feature_title') is-invalid @enderror" value="{{ old('frontend_feature_title') }}" placeholder="Enter Title">
                                            @error('frontend_feature_title')
                                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="frontend_feature_description">Description</label>
                                        <div class="input-group">
                                            <textarea name="frontend_feature_description" class="form-control @error('frontend_feature_description') is-invalid @enderror" placeholder="Enter Description">{{ old('frontend_feature_description') }}</textarea>
                                            @error('frontend_feature_description')
                                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="frontend_feature_image">Image</label>
                                        <div class="input-group">
                                            <input type="file" name="frontend_feature_image" onchange="displayFileName(this, 'featureImageFileName')">
                                            <span id="featureImageFileName"></span>
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </form>

                            <script>
                                function displayFileName(input, targetId) {
                                    const span = document.getElementById(targetId);
                                    span.textContent = input.files[0] ? input.files[0].name : '';
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
