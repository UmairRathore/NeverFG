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
                            <li class="breadcrumb-item active" aria-current="page">Feature List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Feature List</h6>
                            <a href="{{route('frontend_virtual_funeral.create')}}" class="btn btn-primary">Add Vritual Funeral  </a>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                @if(Session('info_deleted'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('info_deleted')}}
                                    </div>

                                @endif
                                <table id="featurelist" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    </thead>

                                    <tbody>
                                    @foreach ($virtualFuneral as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->frontend_feature_title}}</td>
                                            <td>
                                                @if($item->frontend_feature_image)
                                                    <img src="{{ asset($item->frontend_feature_image) }}" alt="Feature Image" style="max-width: 100px;">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{$item->frontend_feature_description}}</td>
                                            <td>
                                                <a class="fas fa-pencil alt" href="{{ route('frontend_virtual_funeral.edit',$item->id) }}">Edit Feature</a>
                                                <a class="fas fa-trash alt" href="{{ route('frontend_virtual_funeral.delete',$item->id) }}">Delete Feature</a>
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
@section('featurelist')
    <script>
        $(document).ready(function () {
            $('#featurelist').DataTable();
        });

    </script>
@endsection

