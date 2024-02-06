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
                            <li class="breadcrumb-item"><a href="{{route('frontend_index.index')}}">Frontend Index List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Frontend Index</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Edit Frontend Index</h6>
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

                            <form method="POST" action="{{ route('frontend_index.update', $index->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="index_image_heading">Title</label>
                                        <div class="input-group">
                                            <input type="text" name="index_image_heading" class="form-control @error('index_image_heading') is-invalid @enderror" value="{{ $index->index_image_heading }}" placeholder="Enter Title">
                                            @error('index_image_heading')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="index_image">Image</label>
                                        <div class="input-group">
                                            <input type="file" name="index_image" onchange="displayFileName(this, 'indexImageFileName')">
                                            <span id="indexImageFileName">{{ $index->index_image }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="index_card_image_heading">Title</label>
                                        <div class="input-group">
                                            <input type="text" name="index_card_image_heading" class="form-control @error('index_card_image_heading') is-invalid @enderror" value="{{ $index->index_card_image_heading }}" placeholder="Enter Title">
                                            @error('index_card_image_heading')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="index_card_image">Image</label>
                                        <div class="input-group">
                                            <input type="file" name="index_card_image" onchange="displayFileName(this, 'indexCardImageFileName')">
                                            <span id="indexCardImageFileName">{{ $index->index_card_image }}</span>
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
