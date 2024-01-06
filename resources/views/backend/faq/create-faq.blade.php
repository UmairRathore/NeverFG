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
                            <li class="breadcrumb-item"><a href="{{route('backend.faq-list')}}">Faqs List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Faq</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custome">
                            <h6>Add Faq</h6>
                            {{--                             <a href="{{route('backend.symptom')}}" class="ms-text-primary">Symptom--}}
                            {{--                            </a>--}}
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
                            <!-- Card for creating topics -->
                            <div class="card">
                                <div class="card-header">
                                    Create Topic
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('backend.storeTopic') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="topic">Topic</label>
                                                <input type="text" name="topic" class="form-control @error('topic') is-invalid @enderror" value="{{ old('topic') }}" placeholder="Enter Topic">
                                                @error('topic')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save Topic</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Card for creating questions and answers -->
                            <div class="card mt-4">
                                <div class="card-header">
                                    Create FAQ
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('backend.topic-storeQuestionAnswer') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                            <label for="topic_id">Topic</label>
                                            <select name="topic_id" class="form-control">
                                                <option value="" disabled selected>Select a Topic</option>
                                                @foreach($topics as $topic)
                                                    <option value="{{ $topic->id }}">{{ $topic->topic }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="question">Question</label>
                                                <input type="text" name="question" class="form-control @error('question') is-invalid @enderror" value="{{ old('question') }}" placeholder="Enter question">
                                                @error('question')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <!-- Add more fields for answers as needed -->
                                            <div class="col-md-6 mb-3">
                                                <label for="answer">Answer</label>
                                                <textarea name="answer" class="form-control @error('answer') is-invalid @enderror" placeholder="Enter answer">{{ old('answer') }}</textarea>
                                                @error('answer')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save FAQ</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
