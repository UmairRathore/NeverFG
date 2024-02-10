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
                            <li class="breadcrumb-item"><a href="{{route('backend.privacyandterms-list')}}"> Privacy and terms List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Privacy and terms</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Add  Privacy and terms</h6>
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
                            <div class="card">
                                <div class="card-header">
                                    Create Privacy and Terms
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('backend.store-privacyandterms') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 mb-6">
                                                <label for="privacy">Privacy</label>
                                                <textarea name="privacy" id="privacy"  class="form-control form-control-lg @error('privacy') is-invalid @enderror" placeholder="Enter Privacy">{{ old('privacy') }}</textarea>
                                                @error('privacy')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-6">
                                                    <label for="terms">Terms</label>
                                                    <textarea name="terms" id="terms" class="form-control form-control-lg @error('terms') is-invalid @enderror" placeholder="Enter terms">{{ old('terms') }}</textarea>
                                                    @error('terms')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save Privacy and terms</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!-- Include CKEditor script -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <!-- Initialize CKEditor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#privacy'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#terms'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection

