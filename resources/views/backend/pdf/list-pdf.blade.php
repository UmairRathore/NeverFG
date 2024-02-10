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
                            <li class="breadcrumb-item"><a href="{{route('backend.index')}}"><i class="material-icons">home</i>
                                    Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">pdf List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>pdf List</h6>
                            <a href="{{route('backend.add-pdf')}}" class="btn btn-primary">Add pdf  </a>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                @if(Session('info_deleted'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('info_deleted')}}
                                    </div>

                                @endif
                                <table id="pdflist" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
                                    <th>pdf</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($pdf as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>
                                                @if ($item->information_pdf && file_exists(public_path($item->information_pdf)))
                                                    <i class="far fa-file-pdf" style="font-size: 24px;"></i> <!-- Font Awesome PDF icon -->
                                                    <span>{{ basename($item->information_pdf) }}</span> <!-- Display PDF file name -->
                                                @else
                                                    <img src="{{ asset('path/to/placeholder/image.jpg') }}" alt="Placeholder" style="max-width: 100px;">
                                                @endif
                                            </td>                                           <td>
                                                <a class="fa fa-edit" href="{{ route('backend.edit-pdf',$item->id) }}">Edit pdf</a>
                                                <a class="fas fa-trash alt" href="{{ route('backend.delete-pdf',$item->id) }}">Delete pdf</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>




@endsection
@section('faqlist')
    <script>
        $(document).ready(function () {
            $('#pdflist').DataTable();
        });

    </script>
@endsection

