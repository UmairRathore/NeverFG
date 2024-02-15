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
                            <li class="breadcrumb-item active" aria-current="page">Library Photos List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Library Photos List</h6>
                            <a href="{{route('backend.add-library')}}" class="btn btn-primary">Add Library Photos </a>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                @if(Session('info_deleted'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('info_deleted')}}
                                    </div>
                                @endif

                                    <table id="librarylist" class="table table-striped thead-primary w-100">
                                        <thead>
                                        <th>No</th>
                                        <th>Library Profile</th>
                                        <th>Library Theme</th>
                                        <th>Action</th>
                                        </thead>
                                        <tbody>
                                        @foreach ($libraries as $library)
                                            <tr>
                                                <td>{{ $library->id }}</td>
                                                <td>
                                                    @if ($library->profile_image && file_exists(public_path($library->profile_image)))
                                                        <img src="{{ asset($library->profile_image) }}" alt="Library Profile" style="max-width: 100px;">
                                                    @else
                                                        <img src="{{ asset('path/to/placeholder/image.jpg') }}" alt="Library Profile" style="max-width: 100px;">
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($library->theme_image && file_exists(public_path($library->theme_image)))
                                                        <img src="{{ asset($library->theme_image) }}" alt="Library Theme" style="max-width: 100px;">
                                                    @else
                                                        <img src="{{ asset('path/to/placeholder/image.jpg') }}" alt="Library Theme" style="max-width: 100px;">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="fas fa-pencil-alt" href="{{ route('backend.edit-library', $library->id) }}"></a>
                                                    <a class="fas fa-trash-alt" href="{{ route('backend.delete-library', $library->id) }}"></a>
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
@section('librarylist')

    <script>

        $(document).ready(function () {
            $('#librarylist').DataTable();
        });


        $('#inputStateRes').on('change', function () {
            if (this.value == 'Active') {
                $(".dataTable").DataTable().column(9).search('Active').draw();
            } else if (this.value == 'InActive') {
                $(".dataTable").DataTable().column(9).search('false').draw();
            } else if (this.value == 'All') {
                $(".dataTable").DataTable().column(9).search('').draw();
            } else {
                $(".datatable").DataTable().search(this.value).draw();
            }
        });
    </script>
@endsection

