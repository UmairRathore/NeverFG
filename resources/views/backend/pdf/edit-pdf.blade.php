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
                            <li class="breadcrumb-item"><a href="{{route('backend.pdf-list')}}">pdfs List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit pdf</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-customer">
                            <h6>Edit pdf</h6>

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

                            <!-- Card for updating pdf -->
                            <div class="card mt-4">
                                <div class="card-header">
                                    Update pdf
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('backend.update-pdf', $pdf->id) }}" method="post">
                                        @csrf
                                        @method('PUT') {{-- Use the PUT method for updates --}}
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="information_pdf">Theme Image</label>
                                                    <div class="input-group">
                                                        <input type="file" name="information_pdf" accept="image/*" onchange="displayFileName(this, 'information_pdf')" value="{{ old('information_pdf') }}">
                                                        <span id="information_pdf">{{ $pdf->information_pdf }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update pdf</button>
                                    </form> <script>
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
            </div>
        </div>
    </main>

@endsection
