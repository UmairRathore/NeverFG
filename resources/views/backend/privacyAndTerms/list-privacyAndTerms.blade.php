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
                            <li class="breadcrumb-item active" aria-current="page">Privacy And Terms</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Privacy</h6>
                            <a href="{{route('backend.add-privacyandterms')}}" class="btn btn-primary">Privacy And Terms </a>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                @if(Session('info_deleted'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('info_deleted')}}
                                    </div>

                                @endif
                                <table id="privacylist" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
                                    <th>Privacy</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @isset($privacyAndTerms)
                                    @foreach ($privacyAndTerms as $item)

                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->privacy}}</td>
                                            <td>
                                                <a class="fa fa-edit" href="{{ route('backend.edit-privacyandterms',$item->id) }}">Edit privacy</a>
                                                <a class="fas fa-trash alt" href="{{ route('backend.delete-privacyandterms',$item->id) }}">Delete privacy</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                        @endisset
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Terms </h6>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                <table id="termlist" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
                                    <th>Terms</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @isset($privacyAndTerms)
                                    @foreach ($privacyAndTerms as $item)

                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->terms}}</td>
                                            <td>
                                                <a class="fa fa-edit" href="{{ route('backend.edit-privacyandterms',$item->id) }}">Edit terms</a>
                                                <a class="fas fa-trash alt" href="{{ route('backend.delete-privacyandterms',$item->id) }}">Delete terms</a>
                                            </td>
                                        </tr>

                                    @endforeach
                                        @endisset
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
            $('#privacylist').DataTable();
        });

        $(document).ready(function () {
            $('#termlist').DataTable();
        });
    </script>
@endsection

