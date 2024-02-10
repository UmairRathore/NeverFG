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
                            <li class="breadcrumb-item"><a href="{{route('backend.pdf-list')}}">PDFs List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add PDF</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Add PDF</h6>

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

                            <!-- Card for creating questions and answers -->
                            <div class="card ">
                                <div class="card-header">
                                    Create PDF
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('backend.store-pdf') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="information_pdf">PDF</label>
                                                <div class="input-group">
                                                    <input type="file" name="information_pdf"  onchange="displayFileName(this, 'pdf')" value="{{ old('information_pdf') }}">
                                                <span id="pdf"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save PDF</button>
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
            </div>
        </div>
    </main>

@endsection
