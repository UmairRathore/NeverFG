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
                            <li class="breadcrumb-item"><a href="{{route('backend.feature-list')}}">Features List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Service</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Add Feature</h6>
                            {{--                             <a href="{{route('backend.symptom')}}" class="ms-text-primary">Symptom--}}
                            {{--                            </a>--}}
                        </div>

                        <form action="{{ route('backend.add-feature') }}" method="post" id="mainForm">
                            @csrf

                            <!-- Service Section -->
                            <div class="ms-panel-body">
                                @if(Session::has('service'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                        {{ Session::get('service') }}</p>
                                @endif
                                @if(Session('service_failed'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('service_failed')}}

                                    </div>
                                @endif
                                <!-- Card for creating Features -->
                                <div class="card">
                                    <div class="card-header">
                                        Create Service
                                    </div>

                                    <div class="card-body service-section">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="service">Service</label>
                                                <input type="text" name="service" class="form-control @error('service') is-invalid @enderror" value="{{ old('service') }}" placeholder="Enter Service">
                                                @error('service')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="submitForm('service')">Save Service</button>
                                    </div>

                                </div>
                            </div>

                            <!-- Title Section -->
                            <div class="ms-panel-body">
                                @if(Session::has('title'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                        {{ Session::get('title') }}</p>
                                @endif
                                @if(Session('title_failed'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('title_failed')}}

                                    </div>
                                @endif
                                <!-- Card for creating Features -->
                                <div class="card">
                                    <div class="card-header">
                                        Create Title
                                    </div>

                                    <div class="card-body title-section">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Enter Title">
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="submitForm('title')">Save Title</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Section -->
                            <div class="ms-panel-body">
                                @if(Session::has('feature'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                        {{ Session::get('feature') }}</p>
                                @endif
                                @if(Session('feature_failed'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('feature_failed')}}

                                    </div>
                                @endif
                                <!-- Card for creating Features -->
                                <div class="card">
                                    <div class="card-header">
                                        Create Feature
                                    </div>

                                    <div class="card-body feature-section">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="service_id">Service</label>
                                                <select name="service_id" class="form-control">
                                                    <option value="" disabled selected>Select a Service</option>
                                                    @foreach($services as $service)
                                                        <option value="{{ $service->id }}">{{ $service->service }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="title_id">Title</label>
                                                    <select name="title_id" class="form-control">
                                                        <option value="" disabled selected>Select a title</option>
                                                        @foreach($titles as $title)
                                                            <option value="{{ $title->id }}">{{ $title->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="feature">Feature</label>
                                                <input type="text" name="feature" class="form-control @error('feature') is-invalid @enderror" value="{{ old('feature') }}" placeholder="Enter Feature">
                                                @error('feature')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="submitForm('feature')">Save Feature</button>
                                    </div>

                                    <!-- Hidden field to store the section value -->
                                    <input type="hidden" name="section" id="section">
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <script>
        function submitForm(section) {
            // Set the hidden input value to the current section
            document.getElementById('section').value = section;

            // Submit the form
            document.getElementById('mainForm').submit();
        }
    </script>
@endsection

