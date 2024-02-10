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
                            <li class="breadcrumb-item active" aria-current="page">Index List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Feature List</h6>
                            <a href="{{route('frontend_index.create')}}" class="btn btn-primary">Add Index  </a>
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
                                    <th>Index Image Title</th>
                                    <th>Image Image</th>
                                    <th>Index Card Image Title</th>
                                    <th>Index Card</th>
                                    <th>Index Card Image Description</th>
                                    <th>Action</th>
                                    </thead>

                                    <tbody>
                                    @foreach ($index as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->index_image_heading}}</td>
                                            <td>
                                                @if($item->index_image)
                                                    <img src="{{ asset($item->index_image) }}" alt="Index Image" style="max-width: 100px;">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{$item->index_card_image_heading}}</td>
                                            <td>
                                                @if($item->index_card_image)
                                                    <img src="{{ asset($item->index_card_image) }}" alt="Index Card Image" style="max-width: 100px;">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{$item->index_card_image_description}}</td>


                                            <td>
                                                <a class="fas fa-pencil alt" href="{{ route('frontend_index.edit',$item->id) }}">Edit Index</a>
                                                <a class="fas fa-trash alt" href="{{ route('frontend_index.destroy',$item->id) }}">Delete Index</a>
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

