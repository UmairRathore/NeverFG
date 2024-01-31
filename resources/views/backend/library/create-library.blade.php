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
                            <li class="breadcrumb-item"><a href="{{route('backend.library-list')}}">Library Photos List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Library Photos</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Add Library Photos</h6>
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

                                <form method="POST" action="{{ route('backend.store-library') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name">Category</label>
                                            <div class="input-group">
                                                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" placeholder="Enter Category">
                                                @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="profile_image">Profile Image</label>
                                            <div class="input-group">
                                                <input type="file" name="profile_image" onchange="displayFileName(this, 'profileFileName')">
                                                <span id="profileFileName"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="icon_image">Icon Image</label>
                                            <div class="input-group">
                                                <input type="file" name="icon_image" onchange="displayFileName(this, 'iconFileName')">
                                                <span id="iconFileName"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="theme_image">Theme Image</label>
                                            <div class="input-group">
                                                <input type="file" name="theme_image"  onchange="displayFileName(this, 'themeFileName')">
                                                <span id="themeFileName"></span>
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
