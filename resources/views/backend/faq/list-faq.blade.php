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
                            <li class="breadcrumb-item active" aria-current="page">Faq List</li>
                        </ol>
                    </nav>
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Faq List</h6>
                            <a href="{{route('backend.add-faq')}}" class="btn btn-primary">Add Faq and Topics </a>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                @if(Session('info_deleted'))
                                    <div class="alert alert-danger" role="alert">
                                        {{Session('info_deleted')}}
                                    </div>

                                @endif
                                <table id="faqlist" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
                                    <th>Topic</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($faqs as $faq)
                                        @if($faq->topic_id!=null)
                                        <tr>
                                            <td>{{$faq->id}}</td>
                                            <td>{{$faq->topic}}</td>
                                            <td>{{$faq->question}}</td>
                                            <td>{{$faq->answer}}</td>
                                            <td>
                                                <a class="fa fa-edit" href="{{ route('backend.edit-faq',$faq->id) }}">Edit Faq</a>
                                                <a class="fas fa-trash alt" href="{{ route('backend.delete-faq',$faq->id) }}">Delete Faq</a>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
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
                            <h6>Topic List </h6><small>Disclaimer, upon deleting topic all above faqs linked to these topics will be deleted</small>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                <table id="topiclist" class="table table-striped thead-primary w-100">
                                    <thead>
                                    <th>No</th>
                                    <th>Topic</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($faqs as $faq)
                                        @if($faq->topic_id==null)
                                        <tr>
                                            <td>{{$faq->id}}</td>
                                            <td>{{$faq->topic}}</td>

                                            <td>
                                                <a class="fa fa-edit" href="{{ route('backend.edit-faq',$faq->id) }}">Edit Faq</a>
                                                <a class="fas fa-trash alt" href="{{ route('backend.delete-faq',$faq->id) }}">Delete Faq</a>
                                            </td>
                                        </tr>
                                        @endif
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
            $('#faqlist').DataTable();
        });

        $(document).ready(function () {
            $('#topiclist').DataTable();
        });
    </script>
@endsection

